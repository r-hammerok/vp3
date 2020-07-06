<?php

namespace App\Http\Controllers;

use App\Categories;
use App\MainConfig;
use App\Products;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $this->fillGeneralData();

        $this->viewData['games'] = Products::query()->orderByDesc('created_at')->
        paginate(MainConfig::LIMIT_POSTS_ON_MAIN_PAGE);

        return view('main', $this->viewData);
    }
}
