<?php

namespace App\Http\Controllers;

use App\Models\Fraud;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $frauds = Fraud::where('status', 'pending')
        ->latest('created_at')
        ->take(8)
        ->get();
        foreach ($frauds as $fraud) {
            if (is_string($fraud->images)) {
                preg_match('/"file_name":"([^"]+)"/', $fraud->images, $matches);
                $fraud->firstImageName = $matches[1] ?? null;
            } else {
                $fraud->firstImageName = null; // No images found
            }
        }
        return view('home', compact('frauds'));
    }
}
