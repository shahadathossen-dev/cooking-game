<?php

namespace App\Http\Controllers\PopupGame\V2A;

use Illuminate\Http\Request;
use App\Models\PopupGame\V2A\Attribute;
use App\Http\Controllers\Controller;
use App\Http\Requests\PopupGame\V2A\AttributeRequest;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Attribute $attribute)
    {
        return view('popupgame.v2a.attributes.index', ['attributes' => $attribute->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('popupgame.v2a.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeRequest $request)
    {
        $newIngredient = Attribute::create($request->except('pickColor'));

        return redirect()->route('popupgame.v2a.attributes.index')->withStatus(__('Attribute created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PopupGame\V2A\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute $attribute)
    {
        return view('popupgame.v2a.attributes.show', compact('attribute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopupGame\V2A\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute $attribute)
    {
        return view('popupgame.v2a.attributes.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopupGame\V2A\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeRequest $request, Attribute $attribute)
    {
        $updated = $attribute->update($request->except('pickColor'));
        return redirect()->route('popupgame.v2a.attributes.index')->withStatus(__('Attribute successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopupGame\V2A\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        return redirect()->route('popupgame.v2a.attributes.index')->withStatus(__('Attribute successfully deleted.'));
    }
}
