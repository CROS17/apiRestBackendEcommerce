<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show(Category $cate)
    {
        return $cate;
    }

    public function store(Request $request)
    {
        $family = Category::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Category Created successfully!"
//            'family' => $family
        ], 201);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Category Updated successfully!"
        ], 200);

    }

    public function delete(Category $category)
    {
        $category->update([
            'condition' => 0
        ]);

        return response()->json([
            'status' => true,
            'message' => "Category Deleted successfully!",
        ], 204);
    }
}
