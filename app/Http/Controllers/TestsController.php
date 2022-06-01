<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all();

        return view('tests.index',compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tests=Test::all();
        $test = new Test();
        $test->libele = $request->input('libele');
        $test->valmin = $request->input('valmin');
        $test->valmax = $request->input('valmax');
        $test->commentaire = $request->input('commentaire');
        $test->commentairesimin = $request->input('commentairesimin');
        $test->commentairesimax = $request->input('commentairesimax');

        $test->save();

        return view('tests.index',compact('tests'))->with('success','test has been added');
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
        return view('tests.edit' , [
            'test' => Test::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $test)
    {
        $tests=Test::all();
        
        $testedit = Test::findOrFail($test);

        $testedit->libele = $request->input('libele');
        $testedit->valmin = $request->input('valmin');
        $testedit->valmax = $request->input('valmax');
        $testedit->commentaire = $request->input('commentaire');
        $testedit->commentairesimin = $request->input('commentairesimin');
        $testedit->commentairesimax = $request->input('commentairesimax');

        $testedit->save();

        return view('tests.index',compact('tests'))->with('success','test has been added');
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
