@extends('layouts.layout1')
@section('content')
  <h1><a href="{{route('index')}}">Employees</a></h1>
  <div class="login-box">
    <h1>NEW EMPLOYEE</h1>
    <form action="{{route('store')}}" method="post">
      @csrf
      @method('POST')

      <div class="user-box">
        <input type="text" name="firstname" value="">
        <label for="firstname">firstname</label>
      </div>
      <div class="user-box">
        <input type="text" name="lastname" value="">
        <label for="lastname">lastname</label>
      </div>
      <div class="user-box">
        <input type="date" name="date_of_birth" value="">
      </div>
      <div class="user-box">
        <input type="text" name="private_code" value="">
        <label for="private_code">private_code</label>
      </div>
      <div class="user-box">
        <label for="location_id">Location</label>
        <select name="location_id">
          @foreach ($locs as $loc)
            <option value="{{$loc -> id}}">{{$loc -> name}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit">Create</button>
    </form>
  </div>

@endsection
