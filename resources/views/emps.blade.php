@extends('layouts.layout1')
@section('content')
  <h1>Employess</h1>
  <ul>
    @foreach ($emps as $emp)
      <li>
        <a href="{{route('show_epm', $emp -> id)}}">{{$emp -> firstname}} {{$emp -> lastname}} </a>
      </li>
    @endforeach
  </ul>
  <h2><a href="{{route('create')}}">NEW EMPLOYEE</a></h2>
@endsection
