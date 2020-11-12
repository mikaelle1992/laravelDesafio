@extends('layouts.app')

@section('page')
<h1 class="text-center">@if(isset($animals))Editar @else Cadastrar

 @endif</h1><hr>

<div class="col-8 m-auto">
    @if (isset($animals))
    <form  name="formEdit" id="formEdit" method="POST" action="{{url("animals/$animals->id")}}" >
       @method('PUT')
    @else
       <form  name="formCard" id="formCard" method="POST" action="{{url('animals')}}" >
     @endif
@csrf
    Name:
    <input class="form-control" type="text" name="name" id="name" value="{{$animals->name ?? ''}}" ><br>

    <button type="submit" class="btn btn-primary">@if(isset($animals)) Edit @else Submit @endif

  </form>
</div>
@endsection
