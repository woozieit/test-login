@extends('layouts.app')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Dashboard</h1>
        <p class="lead">Welcome! {{ Auth::user()->name . ' ' . Auth::user()->lastname }}</p>
    </div>

@endsection
