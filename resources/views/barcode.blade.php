@extends('layout.adminLayout')

@section('content')
    <style type="text/css">
        img{
            padding-left: 20px;
        }
    </style>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-primary" style="text-align: center;">Barcode</h1>
        </div>
    </div>


    <div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">
        @foreach($patients as $patient)
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($patient->barcode, "C128",1,35)}}"/>
            <br>
            {{$patient->name}}
            <br><br>
            @endforeach
           </div>
    <hr>
    <style type="text/css">
        img{
            padding-left: 20px;
        }
    </style>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-primary" style="text-align: center;">Medication Barcode</h1>
        </div>
    </div>


    <div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">
        @foreach($meds as $med)
            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($med->barcode, "C128",1,35)}}"/>

            <br>
            {{$med->name}}
            <br><br>
        @endforeach
    </div>


@endsection
