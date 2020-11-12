@extends('layouts.app')

@section('page')

<h1 class="text-center">Visualizar</h1><hr>

Nome: {{$animals->name}}<br>

<div class=" mt-3 mb-4">
    <a href="{{url('animals')}}">
    <button class="btn btn-primary text-center mt-3 mb-4">Voltar</button>
</a>
</div>

@endsection
