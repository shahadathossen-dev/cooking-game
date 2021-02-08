<?php

namespace App\Http\Controllers\CM1B;

use Illuminate\Http\Request;
use App\Models\CM1B\Ingredient;
use App\Models\CM1B\MergedIngredient;
use App\Http\Controllers\Controller;
use App\Models\CM1B\IngredientPriority;
use App\Http\Requests\CM1B\IngredientPriorityRequest;

class IngredientPriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IngredientPriority $ingredient)
    {
        return view('cm1b.ingredients-priority.index', ['ingredients' => $ingredient->all()]);
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
        return view('cm1b.ingredients-priority.create', ['ingredients_list' => $ingredients_list]);
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
    public function store(IngredientPriorityRequest $request)
    {
        $newIngredient = IngredientPriority::create($request->all());

        return redirect()->route('cm1b.ingredient-priority.index')->withStatus(__('IngredientPriority created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CM1B\IngredientPriority  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(IngredientPriority $ingredient)
    {
        return view('cm1b.ingredients-priority.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CM1B\IngredientPriority  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(IngredientPriority $ingredient)
    {
        $ingredients = Ingredient::all(['ing as name'])->toArray();
        $merged_ingredients = MergedIngredient::all(['new_item as name'])->toArray();
        $ingredients_list = array_merge($ingredients, $merged_ingredients);
        return view('cm1b.ingredients-priority.edit', compact('ingredient', 'ingredients_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CM1B\IngredientPriority  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(IngredientPriorityRequest $request, IngredientPriority $ingredient)
    {
        $updated = $ingredient->update($request->all());
        return redirect()->route('cm1b.ingredient-priority.index')->withStatus(__('IngredientPriority successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CM1B\IngredientPriority  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngredientPriority $ingredient)
    {
        $ingredient->delete();

        return redirect()->route('cm1b.ingredient-priority.index')->withStatus(__('IngredientPriority successfully deleted.'));
    }
}
