@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-4 ib-start-card">
                <div class="card-header ib-card-header ">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                      {{ __('Benvenuto') }}  {{Auth::user()->name}}
                </div>

            </div>
        </div>
    </div>

@endsection
