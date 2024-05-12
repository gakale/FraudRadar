<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function show($slug)
    {
        return view('fraud.create', compact('categories'));
    }
}
