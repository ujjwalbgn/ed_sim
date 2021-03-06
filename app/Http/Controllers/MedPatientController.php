<?php

namespace App\Http\Controllers;

use App\Med;
use App\Patient;
use Illuminate\Http\Request;

class MedPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Patient $patient, Med $meds)
    {
        $meds = Med::all();
        return view('patients.editPatientMeds',compact('patient','meds'));
    }


    public function update(Request $request,Patient $patient,Med $med)
    {
        //dd($med->id, $patient->id);
        $patient->med()->attach($med->id);
        return redirect('/patients/'.$patient->id )->with(['message' => 'Medication has been added to Patient`s record successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Patient $patient,Med $med)
    {
        $patient->med()->detach($med->id);
        return redirect('/patients/'.$patient->id )->with(['message' => 'Medication has been removed from Patient`s record successfully']);

    }
}
