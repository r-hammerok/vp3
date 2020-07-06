<?php

namespace App\Http\Controllers;

use App\Categories;
use App\MainConfig;
use App\Products;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($newsId = null)
    {
        $this->fillGeneralData();

        if ($newsId === null) {
            return view('news', $this->viewData);
        } else {
            $this->viewData['gamesInBottom'] = $this->getRandomGames(MainConfig::COUNT_RAND_GAMES_IN_BOTTOM);

            return view('news-one', $this->viewData);
        }
    }
}
