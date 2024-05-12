<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Fraud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class FraudController extends Controller
{
    public function create()
    {
        $categories = Categorie::all();

        return view('fraud.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'image_ids.*' => 'string', // Validate the image IDs
            'tags' => 'nullable|string',
            'video' => 'nullable|string|url',
            'url' => 'nullable|string|url',
        ]);

        $fraud = new Fraud([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
            'tags' => $request->tags,
            'video' => $request->video,
            'url' => $request->url,
        ]);

        if ($request->has('image_ids')) {
            $images = [];

            foreach ($request->image_ids as $id) {
                // Retrieve the file from the temporary location
                $file = Storage::get($id);

                // Move the file to a permanent location
                $path = Storage::move($id, 'public/frauds/' . basename($id));

                $images[] = [
                    'path' => Storage::url($path),
                    'file_name' => basename($path),
                    'file_size' => Storage::size($path),
                    'file_type' => Storage::mimeType($path),
                ];
            }

            $fraud->images = count($images) > 0 ? json_encode($images) : json_encode([]);
        }

        $fraud->save();

        return redirect()->route('home')->with('success', 'Fraud reported successfully.');
    }
    public function tmpUpload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048',
        ]);

        $path = $request->file('file')->store('tmp');

        return response()->json([
            'id' => $path,
        ]);
    }

}
