@extends('layouts.app')

@section('page')
<h1 class="text-center">@if(isset($breeds))Editar @else Cadastrar

    @endif</h1><hr>

<div class="col-8 m-auto">
    @if (isset($breeds))
    <form  name="formEdit" id="formEdit" method="POST" action="{{url("breeds/$breeds->id")}}" >
       @method('PUT')
    @else
       <form  name="formCard" id="formCard" method="POST" action="{{url('breeds')}}" >
     @endif
   @csrf
    Name:
    <input class="form-control" type="text" name="name" id="name" value="{{$breeds->name ?? ''}}"><br>

    Animal:
    <select class="form-control" name="animal_id" id="animal_id">
        <option value="{{$breeds->animal_id ??''}}" >{{$breeds->relAnimal->name ?? 'Select'}}</option>
             @foreach ($animals as $animal)
                 <option value="{{$animal->id}}">{{$animal->name}}</option>
             @endforeach
     </select><br>
     <button type="submit" class="btn btn-primary">@if(isset($breeds)) Edit @else Submit @endif
    </form>
</div>
@endsection
