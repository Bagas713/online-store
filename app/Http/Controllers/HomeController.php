<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Laptpo Store | Bagas G";
        $viewData["products"] = Product::all();
        return view("home.index")->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page ...";
        $viewData["author"] = "Developed by: Bagas Gumelar";
        return view('home.about')->with("viewData", $viewData);
    }
}
