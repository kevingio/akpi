<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publication;

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
        $file = $request->file('image');
        $data['image'] = 'assets/' . $file->store('publications');
        $this->publication->create($data);
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
            if(!unlink(public_path($publication->image))) {
                return redirect()->back();
            }
            $file = $request->file('image');
            $data['image'] = 'assets/' . $file->store('publications');
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
        if(file_exists($publication->image)) {
            if(unlink(public_path($publication->image))) {
                $publication->delete();
                return redirect()->route('admin.penerbitan.index');
            }
            return redirect()->back();
        } else {
            $publication->delete();
            return redirect()->route('admin.penerbitan.index');
        }
    }
}
