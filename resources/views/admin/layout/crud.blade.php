@extends('admin.layout.master')

@section('content')
    <div class="crud">
        <div class="table">
            @yield('table')
        </div>

        <div class="form">
           @yield('form')
        </div>
    </div>
@endsection