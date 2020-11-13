@extends('layouts.app')

@section('page')

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('clients/create')}}">
    <button class="btn btn-success">Cadastrar</button>
</a>

@csrf

<table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
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
                    <button class="btn btn-dark">Visualizar</button>
                </a>
                <a href="{{url("clients/$client->id/edit")}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
              <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
                <a href="{{ route('clients.destroy',$client->id) }}">
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
