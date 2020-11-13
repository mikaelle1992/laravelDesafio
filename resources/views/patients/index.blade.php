@extends('layouts.app')

@section('page')

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('patients/create')}}">
    <button class="btn btn-success">Cadastrar</button>
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
            @php
            $breed=$patient->find($patient->id)->relBreed;
            $client=$patient->find($patient->id)->relClient;
            @endphp
        <tr>
            <th scope="row">{{$patient->id}}</th>
            <td>{{$patient->name}}</td>
            <td>{{$patient->date_birth}}</td>
            <td>{{$patient->gender}}</td>
            <td>{{$breed->name}}</td>
            <td>{{$client->name}}</td>


            <td>


                <a href="{{url("patients/$patient->id")}}">
                    <button class="btn btn-dark">Visualizar</button>
                </a>
                <a href="{{url("patients/$patient->id/edit")}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
                 <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
                <a href="{{url("patients/$patient->id")}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Deletar</button>
                </a>
                </form>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>

@endsection
