@extends('layouts.app')

@section('page')

<h1 class="text-center">Visualizar</h1><hr>


<h3>Vaccines Wallets</h3>
User: {{$vaccinewallets->relUser->name}}<br>
Vaccine: {{$vaccinewallets->vaccine_id}}<br>
Patient: {{$vaccinewallets->relPatient->name}}<br>
Vaccine Date: {{$vaccinewallets->vaccine_date}}<br>


<div class=" mt-3 mb-4">
    <a href="{{url('vaccinewallets')}}">
    <button class="btn btn-primary text-center mt-3 mb-4">Voltar</button>
</a>
</div>

@endsection
