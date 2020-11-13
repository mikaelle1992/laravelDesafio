@extends('layouts.app')

@section('page')

<div class="text-center mt-3 mb-4"></div>
<a href="{{url('vaccinewallets/create')}}">
    <button class="btn btn-success">Cadastrar</button>
</a>

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
        @php

            $users=$vaccinewallet->find($vaccinewallet->id)->relUser;
          //$vaccines= $vaccinewallet->find($vaccinewallet->id)->Vaccines;
            $patients= $vaccinewallet->find($vaccinewallet->id)->relPatient;
        @endphp
        <tr>
            <th scope="row">{{$vaccinewallet->id}}</th>
            <td>{{$users->name}}</td>
            <td>{{$patients->name}}</td>
            <td>{{$vaccinewallet->vaccine_id}}</td>
             <td>{{$vaccinewallet->vaccine_date}}</td>

            <td>

                <a href="{{url("vaccinewallets/$vaccinewallet->id")}}">
                    <button class="btn btn-dark">Visualizar</button>
                </a>
                <a href="{{url("vaccinewallets/$vaccinewallet->id/edit")}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
 <form action="{{ route('vaccinewallets.destroy',$vaccinewallet->id) }}" method="POST">
                <a href="{{url("vaccinewallets/$vaccinewallet->id")}}">
                    @csrf
                    @method('DELETE')
                 <button type="submit" class="btn btn-danger" >Deletar</button>
                </a>
                </form>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>

@endsection
