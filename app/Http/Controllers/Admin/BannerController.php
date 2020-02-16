<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = $this->banner->latest()->get();
        return view('admin.profile.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $data = $request->all();
            $image = $request->file('image');
            $filename = date('YmdHis') . str_random(20) . '.' . $image->extension();
            $file = Image::make($image->getRealPath());
            $data['path'] = $image->storeAs('public/banners', $filename);
        }
        $this->banner->create($data);
        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.profile.banner.edit')->with(['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $data = $request->all();
        if($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $image = $request->file('image');
            $filename = date('YmdHis') . str_random(20) . '.' . $image->extension();
            $file = Image::make($image->getRealPath());
            Storage::delete(str_replace('storage', 'public', $banner->path));
            $data['path'] = $image->storeAs('public/banners', $filename);
        }
        $banner->update($data);
        return redirect()->route('admin.banner.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        Storage::delete(str_replace('storage', 'public', $banner->path));
        $banner->delete();
        return redirect()->route('admin.banner.index');
    }
}
