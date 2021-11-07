<?php

namespace App\Http\Controllers\WoodChop\WC3A;

use Illuminate\Http\Request;
use App\Models\WoodChop\WC3A\Config;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigRequest;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Config $config)
    {
        return view('woodchop.wc3a.configs.index', ['configs' => $config->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('woodchop.wc3a.configs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ConfigRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfigRequest $request)
    {
        $jsonContent = json_decode(file_get_contents($request->file('file')), true);
        $file = Config::updateOrCreate(['version' => $request->version], [
            'file' => $jsonContent,
            'version' => $request->version
        ]);

        return redirect()->route('woodchop.wc3a.configs.index')->withStatus(__('Danger Meter created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show($version)
    {
        return view('woodchop.wc3a.configs.show', compact('config'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WoodChop\WC3A\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        return view('woodchop.wc3a.configs.edit', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ConfigRequest  $request
     * @param  \App\Models\WoodChop\WC3A\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(ConfigRequest $request, Config $config)
    {
        $updated = $config->update($request->all());
        return redirect()->route('woodchop.wc3a.configs.index')->withStatus(__('Danger Meter successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WoodChop\WC3A\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        $config->delete();

        return redirect()->route('woodchop.wc3a.configs.index')->withStatus(__('Danger Meter successfully deleted.'));
    }
}
