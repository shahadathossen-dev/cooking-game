<?php

namespace App\Http\Controllers\CM1B;

use Illuminate\Http\Request;
use App\Models\CM1B\Ingredient;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\CM1B\IngredientRequest;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ingredient $ingredient)
    {
        return view('cm1b.ingredients.index', ['ingredients' => $ingredient->all()]);
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
        return view('cm1b.ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngredientRequest $request)
    {
        if($request->avatar) {
            $version = '1';
            $fileUrl = $this->uploadFile($request);
            $request->merge(['ing_photo_link' => $fileUrl, 'ver' => $version]);
        }
        $newIngredient = Ingredient::create($request->except(['avatar']));

        return redirect()->route('cm1b.ingredients.index')->withStatus(__('Ingredient created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CM1B\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        return view('cm1b.ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CM1B\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        return view('cm1b.ingredients.edit', compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CM1B\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(IngredientRequest $request, Ingredient $ingredient)
    {
        if($request->avatar) {
            // $newVersion = $this->getNewVersion($ingredient->ing_photo_link);

            $fileUrl = $this->uploadFile($request);
            $request->merge(['ing_photo_link' => $fileUrl, 'ver' => $ingredient->ver++]);
        }
        $newIngredient = $ingredient->update($request->except(['avatar']));
        return redirect()->route('cm1b.ingredients.index')->withStatus(__('Ingredient successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CM1B\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        if(File::exists('storage/avatars/' . $ingredient->ing)) File::deleteDirectory('storage/avatars/' . $ingredient->ing);
        $ingredient->delete();

        return redirect()->route('cm1b.ingredients.index')->withStatus(__('Ingredient successfully deleted.'));
    }

    public function uploadFile($request) {
        $fileName = $request->file('avatar')->getClientOriginalName();
        $uploadFile = $request->file('avatar')->move(public_path('storage/avatars/' . '/' . $request->ing), $fileName);
        return asset('storage/avatars/' . $request->ing . '/' . $fileName);
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
