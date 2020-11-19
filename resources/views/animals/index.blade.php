@extends('layouts.app')

@section('page')

<h1 class="text-center">Animals</h1>

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('animals/create')}}">
    <button class="btn btn-success">Cadastrar</button>
</a>
@csrf
<table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
       <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($animals as $animal)
        <tr>
            <th scope="row">{{$animal->id}}</th>
            <td>{{$animal->name}}</td>

            <td>


                <a href="{{url("animals/$animal->id")}}">
                    <button class="btn btn-dark">Visualizar</button>
                </a>
                <a href="{{url("animals/$animal->id/edit")}}">
                    <button class="btn btn-primary">Editar</button>
                </a>

                <form action="{{ route('animals.destroy',$animal->id) }}" method="POST">
                <a href="{{url("animals/$animal->id")}}">
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
