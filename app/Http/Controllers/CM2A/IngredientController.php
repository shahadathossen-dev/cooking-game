<?php

namespace App\Http\Controllers\CM2A;

use Illuminate\Http\Request;
use App\Models\CM2A\Ingredient;
use App\Http\Controllers\Controller;
use App\Http\Requests\CM2A\IngredientRequest;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ingredient $ingredient)
    {
        return view('cm2a.ingredients.index', ['ingredients' => $ingredient->all()]);
    }

    public function list(Ingredient $ingredient)
    {
        return $ingredient->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cm2a.ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngredientRequest $request)
    {
        $newIngredient = Ingredient::create($request->all());

        return redirect()->route('cm2a.ingredients.index')->withStatus(__('Ingredient created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CM2A\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        return view('cm2a.ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CM2A\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        return view('cm2a.ingredients.edit', compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CM2A\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(IngredientRequest $request, Ingredient $ingredient)
    {
        $updated = $ingredient->update($request->all());
        return redirect()->route('cm2a.ingredients.index')->withStatus(__('Ingredient successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CM2A\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        return redirect()->route('cm2a.ingredients.index')->withStatus(__('Ingredient successfully deleted.'));
    }
}
