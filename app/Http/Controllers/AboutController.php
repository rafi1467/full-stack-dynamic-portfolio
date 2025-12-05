<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $about = About::first();
        return view('pages.about', compact('about'));
    }
}
