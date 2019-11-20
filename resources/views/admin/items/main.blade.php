@extends('layouts.app')

@section('content')
    <div class = "main-content d-flex  justify-content-center align-items-center flex-column w-100">
        <div class = "header">
                @yield('form-header') 
        </div>
        <div class = "form-content d-flex  justify-content-center align-items-center flex-column w-100">
            @yield('form')        

        </div>
    </div>
    
@endsection
    