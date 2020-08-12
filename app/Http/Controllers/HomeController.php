<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Job;
use App\Event;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::orderBy('post_date', 'desc')->take(3)->get();
        $jobs = Job::orderBy('date', 'desc')->take(5)->get();
        $events = Event::orderBy('date', 'desc')->take(5)->get();
        return view('pages.home', [
            'news' => $news,
            'jobs' => $jobs,
            'events' => $events
        ]);
    }
}
