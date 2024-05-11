<?php

namespace App\Http\Controllers;

use App\Models\Fraud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FraudController extends Controller
{

    public function create(){
        return view('fraud.create');
    }
         // ...
         public function store(Request $request)
         {
             $request->validate([
                 'name' => 'required|string|max:255',
                 'description' => 'required|string',
                 'category_id' => 'required|integer|exists:categories,id',
                 'image.*' => 'required|file|mimes:png,jpeg,jpg|max:8192',
                 'tags' => 'nullable|string',
                 'video' => 'nullable|string|url',
                 'url' => 'nullable|string|url',
             ]);

             $fraud = new Fraud([
                 'name' => $request->name,
                 'description' => $request->description,
                 'category_id' => $request->category_id,
                 'tags' => $request->tags,
                 'video' => $request->video,
                 'url' => $request->url,
             ]);

             if ($request->hasFile('image')) {
                 $images = [];

                 foreach ($request->file('image') as $file) {
                     $path = $file->store('public/frauds');

                     $images[] = [
                         'path' => Storage::url($path),
                         'file_name' => $file->getClientOriginalName(),
                         'file_size' => $file->getSize(),
                         'file_type' => $file->getClientMimeType(),
                     ];
                 }

                 $fraud->images = $images;
             }

             $fraud->save();

             return redirect()->route('home')->with('success', 'Fraud reported successfully.');
         }

         public function tmpUpload(Request $request)
         {
             $request->validate([
                 'image.*' => 'required|file|mimes:png,jpeg,jpg|max:8192',
             ]);

             $images = [];

             foreach ($request->file('image') as $file) {
                 $path = $file->store('public/frauds');

                 $images[] = [
                     'path' => Storage::url($path),
                     'file_name' => $file->getClientOriginalName(),
                     'file_size' => $file->getSize(),
                     'file_type' => $file->getClientMimeType(),
                 ];
             }

             // Enregistrez les images dans la base de données ici si nécessaire

             return response()->json(['images' => $images]);
         }



}
