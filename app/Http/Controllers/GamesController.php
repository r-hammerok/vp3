<?php

namespace App\Http\Controllers;

use App\Categories;
use App\MainConfig;
use App\Products;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(int $id)
    {
        $this->fillGeneralData();

        $this->viewData['games'] = Products::query()->find($id)->toArray();
        $this->viewData['gamesInBottom'] = $this->getRandomGames(MainConfig::COUNT_RAND_GAMES_IN_BOTTOM);

        return view('game-one', $this->viewData);
    }
}
