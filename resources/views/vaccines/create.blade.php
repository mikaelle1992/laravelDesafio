@extends('layouts.app')

@section('page')
<h1 class="text-center">@if(isset($vaccines))Editar @else Cadastrar

    @endif</h1><hr>

<div class="col-8 m-auto">
    @if (isset($vaccines))
    <form  name="formEdit" id="formEdit" method="POST" action="{{url("vaccines/$vaccines->id")}}" >
       @method('PUT')
    @else
       <form  name="formCard" id="formCard" method="POST" action="{{url('vaccines')}}" >
     @endif
 @csrf
    Name:
    <input class="form-control" type="text" name="name" id="name" value="{{$vaccines->name ?? ''}}" required><br>

    <button type="submit" class="btn btn-primary">@if(isset($vaccines)) Edit @else Submit @endif

  </form>
</div>
@endsection
