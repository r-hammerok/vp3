<?php

namespace App\Http\Controllers;

use App\Categories;
use App\MainConfig;
use App\Products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $viewData = [];

    protected function fillGeneralData()
    {
        $this->viewData['categories'] = Categories::all(['id', 'name'])->toArray();

        $this->viewData['gameInFooter'] = $this->getRandomGames(1);
    }

    protected function getRandomGames(int $count): array
    {
        $gamesId = array_flip(Products::all()->pluck('id')->toArray());
        $randomGames = array_rand($gamesId, $count);
        $result = Products::query()->find($randomGames)->toArray();
        if ($count == 1 && !empty($result)) {
            return ['0' => $result];
        }
        return $result;
    }
}
