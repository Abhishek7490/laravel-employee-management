@extends('includes.admin.header')

@section('sliderbar')
     
        <ul class="nav flex-column">
            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link"><i class="fa-solid fa-house-user"></i>Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('admin.employees.index') }}" class="nav-link"><i class="fa-solid fa-circle-user"></i>Employee</a></li>
        </ul>
@endsection

@section('content')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Form') }}
        </h2>
    </x-slot>

<form action="{{ route('admin.employees.store') }}" method="POST" id="Emp_form">
@csrf
<div class="row">
    <div class="form-group">
        <div class="col-md-12  pt-3">
            <label for="full_name">Employee Full Name</label>
            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full Name" value="{{ old('full_name') }}">
            <p class="text-danger d-none" id="full_name_error"></p>
            @error('full_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> 
        
        <div class="col-md-12 pt-3">
            <label for="email">Employee Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
            <p class="text-danger d-none" id="email_error"></p>
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> 

        <div class="col-md-12 pt-3">
            <label for="phone">Employee Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}">
            <p class="text-danger d-none" id="phone_error"></p>
            @error('phone')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> 

        <div class="col-md-12 pt-3">
            <label for="designation">Employee Designation</label>
            <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" value="{{ old('designation') }}">
            <p class="text-danger d-none" id="designation_error"></p>
            @error('designation')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> 

        <div class="d-flex justify-content-end pt-3 ">
        <a type="button" class="btn btn-danger me-2" value="Cancel" href="{{ route('admin.employees.index') }}">Cancel</a>
        <button type="button" class="btn btn-primary" value="Submit" onclick="emp_form()">Submit</button>
        </div>
    </div>
</div>
    </form>
</x-app-layout>


@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    function emp_form(){
        var full_name = $('#full_name').val().trim();

        if(full_name == ""){
            $('#full_name_error').removeClass('d-none').text('Please Enter Full Name');
            $('html,body').animate({
                scrollTop: $('#full_name_error').offset().top -100
            },500);
            setTimeout(function () {
                $('#full_name_error').addClass('d-none').text('');
            }, 3000);
        }

        var email = $('#email').val().trim();
        var email_type = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if(email == ""){
            $('#email_error').removeClass('d-none').text('Please Enter Email');
            $('html,body').animate({
                scrollTop: $('#email_error').offset().top -100
            },500);
            setTimeout(function () {
                $('#email_error').addClass('d-none').text('');
            }, 3000);
            return false
        }

        if(!email_type.test(email)){
            $('#email_error').removeClass('d-none').text('Please Enter Valid Email');
            $('html,body').animate({
                scrollTop: $('#email_error').offset().top -100
            },500);
            setTimeout(function () {
                $('#email_error').addClass('d-none').text('');
            }, 3000);
             return false
        }

        var phone = $('#phone').val();
          if(phone == ""){
            $('#phone_error').removeClass('d-none').text('Please Enter Phone Number');
            $('html,body').animate({
                scrollTop: $('#phone_error').offset().top -100
            },500);
            setTimeout(function () {
                $('#phone_error').addClass('d-none').text('');
            }, 3000);
             return false
        
            }

        var designation = $('#designation').val();
            if(designation == ""){
                $('#designation_error').removeClass('d-none').text('Please Enter Designation');
                $('html,body').animate({
                    scrollTop: $('#designation_error').offset().top -100
                },500);
                setTimeout(function () {
                    $('#designation_error').addClass('d-none').text('');
                }, 3000);
                return false
            }

        $('#Emp_form').submit();

    }
</script>
@endsection
