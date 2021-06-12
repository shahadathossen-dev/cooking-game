<?php

namespace App\Http\Controllers\CM3;

use Illuminate\Http\Request;
use App\Models\CM3\Plate;
use App\Models\CM3\FoodItem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CM3\FoodItemRequest;

class FoodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FoodItem $food_item)
    {
        return view('cm3.food-items.index', ['food_items' => $food_item->all()]);
    }

    public function list(FoodItem $food_item)
    {
        return $food_item->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Plate $plate)
    {
        return view('cm3.food-items.create', ['plate_colors' => $plate->all()->pluck('plate_color')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodItemRequest $request)
    {
        if($request->avatar) {
            $version = '1';
            $fileUrl = $this->uploadFile($request);
            $request->merge(['food_url' => $fileUrl, 'ver' => $version]);
        }
        $newFoodItem = FoodItem::create($request->except(['avatar']));

        return redirect()->route('cm3.food-items.index')->withStatus(__('FoodItem created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CM3\FoodItem  $food_item
     * @return \Illuminate\Http\Response
     */
    public function show(FoodItem $food_item)
    {
        return view('cm3.food-items.show', compact('food_item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CM3\FoodItem  $food_item
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodItem $food_item)
    {
        $plate_colors = Plate::all()->pluck('plate_color');
        return view('cm3.food-items.edit', compact('food_item', 'plate_colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CM3\FoodItem  $food_item
     * @return \Illuminate\Http\Response
     */
    public function update(FoodItemRequest $request, FoodItem $food_item)
    {
        if($request->avatar) {
            $fileUrl = $this->uploadFile($request);
            $request->merge(['food_url' => $fileUrl, 'ver' => $food_item->ver + 1]);
        }
        $newFoodItem = $food_item->update($request->except(['avatar']));
        return redirect()->route('cm3.food-items.index')->withStatus(__('FoodItem successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CM3\FoodItem  $food_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodItem $food_item)
    {
        if(File::exists('storage/avatars/' . $food_item->ing)) File::deleteDirectory('storage/avatars/' . $food_item->ing);
        $food_item->delete();

        return redirect()->route('cm3.food-items.index')->withStatus(__('FoodItem successfully deleted.'));
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
