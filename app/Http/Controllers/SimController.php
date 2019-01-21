<?php

namespace App\Http\Controllers;

use App\Med;
use App\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


use Illuminate\Http\Request;

class SimController extends Controller
{
    public function index()
    {
        return view('sim.index');
    }

    public function searchPatients(Request $request)

    {

        if ($request->ajax()) {

            $output = "";

            $patients = DB::table('patients')->where('name', 'LIKE', '%' . $request->search . "%")
                ->orWhere('barcode', 'like', '%' . $request->search . '%')
                ->get();

            if ($patients) {

                foreach ($patients as $key => $patient) {

                    $output .= '<tr>' .

                        '<td>' . $patient->name . '</td>' .

                        '<td>' . $patient->level . '</td>' .

                        '<td>' . $patient->dob . '</td>' .

                        '<td><a href="/sim/patient/' . $patient->id . '">Open Patient</a>' . '</td>';

                    '</tr>';
                }
                return Response($output);
            }
        }

    }

    public function showPatient(Patient $patient)
    {
        $meds = $patient->med;
        $scheduledMeds = $meds->where('type','=','Scheduled Medication');
        $prnMeds = $meds->where('type','=','PRN Medication');
        return view('sim.patient', compact('patient', 'scheduledMeds','prnMeds'));

    }

    public function medCheck(Patient $patient, Request $request)
    {
        $attributes = request()->validate([
            'barcode' => ['required', 'numeric', 'min:2']
        ]);
        $barcode = $attributes;
        try {
            $med = Med::where('barcode', $barcode)->firstorfail();
        }  catch (ModelNotFoundException $ex) {
            return redirect()->back()->with('warning', 'Invalid Barcode for Medication. The barcode is not assigned to any medication in the system.'
            );
        }
        //Check in med_patient relation table
        $exists = $med->patient->contains($patient->id);
        if ($exists == true) {
            return redirect()->back()->with('success', $med->name . ' was given to ' . $patient->name);
        } else {
            return redirect()->back()->with('warning', $med->name . ' was not found in ' . $patient->name .
                '`s records. Please check again.'
            );
        }
    }
}
