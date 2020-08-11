@extends('layouts.app')

@section('content')
<link href="{{asset('custom/css/bootstrap.min.css" rel="stylesheet')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to the landing page!') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
