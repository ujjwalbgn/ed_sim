<?php

namespace App\Http\Controllers;

use App\Med;
use App\Patient;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function index(Patient $patients, Med $meds){
        $patients = Patient::all();
        $meds = Med::all();
        return view('barcode', compact('patients', 'meds'));
    }
}
