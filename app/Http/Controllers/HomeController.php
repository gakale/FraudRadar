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
        return view('home', compact('frauds'));
    }
}
