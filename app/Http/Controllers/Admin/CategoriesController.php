<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use App\MainConfig;
use App\Orders;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function index()
    {
        $this->fillGeneralData();

        $this->viewData['categories'] = Categories::all(['id', 'name', 'description']);

        return view('admin.categories', $this->viewData);
    }

    public function store(Request $request)
    {
        $res = Categories::query()->create(['name' => $request->name, 'description' => $request->description]);

        return ['id' => $res->id, 'name' => $request->name, 'description' => $request->description];
    }

    public function edit(int $id)
    {
        $this->viewData['category'] = Categories::query()->find($id);
        return view('admin.category-new', $this->viewData);
    }

    public function update(Request $request, int $id)
    {
        $validateData = $request->validate([
            'category_name' => ['required', 'string', 'max:255']
        ]);

        $category = Categories::query()->find($id);
        $category->name = $validateData['category_name'];
        $category->description = $request->category_desc ?? '';
        $category->save();

        return redirect(route('categories.index'));
    }

    public function destroy($id)
    {
        Categories::destroy($id);

        return false;
    }

    public function games()
    {
        $this->fillGeneralData();

        $this->viewData['games'] = Products::all()->toArray();

        return view('admin-games', $this->viewData);
    }
}
