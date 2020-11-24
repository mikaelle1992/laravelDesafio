@extends('layouts.app')

@section('page')

<h1 class="text-center">To view</h1><hr>

Name: {{$breeds->name}}<br>
Animal:{{$breeds->relAnimal->name}}<br>
<div class=" mt-3 mb-4">
    <a href="{{url('breeds')}}">
    <button class="btn btn-primary text-center mt-3 mb-4">Return</button>
</a>
</div>
@endsection
