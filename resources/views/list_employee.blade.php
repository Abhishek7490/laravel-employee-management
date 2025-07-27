@extends('includes.admin.header')

@section('sliderbar')
      
        <ul class="nav flex-column">
            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">
              <i class="fa-solid fa-house-user"></i>Dashboard</a></li>

            <li class="nav-item"><a href="{{ route('admin.employees.index') }}" class="nav-link">
              <i class="fa-solid fa-circle-user"></i>Employee</a></li>
        </ul>
@endsection

@section('content')


<x-app-layout>

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

@if(session('error'))
<p class="alert alert-danger">{{ session('error') }}</p>
@endif 

<div class="p-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="d-flex justify-content-end">
              <a class="btn btn-primary" href="{{ route('admin.employees.create')}}" name="add_emp" id="add_emp">Add Employee</a>
          </div>
    </div>  
</div>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Designation</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@forelse($emp as $data)
    <tr>
      <th scope="row">{{ $data->id}}</th>
      <td>{{ $data->full_name}}</td>
      <td>{{ $data->email}}</td>
      <td>{{ $data->phone}}</td>
      <td>{{ $data->designation}}</td>
      <td>
        <a class="btn btn-primary" href="{{ route('admin.employees.edit',$data->id) }}">Edit</a>
        <form action="{{ route('admin.employees.destroy', $data->id) }}" method="POST" style="display:inline-block;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>

    </tr>
@empty
    <tr>
      <th colspan="6" class="text-center"> No Employee Data</th>
    </tr>

@endforelse 
  </tbody>
</table>
</x-app-layout>

@endsection