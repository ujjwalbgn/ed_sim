<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signature;
use App\Patient;

class PatientSignatureController extends Controller
{
    public function index(Patient $patient, signature $signatures)
    {
        $signatures = signature::all();
        return view('patients.editPatientSignature',compact('patient','signatures'));
    }

    public function update(Request $request,Patient $patient,signature $signature)
    {
        $patient->signature()->attach($signature->id);
        return redirect('/patients/'.$patient->id )->with(['message' => 'Signature has been added to Patient`s record successfully']);

    }
    public function destroy(Request $request,Patient $patient,signature $signature)
    {
        $patient->signature()->detach($signature->id);
        return redirect('/patients/'.$patient->id )->with(['message' => 'Signature has been removed from Patient`s record successfully']);

    }
    
}
