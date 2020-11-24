@extends('layouts.app')

@section('page')

<h1 class="text-center">Breed</h1>

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('breeds/create')}}">
    <button class="btn btn-success">Register</button>
</a>

@csrf

<table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Breed</th>
        <th scope="col">Animal</th>
       <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($breeds as $breed)
        @php
        $animal=$breed->find($breed->id)->relAnimal;

        @endphp
           <tr>
            <th scope="row">{{$breed->id}}</th>
            <td>{{$breed->name}}</td>
            <td>{{$animal->name}}</td>


            <td>


                <a href="{{url("breeds/$breed->id")}}">
                    <button class="btn btn-dark">To view</button>
                </a>
                <a href="{{url("breeds/$breed->id/edit")}}">
                    <button class="btn btn-primary">Edit</button>
                </a>

                <a href="{{url("breeds/$breed->id")}}" class="js-del">
                  <button class="btn btn-danger">Delete</button>
                </a>

            </td>
          </tr>
        @endforeach

    </tbody>
  </table>

@endsection
