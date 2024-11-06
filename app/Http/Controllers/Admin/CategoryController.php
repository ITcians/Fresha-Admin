<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'category',
            'color',
            'description'
        ]);

        Category::create([
            'category' => $request->category,
            'color' => $request->color,
            'description' => $request->description,
            'slug' => Str::slug($request->category),
        ]);
        toast('Category added successfully','success');
        return redirect()->back();
    }

}
