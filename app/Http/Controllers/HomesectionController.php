<?php

namespace App\Http\Controllers;

use App\Models\Homesection;
use Illuminate\Http\Request;

class HomesectionController extends Controller
{
    // home Controller
    public function home()
    {
        $homeSections = Homesection::all();
        return view("welcome", compact("homeSections"));
    }
}
