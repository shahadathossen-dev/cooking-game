<?php

namespace App\Http\Controllers\DungeonCleaner;

use Illuminate\Http\Request;
use App\Models\DungeonCleaner\TileSpawn;
use App\Http\Controllers\Controller;
use App\Http\Requests\DungeonCleaner\TileSpawnRequest;

class TileSpawnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TileSpawn $tileSpawn)
    {
        return view('dungeon-cleaner.tile-spawns.index', ['tileSpawns' => $tileSpawn->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dungeon-cleaner.tile-spawns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TileSpawnRequest $request)
    {
        $newIngredient = TileSpawn::create($request->all());

        return redirect()->route('dungeon-cleaner.tile-spawns.index')->withStatus(__('Tile Spawn created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\TileSpawn  $tileSpawn
     * @return \Illuminate\Http\Response
     */
    public function show(TileSpawn $tileSpawn)
    {
        return view('dungeon-cleaner.tile-spawns.show', compact('tileSpawn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\TileSpawn  $tileSpawn
     * @return \Illuminate\Http\Response
     */
    public function edit(TileSpawn $tileSpawn)
    {
        return view('dungeon-cleaner.tile-spawns.edit', compact('tileSpawn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WoodChop\WC3A\TileSpawn  $tileSpawn
     * @return \Illuminate\Http\Response
     */
    public function update(TileSpawnRequest $request, TileSpawn $tileSpawn)
    {
        $updated = $tileSpawn->update($request->all());
        return redirect()->route('dungeon-cleaner.tile-spawns.index')->withStatus(__('Tile Spawn successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WoodChop\WC3A\TileSpawn  $tileSpawn
     * @return \Illuminate\Http\Response
     */
    public function destroy(TileSpawn $tileSpawn)
    {
        $tileSpawn->delete();

        return redirect()->route('dungeon-cleaner.tile-spawns.index')->withStatus(__('Tile Spawn successfully deleted.'));
    }
}
