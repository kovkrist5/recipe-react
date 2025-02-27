<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Dish::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            "categoryId"=>"required",
            

            "desc"=>"required|array",

            "inst"=>"required|",
            "prep"=>"required",
            "cooktime"=> "required|nullable"
        ]);
        /*$dish = new Dish();
        $dish->name = $request->name;
        $dish->categoryId = $request->categoryId;
        $dish->desc=$request->desc;
        $dish->inst=$request->inst;
        $dish->prep=$request->prep;
        $dish->cooktime=$request->cooktime;
        $dish->save();*/
        Dish::create($request->all());

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
