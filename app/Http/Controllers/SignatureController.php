<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Signature;
use Illuminate\Http\Request;


class SignatureController extends Controller
{

    public function index()
    {
        $signatures = Signature::all();
        return view('signature.index', compact('signatures'));
    }

    public function show(Signature $signature)
    {
        return view('signature.show',compact('signature'));
    }

    public function create()
    {
        return view('signature.create');
    }

    public function store(Request $request)
    {
        $attributes=  request()->validate([
            'initials' => ['required'],
            'printName' => ['required'],
            'signature' => ['required'],

        ]);
        Signature::create($attributes);
        return redirect('/signature')->with(['message' => 'Signature created successfully']);
    }

    public function edit(Signature $signature)
    {
        return view('signature.edit',compact('signature'));
    }

    public function update($id ,Request $request)
    {
        $signature = Signature::findorfail($id);

        $this->validate($request,[
            'initials' => ['required'],
            'printName' => ['required'],
            'signature' => ['required'],
        ]);

        $signature->fill($request->all())->save();
        return redirect('/signature')->with(['message' => 'Signature updated successfully']);
    }

    public function destroy(Signature $signature)
    {
        $signature->delete();
        return redirect('/signature')->with(['message' => 'Signature deleted successfully']);
    }

}
