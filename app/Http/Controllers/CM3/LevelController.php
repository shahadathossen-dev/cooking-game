<?php

namespace App\Http\Controllers\CM3;

use Illuminate\Http\Request;
use App\Models\CM3\Level;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CM3\LevelRequest;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Level $level)
    {
        return view('cm3.levels.index', ['levels' => $level->all()]);
    }

    public function list(Level $level)
    {
        return $level->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cm3.levels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelRequest $request)
    {
        if($request->avatar) {
            $version = '1';
            $fileUrl = $this->uploadFile($request);
            $request->merge(['ing_photo_link' => $fileUrl, 'ver' => $version]);
        }
        $newLevel = Level::create($request->except(['avatar']));

        return redirect()->route('cm3.levels.index')->withStatus(__('Level created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CM3\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        return view('cm3.levels.show', compact('level'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CM3\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        return view('cm3.levels.edit', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CM3\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(LevelRequest $request, Level $level)
    {
        if($request->avatar) {
            // $newVersion = $this->getNewVersion($level->ing_photo_link);

            $fileUrl = $this->uploadFile($request);
            $request->merge(['ing_photo_link' => $fileUrl, 'ver' => $level->ver + 1]);
        }
        $newLevel = $level->update($request->except(['avatar']));
        return redirect()->route('cm3.levels.index')->withStatus(__('Level successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CM3\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        if(File::exists('storage/avatars/' . $level->ing)) File::deleteDirectory('storage/avatars/' . $level->ing);
        $level->delete();

        return redirect()->route('cm3.levels.index')->withStatus(__('Level successfully deleted.'));
    }

    public function uploadFile($request) {
        $fileName = $request->file('avatar')->getClientOriginalName();
        $uploadFile = $request->file('avatar')->move(public_path('storage/avatars/' . '/' . $request->ing), $fileName);
        return asset('storage/avatars/' . $request->ing . '/' . $fileName);
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
