<?php

namespace App\Http\Controllers;

use App\Categories;
use App\MainConfig;
use App\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(int $categoryId)
    {
        $this->fillGeneralData();

        $this->viewData['categoryName'] = Categories::query()->find($categoryId)->toArray()['name'];

        $this->viewData['games'] = Products::query()->where('id_category', '=', $categoryId)->
        orderByDesc('created_at')->paginate(MainConfig::LIMIT_POSTS_ON_CATEGORY_PAGE);

        return view('category', $this->viewData);
    }
}
