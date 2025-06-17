<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function categories()
    {
        return view('records');
    }

    public function category($category)
    {
        return view('category', compact('category'));
    }

    public function show($slug)
    {
        return view('record-show', compact('slug'));
    }

    public function create()
    {
        return view('enregistrer');
    }
}
