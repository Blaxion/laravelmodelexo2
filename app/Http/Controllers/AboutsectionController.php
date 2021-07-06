<?php

namespace App\Http\Controllers;
use App\Models\Aboutsection;
use Illuminate\Http\Request;

class AboutsectionController extends Controller
{
    // about Controller
    public function about()
    {
        $aboutSections = Aboutsection::all();
        return view("pages.about", compact("aboutSections"));
    }
}
