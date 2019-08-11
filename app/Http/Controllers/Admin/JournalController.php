<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Journal;

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
        $data = $request->all();
        $file = $request->file('image');
        $filePdf = $request->file('pdf');
        $data['thumbnail'] = 'assets/' . $file->store('journals/thumbnails');
        $data['path'] = 'assets/' . $filePdf->store('journals');
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
            if(!unlink(public_path($journal->thumbnail))) {
                return redirect()->back();
            }
            $file = $request->file('image');
            $data['thumbnail'] = 'assets/' . $file->store('journals/thumbnails');

        }
        if($request->hasFile('pdf')) {
            if(!unlink(public_path($journal->path))) {
                return redirect()->back();
            }
            $filePdf = $request->file('pdf');
            $data['path'] = 'assets/' . $file->store('journals');
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
        if(file_exists($journal->thumbnail) || file_exists($journal->path) ) {
            if(unlink(public_path($journal->thumbnail)) && unlink(public_path($journal->path))) {
                $journal->delete();
                return redirect()->route('admin.journal.index');
            }
            return redirect()->back();
        } else {
            $journal->delete();
            return redirect()->route('admin.journal.index');
        }
    }
}
