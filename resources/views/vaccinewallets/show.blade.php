@extends('layouts.app')

@section('page')

<h1 class="text-center">Visualizar</h1><hr>

@php

$users=$vaccinewallets->find($vaccinewallets->id)->relUser;
//$vaccines= $vaccinewallet->find($vaccinewallet->id)->Vaccines;
$patients= $vaccinewallets->find($vaccinewallets->id)->relPatient;
@endphp

Id:{{$vaccinewallets->id}}<br>
User: {{$users->name}}<br>
Vaccine: {{$vaccines->name}}<br>
Pacient: {{$patients->name}}<br>
Vaccine Date: {{$vaccinewallets->vaccine_date}}<br>


<div class=" mt-3 mb-4">
    <a href="{{url('vaccinewallets')}}">
    <button class="btn btn-primary text-center mt-3 mb-4">Voltar</button>
</a>
</div>

@endsection
