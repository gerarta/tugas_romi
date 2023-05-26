<?php

namespace App\Http\Controllers;

use App\Mail\ApointmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApointmentController extends Controller
{
    public function index (){
        return view('apointments.form');
    }

    public function store(Request $request){
        $pasien = [ 
            'name' => $request->name,
            'date' => $request->date,
            'department' => $request->department
        ];
        
        Mail::to($request->email)->send(new ApointmentMail($pasien));
        return redirect()->back();
    }
}
