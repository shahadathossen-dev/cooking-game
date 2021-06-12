<?php

namespace App\Http\Controllers\CM3;

use Illuminate\Http\Request;
use App\Models\CM3\Plate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\CM3\PlateComb;
use App\Http\Requests\CM3\PlateCombRequest;

class PlateCombController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PlateComb $plate_comb)
    {
        return view('cm3.plate-combs.index', ['plates' => $plate_comb->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plates = Plate::all(['plate_color as name'])->toArray();
        $plate_combs = PlateComb::all(['new_plate as name'])->toArray();
        $plates_list = $this->unique_multidimensional_array(array_merge($plates, $plate_combs), 'name');
        return view('cm3.plate-combs.create', ['plates_list' => $plates_list]);
    }

    public function unique_multidimensional_array($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlateCombRequest $request)
    {
        // if($request->avatar) {
        //     $version = '1';
        //     $fileUrl = $this->uploadFile($request);
        //     $request->merge(['photo_link' => $fileUrl, 'ver' => $version]);
        // }
        $newPlate = PlateComb::create($request->except(['avatar']));

        return redirect()->route('cm3.plate-combs.index')->withStatus(__('PlateComb created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CM1A\PlateComb  $plate_comb
     * @return \Illuminate\Http\Response
     */
    public function show(PlateComb $plate_comb)
    {
        return view('cm3.plate-combs.show', compact('plate_comb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CM1A\PlateComb  $plate_comb
     * @return \Illuminate\Http\Response
     */
    public function edit(PlateComb $plate_comb)
    {
        $plates = Plate::all(['plate_color as name'])->toArray();
        $plate_combs = PlateComb::all(['new_plate as name'])->toArray();
        $plates_list = array_merge($plates, $plate_combs);
        return view('cm3.plate-combs.edit', compact('plate_comb', 'plates_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CM1A\PlateComb  $plate_comb
     * @return \Illuminate\Http\Response
     */
    public function update(PlateCombRequest $request, PlateComb $plate_comb)
    {
        // if($request->avatar) {
        //     // $newVersion = $this->getNewVersion($plate_comb->ing_photo_link);

        //     $fileUrl = $this->uploadFile($request);
        //     $request->merge(['photo_link' => $fileUrl, 'ver' => $plate_comb->ver + 1]);
        // }
        $updated = $plate_comb->update($request->all());
        return redirect()->route('cm3.plate-combs.index')->withStatus(__('PlateComb successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CM1A\PlateComb  $plate_comb
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlateComb $plate_comb)
    {
        if(File::exists('storage/avatars/' . $plate_comb->new_item)) File::deleteDirectory('storage/avatars/' . $plate_comb->new_item);
        $plate_comb->delete();

        return redirect()->route('cm3.plate-combs.index')->withStatus(__('PlateComb successfully deleted.'));
    }

    public function uploadFile($request) {
        $fileName = $request->file('avatar')->getClientOriginalName();
        $uploadFile = $request->file('avatar')->move(public_path('storage/avatars/' . '/' . $request->new_item), $fileName);
        return asset('storage/avatars/' . $request->new_item . '/' . $fileName);
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
