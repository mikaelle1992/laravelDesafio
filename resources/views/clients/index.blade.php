@extends('layouts.app')

@section('page')

<h1 class="text-center">Clients</h1>

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('clients/create')}}">
    <button class="btn btn-success">Register</button>
</a>

@csrf

<table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <th scope="row">{{$client->id}}</th>
            <td>{{$client->name}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->email}}</td>
            <td>


                <a href="{{url("clients/$client->id")}}">
                    <button class="btn btn-dark">To view</button>
                </a>
                <a href="{{url("clients/$client->id/edit")}}">
                    <button class="btn btn-primary">Edit</button>
                </a>

                <a href="{{ route('clients.destroy',$client->id) }}" class="js-del">
                    <button class="btn btn-danger">Delete</button>
                </a>

            </td>
          </tr>
        @endforeach

    </tbody>
  </table>

@endsection
