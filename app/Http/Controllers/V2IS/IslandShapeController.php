<?php

namespace App\Http\Controllers\V2IS;

use App\Models\V2IS\IslandShape;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\V2IS\IslandShapeRequest;

class IslandShapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IslandShape $islandShape)
    {
        return view('v2is.island-shapes.index', ['islandShapes' => $islandShape->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v2is.island-shapes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IslandShapeRequest $request)
    {
        $newislandShape = IslandShape::create($request->except(['avatar']));
        return redirect()->route('v2is.island-shapes.index')->withStatus(__('Island Shape created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\V2IS\IslandShape  $islandShape
     * @return \Illuminate\Http\Response
     */
    public function show(IslandShape $islandShape)
    {
        return view('v2is.island-shapes.show', compact('islandShape'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\V2IS\IslandShape  $islandShape
     * @return \Illuminate\Http\Response
     */
    public function edit(IslandShape $islandShape)
    {
        return view('v2is.island-shapes.edit', compact('islandShape'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\V2IS\IslandShape  $islandShape
     * @return \Illuminate\Http\Response
     */
    public function update(IslandShapeRequest $request, IslandShape $islandShape)
    {
        $updated = $islandShape->update($request->all());
        return redirect()->route('v2is.island-shapes.index')->withStatus(__('Island Shape successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\V2IS\IslandShape  $islandShape
     * @return \Illuminate\Http\Response
     */
    public function destroy(IslandShape $islandShape)
    {
        $islandShape->delete();

        return redirect()->route('v2is.island-shapes.index')->withStatus(__('Island Shape successfully deleted.'));
    }

}
