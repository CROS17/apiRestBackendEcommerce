<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyRequest;
use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    //
    public function index()
    {
        return Family::all();
    }

    public function show(Family $fami)
    {
        return $fami;
    }

    public function store(Request $request)
    {
        $family = Family::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Family Created successfully!"
//            'family' => $family
        ], 201);
    }

    public function update(FamilyRequest $request, Family $family)
    {
        $family->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Family Updated successfully!"
        ], 200);

    }

    public function delete(Family $family)
    {
        $family->update([
            'condition' => 0
        ]);

        return response()->json([
            'status' => true,
            'message' => "Family Deleted successfully!",
        ], 204);
    }
}
