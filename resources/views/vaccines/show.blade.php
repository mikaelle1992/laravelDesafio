@extends('layouts.app')

@section('page')

<h1 class="text-center">To view</h1><hr>


Name: {{$vaccines->name}}<br>

<div class=" mt-3 mb-4">
    <a href="{{url('vaccines')}}">
    <button class="btn btn-primary text-center mt-3 mb-4">Return</button>
</a>
</div>

@endsection
