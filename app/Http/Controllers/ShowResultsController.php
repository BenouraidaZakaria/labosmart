<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Result;
class ShowResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $results=Result::where('patient_id',$id)->get();
        $patient=Patient::find($id);
        $dates=Result::select('dateresult')->groupBy('dateresult')->get();

        return view('showresults.index',compact('results','patient','dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$date)
    {
        $results=Result::where('patient_id',$id)->where('dateresult',$date)->get();
        $patient=Patient::find($id);
        $dates=Result::where('dateresult',$date)->get();

        return view('showresults.show',compact('dates','results','patient','date','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    public function download($id){
        $result=Result::find($id);
        $pdf = Pdf::loadView('showresults.download',compact('result'));
        return $pdf->download('result.pdf');
    }
}
