<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $this->fillGeneralData();
        return view('about', $this->viewData);
    }
}
