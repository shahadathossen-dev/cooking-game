<?php

namespace App\Http\Controllers\V1IS;

use App\Models\V1IS\IslandSize;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\V1IS\IslandSizeRequest;

class IslandSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IslandSize $islandSize)
    {
        return view('v1is.island-sizes.index', ['islandSizes' => $islandSize->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1is.island-sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IslandSizeRequest $request)
    {
        $newislandSize = IslandSize::create($request->except(['avatar']));
        return redirect()->route('v1is.island-sizes.index')->withStatus(__('Island Shape created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\V1IS\IslandSize  $islandSize
     * @return \Illuminate\Http\Response
     */
    public function show(IslandSize $islandSize)
    {
        return view('v1is.island-sizes.show', compact('islandSize'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\V1IS\IslandSize  $islandSize
     * @return \Illuminate\Http\Response
     */
    public function edit(IslandSize $islandSize)
    {
        return view('v1is.island-sizes.edit', compact('islandSize'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\V1IS\IslandSize  $islandSize
     * @return \Illuminate\Http\Response
     */
    public function update(IslandSizeRequest $request, IslandSize $islandSize)
    {
        $updated = $islandSize->update($request->all());
        return redirect()->route('v1is.island-sizes.index')->withStatus(__('Island Shape successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\V1IS\IslandSize  $islandSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(IslandSize $islandSize)
    {
        $islandSize->delete();

        return redirect()->route('v1is.island-sizes.index')->withStatus(__('Island Shape successfully deleted.'));
    }

}
