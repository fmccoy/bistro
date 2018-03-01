<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\RecipeIngredient;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $recipes = Recipe::all();
      return view('recipes.crud')
        ->with('crud', 'index')
        ->with('data', $recipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $recipe = Recipe::find($id);

      return view('recipes.crud')
        ->with('crud', 'single')
        ->with('data', $recipe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $recipe = Recipe::find($id);

      return view('recipes.crud')
        ->with('crud', 'edit')
        ->with('data', $recipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $recipe = Recipe::find($id);
      $recipe->name = $request->name;
      $recipe->category = implode(array_wrap($request->category));
      $recipe->yield = $request->yield;
      $recipe->type = $request->type;
      $recipe->file = $request->file;

      foreach($request->ingredients as $ing) {
        $recipe->updateIngredient($ing['id'], $ing, $recipe->id);
      }
      $recipe->save();

      return redirect()->route('recipes.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
