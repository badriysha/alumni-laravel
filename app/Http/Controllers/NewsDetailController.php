<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsDetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = News::where('slug', $slug)->first();
        return view('pages.news-detail', [
            'item' => $item
        ]);
    }
}
