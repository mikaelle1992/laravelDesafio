@extends('layouts.app')

@section('page')

<h1 class="text-center">Patients</h1>

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('patients/create')}}">
    <button class="btn btn-success">Register</button>
</a>

@csrf

<table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date of birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Breed</th>
        <th scope="col">Responsible</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)

        <tr>
            <th scope="row">{{$patient->id}}</th>
            <td>{{$patient->name}}</td>
            <td>{{$patient->date_birth}}</td>
            <td>{{$patient->gender}}</td>
            <td>{{$patient->relBreed->name}}</td>
            <td>{{$patient->relClient->name}}</td>


            <td>


                <a href="{{url("patients/$patient->id")}}">
                    <button class="btn btn-dark">Patient file</button>
                </a>
                <a href="{{url("patients/$patient->id/edit")}}">
                    <button class="btn btn-primary">Edit</button>
                </a>

                 <a href="{{url("patients/$patient->id")}}" class="js-del">
                    <button class="btn btn-danger">Delete</button>
                </a>


            </td>
          </tr>
        @endforeach

    </tbody>
  </table>

@endsection
