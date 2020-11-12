@extends('layouts.app')

@section('page')

<h1 class="text-center">Visualizar</h1><hr>


Nome: {{$vaccines->name}}<br>

<div class=" mt-3 mb-4">
    <a href="{{url('vaccines')}}">
    <button class="btn btn-primary text-center mt-3 mb-4">Voltar</button>
</a>
</div>

@endsection
