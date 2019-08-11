<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = $this->activity->latest()->simplePaginate(10);
        return view('admin.program.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program.activity.create');
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
        $data['image'] = 'assets/' . $file->store('activities');
        $this->activity->create($data);
        return redirect()->route('admin.kegiatan.index');
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
        $activity = $this->activity->findOrFail($id);
        return view('admin.program.activity.edit', compact('activity'));
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
        $activity = $this->activity->findOrFail($id);
        if($request->hasFile('image')) {
            if(!unlink(public_path($activity->image))) {
                return redirect()->back();
            }
            $file = $request->file('image');
            $data['image'] = 'assets/' . $file->store('activities');
        }
        $activity->update($data);
        return redirect()->route('admin.kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = $this->activity->findOrFail($id);
        if(file_exists($activity->image)) {
            if(unlink(public_path($activity->image))) {
                $activity->delete();
                return redirect()->route('admin.kegiatan.index');
            }
            return redirect()->back();
        } else {
            $activity->delete();
            return redirect()->route('admin.kegiatan.index');
        }
    }
}
