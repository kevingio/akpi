<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Committee;
use App\Models\Period;
use App\Models\Member;
use App\Models\Position;

class CommitteeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Committee $committee, Period $period, Member $member, Position $position)
    {
        $this->committee = $committee;
        $this->period = $period;
        $this->member = $member;
        $this->position = $position;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periods = $this->period->latest()->get();
        $committees = $this->committee->with(['position', 'member'])
                                    ->where('period_id', $periods[sizeof($periods) - 1]->id)
                                    ->get()
                                    ->sortBy('position.weight');
        return view('admin.profile.committee.index', compact('committees', 'periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periods = $this->period->latest()->get();
        $availableMembers = $this->member->whereHas('committee', function ($query) use ($periods) {
                                            $query->where('period_id', $periods[sizeof($periods) - 1]);
                                        })
                                        ->orWhere(function ($query) {
                                            $query->doesntHave('committee');
                                        })
                                        ->orderBy('name')->get();
        $availablePositions = $this->position->doesntHave('committee')->orderBy('weight')->get();
        return view('admin.profile.committee.create', compact('availableMembers', 'availablePositions', 'periods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $this->committee->updateOrCreate($data);
        return redirect()->route('admin.pengurus.index');
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
        abort(404);
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
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $committee = $this->committee->findOrFail($id)->delete();
        return redirect()->route('admin.pengurus.index');
    }
}
