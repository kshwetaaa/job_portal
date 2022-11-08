<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\category;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = job::all();
        return view('backend.job.index',compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = category::all();
        return view('backend.job.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $jobImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $jobImage);
            $input['image'] = $jobImage;
        }


        $job = job::create([
            'name' => $input['name'],
            'image' => $input['image'],
            'company' => $input['company'],
            'vacancy' => $input['vacancy'],
            'qualification' => $input['qualification'],
            'description' => $input['description'],
            'category_id' => $input['category_id'],
        ]);

        return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        return view('backend.application.create',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(job $job)
    {
        $category = category::all();
        return view('backend.job.edit',compact('category','job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job $job)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $jobImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $jobImage);
            $input['image'] = $jobImage;
        }

        $job->update([
            'name' => $input['name'],
            'image' => $input['image'],
            'company' => $input['company'],
            'vacancy' => $input['vacancy'],
            'qualification' => $input['qualification'],
            'description' => $input['description'],
            'category_id' => $input['category_id'],
        ]);

        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = job::findOrFail($id);

        $job->delete();
        return redirect()->route('job.index');
    }
}
