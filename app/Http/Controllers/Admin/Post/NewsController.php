<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\NewsRequest;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = News::orderBy('post_date', 'desc')->paginate(10);
        return view('pages.admin.post.news.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.post.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->file('image')->store(
            'assets/image/news',
            'public'
        );
        News::create($data);
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = News::findOrFail($id);
        return view('pages.admin.post.news.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->file('image')->store(
            'assets/image/news',
            'public'
        );
        $item = News::findOrFail($id);
        $item->update($data);
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = News::findOrFail($id);
        $item->delete();

        return redirect()->route('news.index');
    }
}
