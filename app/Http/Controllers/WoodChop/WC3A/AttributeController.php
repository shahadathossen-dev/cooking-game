<?php

namespace App\Http\Controllers\WoodChop\WC3A;

use Illuminate\Http\Request;
use App\Models\WoodChop\WC3A\Attribute;
use App\Http\Controllers\Controller;
use App\Http\Requests\WoodChop\WC3A\AttributeRequest;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Attribute $attribute)
    {
        return view('woodchop.wc3a.attributes.index', ['attribute' => $attribute->first()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('woodchop.wc3a.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeRequest $request)
    {
        $newIngredient = Attribute::create($request->all());

        return redirect()->route('woodchop.wc3a.attributes.index')->withStatus(__('Attribute created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute $attribute)
    {
        return view('woodchop.wc3a.attributes.show', compact('attribute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute $attribute)
    {
        return view('woodchop.wc3a.attributes.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WoodChop\WC3A\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeRequest $request, Attribute $attribute)
    {
        $updated = $attribute->update($request->all());
        return redirect()->route('woodchop.wc3a.attributes.index')->withStatus(__('Attribute successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WoodChop\WC3A\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        return redirect()->route('woodchop.wc3a.attributes.index')->withStatus(__('Attribute successfully deleted.'));
    }
}
