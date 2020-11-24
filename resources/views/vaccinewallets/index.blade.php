@extends('layouts.app')

@section('page')

<h1 class="text-center">Vaccines Wallets</h1>

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('vaccinewallets/create')}}">
    <button class="btn btn-success">Register</button>
</a>

@csrf

<table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">User</th>
        <th scope="col">Patient</th>
        <th scope="col">Vaccine</th>
        <th scope="col">Vaccine Date</th>
       <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($vaccinewallets as $vaccinewallet)

        <tr>
            <th scope="row">{{$vaccinewallet->id}}</th>
            <td>{{$vaccinewallet->relUser->name}}</td>
            <td>{{$vaccinewallet->relPatient->name}}</td>
            <td>{{$vaccinewallet->relVaccine->name}}</td>
             <td>{{$vaccinewallet->vaccine_date}}</td>

            <td>

                <a href="{{url("vaccinewallets/$vaccinewallet->id")}}">
                    <button class="btn btn-dark">To view</button>
                </a>
                <a href="{{url("vaccinewallets/$vaccinewallet->id/edit")}}">
                    <button class="btn btn-primary">Edit</button>
                </a>

                <a href="{{url("vaccinewallets/$vaccinewallet->id")}}" class="js-del">
                    <button type="submit" class="btn btn-danger" >Delete</button>
                </a>

            </td>
          </tr>
        @endforeach

    </tbody>
  </table>

@endsection
