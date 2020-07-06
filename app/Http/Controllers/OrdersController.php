<?php

namespace App\Http\Controllers;

use App\Categories;
use App\MainConfig;
use App\Orders;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $this->fillGeneralData();

        $this->viewData['orders'] = Orders::query()->where('id_user', '=', Auth::id())
            ->with('product')->orderByDesc('created_at')->
            paginate(MainConfig::LIMIT_ORDERS_ON_PAGE);

        return view('orders', $this->viewData);
    }
}
