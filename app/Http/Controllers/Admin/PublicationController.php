<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Support\Facades\Storage;
use Image;

class PublicationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Publication $publication)
    {
        $this->publication = $publication;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = $this->publication->latest()->simplePaginate(10);
        return view('admin.program.publication.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program.publication.create');
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
        $image = $request->file('image');
        $filename = date('YmdHis') . str_random(20) . '.' . $image->extension();
        $file = Image::make($image->getRealPath());
        $data['image'] = $image->storeAs('public/publications', $filename);
        return redirect()->route('admin.penerbitan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication = $this->publication->findOrFail($id);
        return view('admin.program.publication.edit', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $publication = $this->publication->findOrFail($id);
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = date('YmdHis') . str_random(20) . '.' . $image->extension();
            $path = 'public/publications/' . $filename;
            $file = Image::make($image->getRealPath());
            Storage::delete(str_replace('storage', 'public', $publication->image));
            $data['image'] = $image->storeAs('public/publications', $filename);
        }
        $publication->update($data);
        return redirect()->route('admin.penerbitan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publication = $this->publication->findOrFail($id);
        Storage::delete(str_replace('storage', 'public', $publication->image));
        $publication->delete();
        return redirect()->route('admin.penerbitan.index');
    }
}
