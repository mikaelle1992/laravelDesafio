@extends('layouts.app')

@section('page')

<form action="{{url('clients')}}" method="POST">
@csrf
    <div class="form-group">
        <label for="exampleInputName1">Name</label>
          <input type="text" name="name" class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputTel1">Telephone</label>
        <input type="tel" name="telefone" class="form-control" >
  </div>
    <div class="form-group">
      <label for="exampleInputEmail1">E-mail</label>
      <input type="email" name = "email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

