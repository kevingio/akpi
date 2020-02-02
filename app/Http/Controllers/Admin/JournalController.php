<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Support\Facades\Storage;
use Image;

class JournalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Journal $journal)
    {
        $this->journal = $journal;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals = $this->journal->latest()->simplePaginate(10);
        return view('admin.program.journal.index', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program.journal.create');
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
            'pdf' => 'required|mimes:pdf',
        ]);
        $data = $request->all();
        $image = $request->file('image');
        $filename = date('YmdHis') . str_random(20) . '.' . $image->extension();
        $file = Image::make($image->getRealPath());
        $data['thumbnail'] = $image->storeAs('public/journals/thumbnail', $filename);
        
        $filePdf = $request->file('pdf');
        $filename = date('YmdHis') . str_random(20) . '.' . $filePdf->extension();
        $data['path'] = $filePdf->storeAs('public/journals', $filename);
        
        $this->journal->create($data);
        return redirect()->route('admin.journal.index');
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
        $journal = $this->journal->findOrFail($id);
        return view('admin.program.journal.edit', compact('journal'));
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
        $journal = $this->journal->findOrFail($id);
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = date('YmdHis') . str_random(20) . '.' . $image->extension();
            $file = Image::make($image->getRealPath());
            Storage::delete(str_replace('storage', 'public', $journal->thumbnail));
            $data['thumbnail'] = $image->storeAs('public/journals/thumbnails', $filename);
        }
        if($request->hasFile('pdf')) {
            $filePdf = $request->file('pdf');
            $filename = date('YmdHis') . str_random(20) . '.' . $filePdf->extension();
            Storage::delete(str_replace('storage', 'public', $journal->path));
            $data['path'] = $filePdf->storeAs('public/journals', $filename);
        }
        $journal->update($data);
        return redirect()->route('admin.journal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journal = $this->journal->findOrFail($id);
        Storage::delete(str_replace('storage', 'public', $journal->path));
        Storage::delete(str_replace('storage', 'public', $journal->thumbnail));
        $journal->delete();
        return redirect()->route('admin.journal.index');
    }
}
