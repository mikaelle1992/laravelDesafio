@extends('layouts.app')

@section('page')

<h1 class="text-center">Visualizar</h1><hr>


Nome: {{$patients->name}}<br>
Date birth: {{$patients->date_birth}}<br>
Gender: {{$patients->gender}}<br>
Breed: {{$patients->relBreed->name}}<br>
Responsible: {{$patients->relClient->name}}<br>

@csrf
<table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">vaccines</th>
        <th scope="col">Vaccine Date</th>


      </tr>
    </thead>
    <tbody>

        @foreach ($listVaccines as $listVaccine)
         <tr>
            <th scope="row">{{$listVaccine->vaccine_id}}</th>
                <td>{{$listVaccine->name}}</td>
                <td>{{$listVaccine->vaccine_date}}</td>
         </tr>


        @endforeach

    </tbody>


  </table>

<div class=" mt-3 mb-4">
    <a href="{{url('patients')}}">
    <button class="btn btn-primary text-center mt-3 mb-4">Return</button>
</a>
</div>

@endsection
