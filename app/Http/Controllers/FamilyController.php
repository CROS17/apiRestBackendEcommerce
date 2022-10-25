<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    //
    public function index()
    {
        return Family::all();
    }

    public function show(Item $fami)
    {
        return $fami;
    }

    public function store(Request $request)
    {
        $fami = Family::create($request->all());

        return response()->json($fami, 201);
    }

    public function update(Request $request, Family $fami)
    {
        $fami->update($request->all());

        return response()->json($fami, 200);
    }

    public function delete(Family $fami)
    {
        $fami->delete();

        return response()->json(null, 204);
    }
}
