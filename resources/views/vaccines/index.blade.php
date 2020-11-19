@extends('layouts.app')

@section('page')

<h1 class="text-center">Vaccines</h1>

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('vaccines/create')}}">
    <button class="btn btn-success">Cadastrar</button>
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
                    <button class="btn btn-dark">Visualizar</button>
                </a>
                <a href="{{url("vaccines/$vaccine->id/edit")}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
            <form action="{{ route('vaccines.destroy',$vaccine->id) }}" method="POST">
                <a href="{{url("vaccines/$vaccine->id")}}">
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
