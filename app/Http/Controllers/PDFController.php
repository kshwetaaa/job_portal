<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\application;
use PDF;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function generatePDF($id)
    {
        $application = application::find($id);
  
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            // 'users' => $users
            'application' =>$application
        ]; 
            
        $pdf = PDF::loadView('myPDF', $data);
     
        return $pdf->download('application.pdf');
    }
}