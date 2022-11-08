<?php

namespace App\Http\Controllers;

use App\Models\application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application = application::all();
        return view('backend.application.index',compact('application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.application.create');
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

        if ($image = $request->file('picture')) {
            $destinationPath = 'images/';
            $applicationImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $applicationImage);
            $input['picture'] = $applicationImage;
        }


        $application = application::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'contact' => $input['contact'],
            'picture' => $input['picture'],
            'description' => $input['description'],
            'job_id' => $input['job_id'],
            // 'job_id' => 6,
            'user_id' => auth::user()->id,
            
        ]);

        return redirect()->route('landing.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(application $application)
    {
        return view('backend.application.show',compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $application = application::find($id);
        $application->delete();

        return redirect()->route('application.index');
    }
}
