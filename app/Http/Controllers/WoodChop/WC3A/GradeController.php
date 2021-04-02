<?php

namespace App\Http\Controllers\WoodChop\WC3A;

use Illuminate\Http\Request;
use App\Models\WoodChop\WC3A\Grade;
use App\Http\Controllers\Controller;
use App\Http\Requests\WoodChop\WC3A\GradeRequest;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Grade $grade)
    {
        return view('woodchop.wc3a.grades.index', ['grades' => $grade->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('woodchop.wc3a.grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GradeRequest $request)
    {
        $newIngredient = Grade::create($request->all());

        return redirect()->route('woodchop.wc3a.grades.index')->withStatus(__('Grade created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        return view('woodchop.wc3a.grades.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('woodchop.wc3a.grades.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WoodChop\WC3A\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(GradeRequest $request, Grade $grade)
    {
        $updated = $grade->update($request->all());
        return redirect()->route('woodchop.wc3a.grades.index')->withStatus(__('Grade successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WoodChop\WC3A\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()->route('woodchop.wc3a.grades.index')->withStatus(__('Grade successfully deleted.'));
    }
}
