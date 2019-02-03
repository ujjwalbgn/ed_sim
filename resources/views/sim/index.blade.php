@extends('layout.adminLayout')
@section('pageTitle', 'MAR Simulator')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<meta name="_token" content="{{ csrf_token() }}">

<!-- ************************************************************************ -->
    @include('layout.simMenu')
    @include('layout.sessionMessage')
    <br>   
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-search"></i>&nbsp </span>
                            </div>
                            <input type="text" class="form-control" id="search" name="Scan" placeholder="Scan barcod or enter patient's name here" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
            </div>   
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <table class="table table-hover table-light">
                            <thead class="table-active">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ************************************************************************ -->
    <!-- <div class="card-content">
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
    <div class="content">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

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
    </div> -->

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
