<?php

namespace App\Http\Controllers\WoodChop\WC1A;

use Illuminate\Http\Request;
use App\Models\WC1A\Ingredient;
use App\Http\Controllers\Controller;
use App\Models\WC1A\MergedIngredient;
use App\Http\Requests\WC1A\MergedIngredientRequest;

class MergedIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MergedIngredient $ingredient)
    {
        return view('cm1a.merged-ingredients.index', ['ingredients' => $ingredient->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::all(['ing as name'])->toArray();
        $merged_ingredients = MergedIngredient::all(['new_item as name'])->toArray();
        $ingredients_list = $this->unique_multidimensional_array(array_merge($ingredients, $merged_ingredients), 'name');
        return view('cm1a.merged-ingredients.create', ['ingredients_list' => $ingredients_list]);
    }

    public function unique_multidimensional_array($array, $key) { 
        $temp_array = array(); 
        $i = 0; 
        $key_array = array(); 

        foreach($array as $val) { 
            if (!in_array($val[$key], $key_array)) { 
                $key_array[$i] = $val[$key]; 
                $temp_array[$i] = $val; 
            } 
            $i++; 
        } 
        return $temp_array; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MergedIngredientRequest $request)
    {
        $newIngredient = MergedIngredient::create($request->all());

        return redirect()->route('cm1a.merged-ingredients.index')->withStatus(__('MergedIngredient created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WC1A\MergedIngredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(MergedIngredient $ingredient)
    {
        return view('cm1a.merged-ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WC1A\MergedIngredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(MergedIngredient $ingredient)
    {
        $ingredients = Ingredient::all(['ing as name'])->toArray();
        $merged_ingredients = MergedIngredient::all(['new_item as name'])->toArray();
        $ingredients_list = array_merge($ingredients, $merged_ingredients);
        return view('cm1a.merged-ingredients.edit', compact('ingredient', 'ingredients_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WC1A\MergedIngredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(MergedIngredientRequest $request, MergedIngredient $ingredient)
    {
        $updated = $ingredient->update($request->all());
        return redirect()->route('cm1a.merged-ingredients.index')->withStatus(__('MergedIngredient successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WC1A\MergedIngredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(MergedIngredient $ingredient)
    {
        $ingredient->delete();

        return redirect()->route('cm1a.merged-ingredients.index')->withStatus(__('MergedIngredient successfully deleted.'));
    }
}
