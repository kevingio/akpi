<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Program;
use App\Models\Banner;
use App\Models\Quote;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Activity $activity, Program $program, Banner $banner, Quote $quote)
    {
        $this->program = $program;
        $this->activity = $activity;
        $this->banner = $banner;
        $this->quote = $quote;
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
}
