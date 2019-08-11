<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Program;
use App\Models\Banner;
use App\Models\Quote;
use App\Models\Member;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Activity $activity, Program $program, Banner $banner, Quote $quote, Member $member)
    {
        $this->program = $program;
        $this->activity = $activity;
        $this->banner = $banner;
        $this->quote = $quote;
        $this->member = $member;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = $this->banner->latest()->take(5)->get();
        $activities = $this->activity->latest()->take(3)->get();
        $programs = $this->program->latest()->take(3)->get();
        $quote = $this->quote->latest()->first();
        return view('client.home', compact('banners', 'activities', 'programs', 'quote'));
    }

    /**
     * Show list of members
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showMembers(Request $request)
    {
        if(empty($request->type)) {
            return redirect()->back();
        }
        if(!empty($request->filter)) {
            $members = $this->member->where('name', 'like', "{$request->filter}%")
                                    ->where('type', str_replace('-', ' ', $request->type))
                                    ->get();
            return view('client.profile.member.detail', compact('members'));
        } else {
            $data = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
            return view('client.profile.member.index', compact('data'));
        }
    }
}
