<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();

        return view('patients.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = User::where('role','none')->get();
        $doctors = User::where('role','doctor')->get();

        return view('patients.create',compact('doctors','patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            'doctor_id' => 'required',
            'sexe' => 'required|max:8',
            'cin' => 'required|unique:patients|max:8',
        ]);
        $users = User::all();

        $patient = new Patient();
        $patient->user_id = $request->input('user_id');
        $patient->doctor_id = $request->input('doctor_id');
        $patient->sexe = $request->input('sexe');
        $patient->cin = $request->input('cin');
        $patient->user->role = 'patient';
        $patient->user->save();
        $patient->save();
        $patients = Patient::all();

        return redirect()->route('patients.index',compact('users','patients'))->with('success','le patient a été ajouté');
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
        $doctors=Doctor::all();
        return view('patients.edit' , [
            'patient' => patient::findOrFail($id),
        ],compact('doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$patient)
    {
        $request->validate([
            // 'name' => 'required',
            'doctor_id' => 'required',
            'sexe' => 'required|max:8',
            'cin' => 'required|unique:patients|max:8',
        ]);

        $user = User::findOrFail($patient);

        $patientedit =Patient::findOrFail($patient);
        $patientedit->user->name = $request->input('name');
        $patientedit->sexe = $request->input('sexe');
        $patientedit->doctor_id = $request->input('doctor_id');
        $patientedit->cin = $request->input('cin');
        $patientedit->save();
        $patientedit->user->save();

        $patients = Patient::all();

        return redirect()->route('patients.index',compact('user','patients'))->with('success','le patient a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
