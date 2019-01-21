<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = (Patient::all());
        return view('patients.index',compact('patients') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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
            'level' => ['required'],
            'diagnosis' => [],
            'provider' => [],
            'age' => [],
            'dob' => [],
            'gender' => [],
            'height' => [],
            'weight' => [],
            'sensitivity' => [],
            'allergies' => [],
            'description' => [],
            'barcode' => ['required','numeric','min:2']
        ]);
        //dd($attributes);
        Patient::create($attributes);
        return redirect('/patients')->with(['message' => 'Patient created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $Patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $meds = $patient->med;
        return view('patients.show', compact('patient','meds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $Patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $Patient
     * @return \Illuminate\Http\Response
     */

    public function update($id ,Request $request)
    {
        $patient = Patient::findOrFail($id);
        //dd($request->all());

        $this->validate($request,[
            'name' => ['required','min:2','max:200'],
            'level' => ['required'],
            'diagnosis' => [],
            'provider' => [],
            'age' => [],
            'dob' => [],
            'gender' => [],
            'height' => [],
            'weight' => [],
            'sensitivity' => [],
            'allergies' => [],
            'description' => [],
            'barcode' => ['required','numeric','min:2']
        ]);
        $input= $request->all();
        $patient->fill($input)->save();
        return redirect('/patients')->with(['message' => 'Patient updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect('/patients')->with(['message' => 'Patient deleted successfully']);
    }
}
