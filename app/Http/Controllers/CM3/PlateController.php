<?php

namespace App\Http\Controllers\CM3;

use Illuminate\Http\Request;
use App\Models\CM3\Plate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CM3\PlateRequest;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Plate $plate)
    {
        return view('cm3.plates.index', ['plates' => $plate->all()]);
    }

    public function list(Plate $plate)
    {
        return $plate->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cm3.plates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlateRequest $request)
    {
        if($request->avatar) {
            $version = '1';
            $fileUrl = $this->uploadFile($request);
            // $request->merge(['plate_img' => $fileUrl]);
            $request->merge(['plate_img' => $fileUrl, 'ver' => $version]);
        }
        $newPlate = Plate::create($request->except(['avatar']));

        return redirect()->route('cm3.plates.index')->withStatus(__('Plate created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CM3\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function show(Plate $plate)
    {
        return view('cm3.plates.show', compact('plate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CM3\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function edit(Plate $plate)
    {
        return view('cm3.plates.edit', compact('plate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CM3\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function update(PlateRequest $request, Plate $plate)
    {
        if($request->avatar) {
            // $newVersion = $this->getNewVersion($plate->ing_photo_link);

            $fileUrl = $this->uploadFile($request);
            // $request->merge(['plate_img' => $fileUrl]);
            $request->merge(['ing_photo_link' => $fileUrl, 'ver' => $plate->ver + 1]);
        }
        $newPlate = $plate->update($request->except(['avatar']));
        return redirect()->route('cm3.plates.index')->withStatus(__('Plate successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CM3\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plate $plate)
    {
        if(File::exists('storage/avatars/' . $plate->ing)) File::deleteDirectory('storage/avatars/' . $plate->ing);
        $plate->delete();

        return redirect()->route('cm3.plates.index')->withStatus(__('Plate successfully deleted.'));
    }

    public function uploadFile($request) {
        $fileName = $request->file('avatar')->getClientOriginalName();
        $uploadFile = $request->file('avatar')->move(public_path('storage/avatars/' . $request->plate_color), $fileName);
        return asset('storage/avatars/' . $request->plate_color . '/' . $fileName);
    }

    public function getNewVersion($oldVersionUrl) {
        $pathArray = explode('/', $oldVersionUrl);
        $oldVersion = $pathArray[count($pathArray) - 2];
        $versionSplit = explode('-', $oldVersion);
        $versionPrefix = current($versionSplit);
        $oldVersionNumber = end($versionSplit);
        $oldVersionNumber = (int) $oldVersionNumber;
        $newVersionNumber =  $oldVersionNumber++;
        return $newVersion = $versionPrefix . '-' . $newVersionNumber;
    }
}
