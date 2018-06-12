@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <div class="row justify-content-center px-5 m-0 home">

        <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3 p-4">
            <div class="card">
                <div class="card-header text-center">MACHINE 1</div>
                <div class="card-body p-2 on">
                    <h5 class="text-center m-0">Counter : <b><span id="m1">0</span></b></h5>
                </div>
                <div class="card-footer text-center">
                    <button class="btn">View Details</button>
                </div>
            </div>
        </div>

        <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3 p-4">
            <div class="card">
                <div class="card-header text-center">MACHINE 2</div>
                <div class="card-body p-2 on">
                    <h5 class="text-center m-0">Counter : <span id="m2">0</span></h5>
                </div>
                <div class="card-footer text-center">
                    <button class="btn">View Details</button>
                </div>
            </div>
        </div>

        <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3 p-4">
            <div class="card">
                <div class="card-header text-center">MACHINE 3</div>
                <div class="card-body p-2 off">
                    <h5 class="text-center m-0">Counter : <span id="m3">0</span></h5>
                </div>
                <div class="card-footer text-center">
                    <button class="btn">View Details</button>
                </div>
            </div>
        </div>

        <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3 p-4">
            <div class="card">
                <div class="card-header text-center">MACHINE 4</div>
                <div class="card-body p-2 on">
                    <h5 class="text-center m-0">Counter : <span id="m4">0</span></h5>
                </div>
                <div class="card-footer text-center">
                    <button class="btn">View Details</button>
                </div>
            </div>
        </div>

    </div>
@endsection
