<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Result;
use App\Models\Patient;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $user=Auth::user();
        $results =Result::where('patient_id',auth()->user()->id)->get();
        $dates=Result::select('dateresult')->groupBy('dateresult')->get();

    if(Auth::user()->role == 'doctor'){

        $patients =Patient::where('doctor_id',auth()->user()->doctor->id)->get();
        return view('/home',compact('patients'));

    }


        return view('/home',compact('users','results','dates','user'));
    }
}
