<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::orderBy('post_date', 'desc')->paginate(10);
        return view('pages.news', [
            'news' => $news
        ]);
    }
}
