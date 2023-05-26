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
        Mail::to($request->email)->send(new ApointmentMail());
        return redirect()->back();
    }
}
