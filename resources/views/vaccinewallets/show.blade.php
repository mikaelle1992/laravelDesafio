@extends('layouts.app')

@section('page')

<h1 class="text-center">To view</h1><hr>


<h3>Vaccines Wallets</h3>
User: {{$vaccinewallets->relUser->name}}<br>
Vaccine: {{$vaccinewallets->relVaccine->name}}<br>
Patient: {{$vaccinewallets->relPatient->name}}<br>
Vaccine Date: {{$vaccinewallets->vaccine_date}}<br>


<div class=" mt-3 mb-4">
    <a href="{{url('vaccinewallets')}}">
    <button class="btn btn-primary text-center mt-3 mb-4">Return</button>
</a>
</div>

@endsection
