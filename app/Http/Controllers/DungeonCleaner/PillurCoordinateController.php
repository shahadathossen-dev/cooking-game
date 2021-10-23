<?php

namespace App\Http\Controllers\DungeonCleaner;

use Illuminate\Http\Request;
use App\Models\DungeonCleaner\PillurCoordinate;
use App\Http\Controllers\Controller;
use App\Http\Requests\DungeonCleaner\PillurCoordinateRequest;

class PillurCoordinateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PillurCoordinate $pillurCoordinate)
    {
        return view('dungeon-cleaner.pillur-coordinates.index', ['pillurCoordinates' => $pillurCoordinate->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dungeon-cleaner.pillur-coordinates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PillurCoordinateRequest $request)
    {
        $newIngredient = PillurCoordinate::create($request->all());

        return redirect()->route('dungeon-cleaner.pillur-coordinates.index')->withStatus(__('Pillur Coordinate created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\PillurCoordinate  $pillurCoordinate
     * @return \Illuminate\Http\Response
     */
    public function show(PillurCoordinate $pillurCoordinate)
    {
        return view('dungeon-cleaner.pillur-coordinates.show', compact('pillurCoordinate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\PillurCoordinate  $pillurCoordinate
     * @return \Illuminate\Http\Response
     */
    public function edit(PillurCoordinate $pillurCoordinate)
    {
        return view('dungeon-cleaner.pillur-coordinates.edit', compact('pillurCoordinate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WoodChop\WC3A\PillurCoordinate  $pillurCoordinate
     * @return \Illuminate\Http\Response
     */
    public function update(PillurCoordinateRequest $request, PillurCoordinate $pillurCoordinate)
    {
        $updated = $pillurCoordinate->update($request->all());
        return redirect()->route('dungeon-cleaner.pillur-coordinates.index')->withStatus(__('Pillur Coordinate successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WoodChop\WC3A\PillurCoordinate  $pillurCoordinate
     * @return \Illuminate\Http\Response
     */
    public function destroy(PillurCoordinate $pillurCoordinate)
    {
        $pillurCoordinate->delete();

        return redirect()->route('dungeon-cleaner.pillur-coordinates.index')->withStatus(__('Pillur Coordinate successfully deleted.'));
    }
}
