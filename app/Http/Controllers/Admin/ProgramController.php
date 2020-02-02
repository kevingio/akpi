<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;
use Image;

class ProgramController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Program $program)
    {
        $this->program = $program;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = $this->program->latest()->simplePaginate(10);
        return view('admin.program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data = $request->all();
        $image = $request->file('image');
        $filename = date('YmdHis') . str_random(20) . '.' . $image->extension();
        $file = Image::make($image->getRealPath());
        $data['image'] = $image->storeAs('public/programs', $filename);
        $this->program->create($data);
        return redirect()->route('admin.program.index');
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
        $program = $this->program->findOrFail($id);
        return view('admin.program.edit', compact('program'));
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
        $program = $this->program->findOrFail($id);
        if($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $data = $request->all();
            $image = $request->file('image');
            $filename = date('YmdHis') . str_random(20) . '.' . $image->extension();
            $file = Image::make($image->getRealPath());
            Storage::delete(str_replace('storage', 'public', $program->image));
            $data['image'] = $image->storeAs('public/programs', $filename);
        }
        $program->update($data);
        return redirect()->route('admin.program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = $this->program->findOrFail($id);
        Storage::delete(str_replace('storage', 'public', $program->image));
        $program->delete();
        return redirect()->route('admin.program.index');
    }
}
