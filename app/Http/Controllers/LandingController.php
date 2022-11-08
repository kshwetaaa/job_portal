<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;
use App\Models\application;

class LandingController extends Controller
{
    public function index(){

        $jobs = job::orderBy('created_at','desc')->get();
        return view('frontend.landing',compact('jobs'));

    }

    public function create($id){
       
        $jobs = job::findOrFail($id);
        return view('frontend.application',compact('jobs'));

    }
}
