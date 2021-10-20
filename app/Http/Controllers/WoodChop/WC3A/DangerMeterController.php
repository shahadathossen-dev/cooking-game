<?php

namespace App\Http\Controllers\WoodChop\WC3A;

use Illuminate\Http\Request;
use App\Models\WoodChop\WC3A\DangerMeter;
use App\Http\Controllers\Controller;
use App\Http\Requests\WoodChop\WC3A\DangerMeterRequest;

class DangerMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DangerMeter $dangerMeter)
    {
        return view('woodchop.wc3a.danger-meters.index', ['dangerMeters' => $dangerMeter->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('woodchop.wc3a.danger-meters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DangerMeterRequest $request)
    {
        $newIngredient = DangerMeter::create($request->all());

        return redirect()->route('woodchop.wc3a.danger-meters.index')->withStatus(__('DangerMeter created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\DangerMeter  $dangerMeter
     * @return \Illuminate\Http\Response
     */
    public function show(DangerMeter $dangerMeter)
    {
        return view('woodchop.wc3a.danger-meters.show', compact('dangerMeter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\DangerMeter  $dangerMeter
     * @return \Illuminate\Http\Response
     */
    public function edit(DangerMeter $dangerMeter)
    {
        return view('woodchop.wc3a.danger-meters.edit', compact('dangerMeter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WoodChop\WC3A\DangerMeter  $dangerMeter
     * @return \Illuminate\Http\Response
     */
    public function update(DangerMeterRequest $request, DangerMeter $dangerMeter)
    {
        $updated = $dangerMeter->update($request->all());
        return redirect()->route('woodchop.wc3a.danger-meters.index')->withStatus(__('DangerMeter successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WoodChop\WC3A\DangerMeter  $dangerMeter
     * @return \Illuminate\Http\Response
     */
    public function destroy(DangerMeter $dangerMeter)
    {
        $dangerMeter->delete();

        return redirect()->route('woodchop.wc3a.danger-meters.index')->withStatus(__('DangerMeter successfully deleted.'));
    }
}
