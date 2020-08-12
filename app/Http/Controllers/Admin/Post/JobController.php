<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\JobRequest;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Support\Str;
use Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Job::orderBy('date', 'desc')->get();
        return view('pages.admin.post.job.index', [
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
        return view('pages.admin.post.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->company_name);
        $data['company_logo'] = $request->file('company_logo')->store(
            'assets/image/job',
            'public'
        );
        $data['users_id'] = Auth::id();;
        Job::create($data);
        return redirect()->route('job.index');
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
        $item = Job::findOrFail($id);
        return view('pages.admin.post.job.edit', [
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
    public function update(JobRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->company_name);
        $data['company_logo'] = $request->file('company_logo')->store(
            'assets/image/job',
            'public'
        );
        $data['users_id'] = Auth::id();
        $item = Job::findOrFail($id);
        $item->update($data);
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Job::findOrFail($id);
        $item->delete();

        return redirect()->route('job.index');
    }
}
