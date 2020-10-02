<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function index() {
    $emps = Employee :: all();
    return view('emps', compact('emps'));
  }
  public function show($id) {
    $emp = Employee :: findorfail($id);
    return view('emp', compact('emp'));
  }
  public function create() {
    $locs = Location::all();
    return view('create',compact('locs'));
  }
  public function store(Request $request) {
    $data = $request -> all();
    Employee :: create($data);
    return redirect() -> route('index');
  }
  public function destroy($id) {
    $emp = Employee :: findorfail($id);
    $emp -> delete();
    return redirect() -> route('index');
  }
  public function edit($id) {
    $emp = Employee :: findorfail($id);
    $locs = Location::all();
    return view('edit',compact('emp','locs'));
  }
}
