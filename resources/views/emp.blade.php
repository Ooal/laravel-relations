@extends('layouts.layout1')
@section('content')
  <h1>Employee</h1>
  <p>{{$emp -> firstname}} {{$emp -> lastname}}</p>
  <p>Date of birth : {{$emp -> date_of_birth}}</p>
  <p>Private code : {{$emp -> private_code}}</p>
  <br>
  <h2>Location :</h2>
  <p>{{$emp -> location -> name}} ({{$emp -> location -> city}} - {{$emp -> location -> state}})</p>
  <h2>Tasks :</h2>
  <ul>
    @foreach ($emp -> tasks as $tas)
      <li><a href="{{route('show_tas', $tas -> id)}}">{{$tas -> name}}</a> : {{$tas -> start_date}} - {{$tas -> end_date}}</li>
    @endforeach
  </ul>

<a href="{{route('delete', $emp -> id)}}">Delete</a>
<a href="{{route('edit', $emp -> id)}}">Edit</a>

  <h2><a href="{{route('index')}}">Employees</a></h2>
@endsection
