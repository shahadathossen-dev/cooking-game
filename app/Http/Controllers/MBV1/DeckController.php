<?php

namespace App\Http\Controllers\MBV1;

use Illuminate\Http\Request;
use App\Models\MBV1\Deck;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MBV1\DeckRequest;

class DeckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Deck $deck)
    {
        return view('mbv1.decks.index', ['decks' => $deck->all()]);
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
        return view('mbv1.decks.create');
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
        return redirect()->route('mbv1.decks.index')->withStatus(__('Deck created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MBV1\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function show(Deck $deck)
    {
        return view('mbv1.decks.show', compact('deck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MBV1\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function edit(Deck $deck)
    {
        return view('mbv1.decks.edit', compact('deck'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MBV1\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function update(DeckRequest $request, Deck $deck)
    {
        $updateDeck = $deck->update($request->all());
        return redirect()->route('mbv1.decks.index')->withStatus(__('Deck successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MBV1\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deck $deck)
    {
        $deck->delete();
        return redirect()->route('mbv1.decks.index')->withStatus(__('Deck successfully deleted.'));
    }
}
