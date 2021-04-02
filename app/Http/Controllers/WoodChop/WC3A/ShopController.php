<?php

namespace App\Http\Controllers\WoodChop\WC3A;

use Illuminate\Http\Request;
use App\Models\WoodChop\WC3A\Shop;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\WoodChop\WC3A\ShopRequest;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Shop $shop)
    {
        return view('woodchop.wc3a.shops.index', ['shops' => $shop->all()]);
    }

    public function list(Shop $shop)
    {
        return $shop->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('woodchop.wc3a.shops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShopRequest $request)
    {
        if($request->avatar) {
            $version = '1';
            $fileUrl = $this->uploadFile($request);
            $request->merge(['img_link' => $fileUrl, 'ver' => $version]);
        }
        $newIngredient = Shop::create($request->except(['avatar']));

        return redirect()->route('woodchop.wc3a.shops.index')->withStatus(__('Shop created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WC3A\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return view('woodchop.wc3a.shops.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WC3A\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('woodchop.wc3a.shops.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WC3A\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(ShopRequest $request, Shop $shop)
    {
        if($request->avatar) {
            // $newVersion = $this->getNewVersion($shop->img_link);

            $fileUrl = $this->uploadFile($request);
            $request->merge(['img_link' => $fileUrl, 'ver' => $shop->ver + 1]);
        }
        $newIngredient = $shop->update($request->except(['avatar']));
        return redirect()->route('woodchop.wc3a.shops.index')->withStatus(__('Shop successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WC3A\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        if(File::exists('storage/avatars/' . $shop->shop_name)) File::deleteDirectory('storage/avatars/' . $shop->shop_name);
        $shop->delete();

        return redirect()->route('woodchop.wc3a.shops.index')->withStatus(__('Shop successfully deleted.'));
    }

    public function uploadFile($request) {
        $fileName = $request->file('avatar')->getClientOriginalName();
        $uploadFile = $request->file('avatar')->move(public_path('storage/avatars/' . '/' . $request->shop_name), $fileName);
        return asset('storage/avatars/' . $request->shop_name . '/' . $fileName);
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
