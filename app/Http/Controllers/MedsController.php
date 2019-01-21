<?php

namespace App\Http\Controllers;

use App\Med;
use Illuminate\Http\Request;

class MedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meds =Med::all();
        return view('meds.index',compact('meds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes=  request()->validate([
            'name' => ['required','min:2','max:200'],
            'type' => ['required'],
            'dateTimeRNVerified' => [],
            'timeYesterday' => [],
            'timeToday' => [],
            'timeTomorrow' => [],
            'description' => [],
            'barcode' => ['required','numeric','min:2']
        ]);
        //dd($attributes);
        Med::create($attributes);
        return redirect('/meds')->with(['message' => 'Medication created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meds  $meds
     * @return \Illuminate\Http\Response
     */
    public function show(Med $med)
    {
        return view('meds.show',compact('med'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Med  $med
     * @return \Illuminate\Http\Response
     */
    public function edit(Med $med)
    {
        return view('meds.edit',compact('med'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Med  $med
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $med = Med::findOrFail($id);
        //dd($request->all());

        $this->validate($request,[
            'name' => ['required','min:2','max:200'],
            'type' => ['required'],
            'dateTimeRNVerified' => [],
            'timeYesterday' => [],
            'timeToday' => [],
            'timeTomorrow' => [],
            'description' => [],
            'barcode' => ['required','numeric','min:2']
        ]);
        $input= $request->all();
        $med->fill($input)->save();
        return redirect('/meds')->with(['message' => 'Medication updated successfully']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Med  $med
     * @return \Illuminate\Http\Response
     */
    public function destroy(Med $med)
    {
        $med->delete();
        return redirect('/meds')->with(['message' => 'Medication deleted successfully']);
    }

}
