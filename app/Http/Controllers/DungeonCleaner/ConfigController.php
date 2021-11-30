<?php

namespace App\Http\Controllers\DungeonCleaner;

use Illuminate\Http\Request;
use App\Models\DungeonCleaner\Config;
use App\Http\Controllers\Controller;
use App\Http\Requests\DungeonCleaner\ConfigRequest;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dungeon-cleaner.configs.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getConfig()
    {
        return $config = Config::firstOrFail()->data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dungeon-cleaner.configs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ConfigRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfigRequest $request)
    {
        // $jsonContent = json_decode(file_get_contents($request->file('data')), true);
        // $file = Config::updateOrCreate(['version' => $request->version], [
        //     'data' => $jsonContent,
        //     'version' => $request->version
        // ]);

        $config = Config::updateOrCreate(['id' => 1], [
            'data' => json_decode($request->data)
        ]);

        return ['message' => 'Config updated successfully', 'data' => $config->data];

        // return back()->withStatus(__('Danger Meter created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DungeonCleaner\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show($version)
    {
        return view('dungeon-cleaner.configs.show', compact('config'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DungeonCleaner\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        return view('dungeon-cleaner.configs.edit', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ConfigRequest  $request
     * @param  \App\Models\DungeonCleaner\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(ConfigRequest $request, Config $config)
    {
        $updated = $config->update($request->all());
        return redirect()->route('dungeon-cleaner.configs.index')->withStatus(__('Danger Meter successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DungeonCleaner\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        $config->delete();

        return redirect()->route('dungeon-cleaner.configs.index')->withStatus(__('Danger Meter successfully deleted.'));
    }
}
