<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('category.index');
    }
    public function view()
    {
        return view('category.view');
    }
    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->save();

        return redirect('/category');

    }
}
