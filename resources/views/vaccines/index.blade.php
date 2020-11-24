@extends('layouts.app')

@section('page')

<h1 class="text-center">Vaccines</h1>

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('vaccines/create')}}">
    <button class="btn btn-success">Register</button>
</a>

@csrf

<table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($vaccines as $vaccine)

        <tr>
            <th scope="row">{{$vaccine->id}}</th>
            <td>{{$vaccine->name}}</td>

          <td>

                <a href="{{url("vaccines/$vaccine->id")}}">
                    <button class="btn btn-dark">To view</button>
                </a>
                <a href="{{url("vaccines/$vaccine->id/edit")}}">
                    <button class="btn btn-primary">Edit</button>
                </a>

                <a href="{{url("vaccines/$vaccine->id")}}"class="js-del">
                   <button class="btn btn-danger">Delete</button>
                </a>

            </td>
          </tr>
        @endforeach

    </tbody>
  </table>

@endsection
