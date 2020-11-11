@extends('layouts.app')

@section('page')

<h1 class="text-center">Visualizar</h1><hr>

Nome: {{$clients->name}}<br>
Telephone: {{$clients->phone}}<br>
Email: {{$clients->email}}<br>


@endsection
