@extends('layouts.layout1')
@section('content')
  <h1>Task</h1>
  <p>{{$tas -> name}}</p>
  <ul>
    @foreach ($tas -> employees as $emp)
      <li>{{$emp -> firstname}} {{$emp -> lastname}} : {{$emp -> location -> name}}
       </li>
    @endforeach
  </ul>



  <h2><a href="{{route('index')}}">Employees</a></h2>
@endsection
