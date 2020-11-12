@extends('layouts.app')

@section('page')

<h1 class="text-center">Visualizar</h1><hr>
@php
$breed=$patients->find($patients->id)->relBreed;
$client=$patients->find($patients->id)->relClient;
@endphp

Nome: {{$patients->name}}<br>
Date birth: {{$patients->date_birth}}<br>
Gender: {{$patients->gender}}<br>
Breed: {{$breed->name}}<br>
Responsible: {{$client->name}}<br>

<div class=" mt-3 mb-4">
    <a href="{{url('patients')}}">
    <button class="btn btn-primary text-center mt-3 mb-4">Voltar</button>
</a>
</div>

@endsection
