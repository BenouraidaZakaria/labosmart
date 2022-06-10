<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Result;
use App\Models\Test;
class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests=Test::all();
        $results=Result::paginate(7);
        $patients=Patient::all();
        return view('results.index',compact('results','tests','patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tests=Test::all();
        $patients=Patient::all();
        return view('results.create',compact('tests','patients'));
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
            'patient_id' => 'required',
            'test_id' => 'required',
            'valeur' => 'required',
            'dateresult' => 'required|date|before:tomorrow',
        ],
        [
            'dateresult.before' => 'La date de résultat doit être superieur à aujourd\'hui',
        ]);
        $patients = Patient::all();
        $tests= Test::all();
        $results = Result::paginate(5);

        $result = new Result();
        $result->test_id = $request->input('test_id');
        $result->patient_id = $request->input('patient_id');
        $result->valeur = $request->input('valeur');
        $result->dateresult = $request->input('dateresult');
        $result->save();

        return redirect()->route('results.index',compact('patients','results','tests'))->with('success','le résultat a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $patients=Patient::all();
    $tests=Test::all();
        return view('results.edit' , [
            'result' => Result::findOrFail($id),
        ],compact('patients','tests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $result)
    {
        $request->validate([
            'patient_id' => 'required',
            'test_id' => 'required',
            'valeur' => 'required',
            'dateresult' => 'required|date|before:tomorrow',
        ],
        [
            'dateresult.before' => 'La date de résultat doit être inferieure ou egale à aujourd\'hui',
        ]);
        $patients = Patient::all();
        $tests= Test::all();
        $results = Result::paginate(7);

        $resultedit = Result::findOrFail($result);
        $resultedit->test_id = $request->input('test_id');
        $resultedit->patient_id = $request->input('patient_id');
        $resultedit->valeur = $request->input('valeur');
        $resultedit->dateresult = $request->input('dateresult');
        $resultedit->patient->save();
        $resultedit->test->save();
        $resultedit->save();

        return redirect()->route('results.index',compact('patients','results','tests'))->with('success','le résultat a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result=Result::findOrFail($id);

        $result->delete();

        $results = Result::all();

        return redirect()->route('results.index',compact('results'))->with('success','le result a été supprimé');
    }
}
