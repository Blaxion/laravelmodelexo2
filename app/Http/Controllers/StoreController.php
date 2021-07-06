<?php

namespace App\Http\Controllers;
use App\Models\Aboutsection;
use App\Models\Horairesection;
use App\Models\Horaire;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store()
    {
        $aboutSections = Aboutsection::all() ;
        $horaireSections = Horairesection::all();
        $horaires=Horaire::all();
        return view("pages.store", compact('horaires', 'aboutSections', 'horaireSections'));
    }
}
