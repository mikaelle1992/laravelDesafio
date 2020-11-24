@extends('layouts.app')

@section('page')
<h1 class="text-center">@if(isset($patients))Editar @else Cadastrar

@endif </h1><hr>

<div class="col-8 m-auto">
    @if (isset($patients))
    <form  name="formEdit" id="formEdit" method="POST" action="{{url("patients/$patients->id")}}" >
       @method('PUT')
    @else
       <form  name="formCard" id="formCard" method="POST" action="{{url('patients')}}" >
    @endif

@csrf

    Name:
    <input class="form-control" type="text" name="name" id="name" value="{{$patients->name ?? ''}}" ><br>

    Date Birth:
    <input class="form-control" type="date" name="date_birth" id="date_birth" value="{{$patients->date_birth ?? ''}}"><br>

    Gender:
    <select class="form-control" name="gender" id="gender">
        <option value="{{$patients->gender ??''}}">{{$patients->gender ?? 'Select'}}</option>
        <option value="macho">Male</option>
        <option value="femea">Female</option>
    </select><br>


 Breed:
    <select class="form-control" name="breed_id" id="breed_id">
        <option value="{{$patients->breed_id ??''}}" >{{$patients->relBreed->name ?? 'Select'}}</option>
             @foreach ($breeds as $breed)
                 <option value="{{$breed->id}}">{{$breed->id."-".$breed->name}}</option>
             @endforeach
     </select><br>



  Responsible:
     <select class="form-control" name="client_id" id="client_id">
          <option value="{{$patients->client_id ??''}}">{{$patients->relClient->name ?? 'Select'}}</option>
              @foreach ($clients as $client)
                 <option value="{{$client->id}}">{{$client->id."-" .$client->name}}</option>
              @endforeach
     </select><br>


  <button type="submit" class="btn btn-primary">@if(isset($patients)) Edit @else Submit

    @endif </button>
  </form>
</div>
@endsection
