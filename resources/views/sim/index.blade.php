@extends('layout.adminLayout')
@section('pageTitle', 'MAR Simulator')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<meta name="_token" content="{{ csrf_token() }}">

<link rel="stylesheet" href={{asset("//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css")}}>

<section class="hero is-info">
    @include('layout.simMenu')
    @include('layout.sessionMessage')
    <div class="card-content">
                    <div class="content">
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-large" type="text" id="search" name="search"
                                   placeholder="Scan barcod or enter patient's name"/>
                            <span class="icon is-medium is-left">
                            <i class="fa fa-search"></i>
                        </span>
                            <span class="icon is-medium is-right">
                            <i class="fa fa-user"></i>
                        </span>
                        </div>
                    </div>
    </div>
</section>

<table class="table table-bordered table-hover">

    <thead>

    <tr>
        <th>Name</th>

        <th>Level</th>

        <th>DOB</th>

        <th>Select</th>

    </tr>

    </thead>

    <tbody>

    </tbody>

</table>


<script type="text/javascript">

    $('#search').on('keyup', function () {

        $value = $(this).val();

        $.ajax({

            type: 'get',

            url: '{{URL::to('/sim/searchPatients')}}',

            data: {'search': $value},

            success: function (data) {

                $('tbody').html(data);

            }

        });


    })

</script>

<script type="text/javascript">

    $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});

</script>
