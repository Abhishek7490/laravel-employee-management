@extends('includes.admin.header')

@section('sliderbar')
    
        <ul class="nav flex-column">
           <li class="nav-item active"><a href="{{ route('dashboard') }}" class="nav-link">
              <i class="fa-solid fa-house-user"></i>Dashboard</a></li>

            <li class="nav-item"><a href="{{ route('admin.employees.index') }}" class="nav-link">
              <i class="fa-solid fa-circle-user"></i>Employee</a></li>
        </ul>
@endsection

@section('content')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     {{ __('Dashboard') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
