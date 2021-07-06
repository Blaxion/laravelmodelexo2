<?php

namespace App\Http\Controllers;
use App\Models\Productsection;
use Illuminate\Http\Request;

class ProductsectionController extends Controller
{
    // product Controller
    public function products()
    {
        $productSections = Productsection::all();
        return view("pages.products", compact("productSections"));
    }
}
