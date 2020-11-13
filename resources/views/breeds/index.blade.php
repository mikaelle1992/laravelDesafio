@extends('layouts.app')

@section('page')

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('breeds/create')}}">
    <button class="btn btn-success">Cadastrar</button>
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
                    <button class="btn btn-dark">Visualizar</button>
                </a>
                <a href="{{url("breeds/$breed->id/edit")}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
            <form action="{{ route('breeds.destroy',$breed->id) }}" method="POST">
                <a href="{{url("breeds/$breed->id")}}">
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
