<?php

namespace App\Http\Controllers\MBV2;

use Illuminate\Http\Request;
use App\Models\MBV2\Deck;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MBV2\DeckRequest;

class DeckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Deck $deck)
    {
        return view('mbv2.decks.index', ['decks' => $deck->all()]);
    }

    public function list(Deck $deck)
    {
        return $deck->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mbv2.decks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeckRequest $request)
    {
        $newDeck = Deck::create($request->all());
        return redirect()->route('mbv2.decks.index')->withStatus(__('Deck created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MBV2\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function show(Deck $deck)
    {
        return view('mbv2.decks.show', compact('deck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MBV2\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function edit(Deck $deck)
    {
        return view('mbv2.decks.edit', compact('deck'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MBV2\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function update(DeckRequest $request, Deck $deck)
    {
        $updateDeck = $deck->update($request->all());
        return redirect()->route('mbv2.decks.index')->withStatus(__('Deck successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MBV2\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deck $deck)
    {
        $deck->delete();
        return redirect()->route('mbv2.decks.index')->withStatus(__('Deck successfully deleted.'));
    }
}
