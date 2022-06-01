<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctors.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = User::where('role','none')->get();

       return view('doctors.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::all();

        $doctor = new Doctor();
        $doctor->user_id = $request->input('user_id');
        $doctor->sexe = $request->input('sexe');
        $doctor->specialite = $request->input('specialite');
        $doctor->telephone = $request->input('telephone');
        $doctor->user->role = 'doctor';
        $doctor->user->save();
        $doctor->save();
        $doctors = Doctor::all();

        return view('doctors.index',compact('users','doctors'))->with('success','Doctor has been added');
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
        return view('doctors.edit' , [
            'doctor' => Doctor::findOrFail($id),
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$doctor)
    {
        $user = User::findOrFail($doctor);

        $doctoredit =Doctor::findOrFail($doctor);
        $doctoredit->user->name = $request->input('name');
        $doctoredit->sexe = $request->input('sexe');
        $doctoredit->specialite = $request->input('specialite');
        $doctoredit->telephone = $request->input('telephone');
        $doctoredit->save();
        $doctoredit->user->save();
        $doctors = Doctor::all();

        return view('doctors.index',compact('user','doctors'))->with('success','Doctor has been updated');
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
