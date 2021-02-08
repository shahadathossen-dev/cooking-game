<?php

namespace App\Http\Controllers\CM1A;

use Illuminate\Http\Request;
use App\Models\CM1A\Ingredient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\CM1A\MergedIngredient;
use App\Http\Requests\CM1A\MergedIngredientRequest;

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
        if($request->avatar) {
            $version = '1';
            $fileUrl = $this->uploadFile($request);
            $request->merge(['photo_link' => $fileUrl, 'ver' => $version]);
        }
        $newIngredient = MergedIngredient::create($request->except(['avatar']));
        return redirect()->route('cm1a.merged-ingredients.index')->withStatus(__('MergedIngredient created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CM1A\MergedIngredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(MergedIngredient $ingredient)
    {
        return view('cm1a.merged-ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CM1A\MergedIngredient  $ingredient
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
     * @param  \App\Models\CM1A\MergedIngredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(MergedIngredientRequest $request, MergedIngredient $ingredient)
    {
        if($request->avatar) {
            // $newVersion = $this->getNewVersion($ingredient->ing_photo_link);

            $fileUrl = $this->uploadFile($request);
            $request->merge(['photo_link' => $fileUrl, 'ver' => $ingredient->ver + 1]);
        }
        $updated = $ingredient->update($request->except(['avatar']));
        return redirect()->route('cm1a.merged-ingredients.index')->withStatus(__('MergedIngredient successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CM1A\MergedIngredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(MergedIngredient $ingredient)
    {
        if(File::exists('storage/avatars/' . $ingredient->new_item)) File::deleteDirectory('storage/avatars/' . $ingredient->new_item);
        $ingredient->delete();

        return redirect()->route('cm1a.merged-ingredients.index')->withStatus(__('MergedIngredient successfully deleted.'));
    }

    public function uploadFile($request) {
        $fileName = $request->file('avatar')->getClientOriginalName();
        $uploadFile = $request->file('avatar')->move(public_path('storage/avatars/' . '/' . $request->new_item), $fileName);
        return asset('storage/avatars/' . $request->new_item . '/' . $fileName);
    }

    public function getNewVersion($oldVersionUrl) {
        $pathArray = explode('/', $oldVersionUrl);
        $oldVersion = $pathArray[count($pathArray) - 2];
        $versionSplit = explode('-', $oldVersion);
        $versionPrefix = current($versionSplit);
        $oldVersionNumber = end($versionSplit);
        $oldVersionNumber = (int) $oldVersionNumber;
        $newVersionNumber =  $oldVersionNumber++;
        return $newVersion = $versionPrefix . '-' . $newVersionNumber;
    }
}
