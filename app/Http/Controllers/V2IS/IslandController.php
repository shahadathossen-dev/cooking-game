<?php

namespace App\Http\Controllers\V2IS;

use Illuminate\Http\Request;
use App\Models\V2IS\Island;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Storage;
use App\Http\Requests\V2IS\IslandRequest;

class IslandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Island $island)
    {
        return view('v2is.islands.index', ['islands' => $island->all()]);
    }

    public function list(Island $island)
    {
        return $island->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v2is.islands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IslandRequest $request)
    {
        $newIsland = Island::create($request->all());
        return redirect()->route('v2is.islands.index')->withStatus(__('Island created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\V2IS\Island  $island
     * @return \Illuminate\Http\Response
     */
    public function show(Island $island)
    {
        return view('v2is.islands.show', compact('island'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\V2IS\Island  $island
     * @return \Illuminate\Http\Response
     */
    public function edit(Island $island)
    {
        return view('v2is.islands.edit', compact('island'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\V2IS\Island  $island
     * @return \Illuminate\Http\Response
     */
    public function update(IslandRequest $request, Island $island)
    {
        $updateIsland = $island->update($request->all());
        return redirect()->route('v2is.islands.index')->withStatus(__('Island successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\V2IS\Island  $island
     * @return \Illuminate\Http\Response
     */
    public function destroy(Island $island)
    {
        $island->delete();
        return redirect()->route('v2is.islands.index')->withStatus(__('Island successfully deleted.'));
    }
}
