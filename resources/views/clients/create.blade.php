@extends('layouts.app')

@section('page')
<h1 class="text-center">@if(isset($clients))Editar @else Cadastrar

    @endif</h1><hr>

<div class="col-8 m-auto">
    @if (isset($clients))
    <form  name="formEdit" id="formEdit" method="POST" action="{{url("clients/$clients->id")}}" >
       @method('PUT')
    @else
       <form  name="formCard" id="formCard" method="POST" action="{{url('clients')}}" >
     @endif
@csrf
    Name:
    <input class="form-control" type="text" name="name" id="name" value="{{$clients->name ?? ''}}"required><br>
    Phone:
    <input class="form-control" type="tel" name="phone" id="phone" value="{{$clients->phone ?? ''}}"required><br>
    Email:
    <input class="form-control" type="email" name="email" id="email" value="{{$clients->email ?? ''}}"required><br>


    <button type="submit" class="btn btn-primary">@if(isset($clients)) Edit @else Submit @endif

  </form>
</div>
@endsection

