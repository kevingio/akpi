<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = $this->member->orderBy('member_no')->paginate(10);
        return view('admin.profile.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.member.create');
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
        $data['avatar'] = $image->storeAs('public/members', $filename);
        $this->member->create($data);
        return redirect()->route('admin.anggota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = $this->member->findOrFail($id);
        return view('admin.profile.member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $member = $this->member->findOrFail($id);
        if($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $image = $request->file('image');
            $filename = date('YmdHis') . str_random(20) . '.' . $image->extension();
            $file = Image::make($image->getRealPath());
            Storage::delete(str_replace('storage', 'public', $member->avatar));
            $data['avatar'] = $image->storeAs('public/members', $filename);
        }
        $member->update($data);
        return redirect()->route('admin.anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = $this->member->findOrFail($id);
        Storage::delete(str_replace('storage', 'public', $member->avatar));
        $member->delete();
        return redirect()->route('admin.anggota.index');
    }
}
