<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\JobRequest;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Support\Str;
use Auth;

class JobController extends Controller
{
    public function index()
    {
        $items = Job::orderBy('date', 'desc')->get();
        return view('pages.admin.post.job.index', [
            'items' => $items
        ]);
    }


    public function create()
    {
        return view('pages.admin.post.job.create');
    }

    public function store(JobRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->company_name);
        $data['company_logo'] = $request->file('company_logo')->store(
            'assets/image/job',
            'public'
        );
        $data['users_id'] = Auth::id();
        Job::create($data);
        return redirect()->route('job.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $item = Job::findOrFail($id);
        return view('pages.admin.post.job.edit', [
            'item' => $item
        ]);
    }


    public function update(JobRequest $request, $id)
    {
        if ($request->has('company_logo')) {
            $data = $request->all();
            $data['slug'] = Str::slug($request->company_name);
            $data['company_logo'] = $request->file('company_logo')->store(
                'assets/image/job',
                'public'
            );
            $data['users_id'] = Auth::id();
        } else {
            $data = $request->all();
            $data['slug'] = Str::slug($request->company_name);
            $data['users_id'] = Auth::id();
        }

        $item = Job::findOrFail($id);
        $item->update($data);
        return redirect()->route('job.index');
    }

    public function destroy($id)
    {
        $item = Job::findOrFail($id);
        $item->delete();
        return redirect()->route('job.index');
    }
}
