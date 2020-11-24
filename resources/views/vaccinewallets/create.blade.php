@extends('layouts.app')

@section('page')
<h1 class="text-center">@if(isset($vaccinewallets))Editar @else Cadastrar

    @endif</h1><hr>


<div class="col-8 m-auto">
    @if (isset($vaccinewallets))
    <form  name="formEdit" id="formEdit" method="POST" action="{{url("vaccinewallets/$vaccinewallets->id")}}" >
       @method('PUT')
    @else
       <form  name="formCard" id="formCard" method="POST" action="{{url('vaccinewallets')}}" >
    @endif

@csrf

    User:
    <select class="form-control" name="user_id" id="user_id">
        <option value="{{$vaccinewallets->user_id ??''}}" >{{$vaccinewallets->relUser->name ?? 'Select'}}</option>
             @foreach ($users as $user)
                 <option value="{{$user->id}}">{{$user->id."-".$user->name}}</option>
             @endforeach
     </select><br>

     Vaccine:
     <select class="form-control" name="vaccine_id" id="vaccine_id">
        <option value="{{$vaccinewallets->vaccine_id ??''}}" >{{$vaccinewallets->relVaccine->name ?? 'Select'}}</option>
             @foreach ($vaccines as $vaccine)
                 <option value="{{$vaccine->id}}">{{$vaccine->id."-" .$vaccine->name}}</option>
             @endforeach
     </select><br>

     Patient:
     <select class="form-control" name="patient_id" id="patient_id">
        <option value="{{$vaccinewallets->patient_id ??''}}" >{{$vaccinewallets->relPatient->name ?? 'Select'}}</option>
             @foreach ($patients as $patient)
                 <option value="{{$patient->id}}">{{$patient->name}}</option>
             @endforeach
     </select><br>

    Date Birth:
    <input class="form-control" type="date" name="vaccine_date" id="vaccine_date" value="{{$vaccinewallets->vaccine_date ?? ''}}"><br>


  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
