@extends('layouts.fronted')

<style>
    .static-class{
        padding-left: 5%!important;
    }
    .static-img{
        height:60%;
        width:100%;
    }
</style>
@section('title', 'About us')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('/site/about1.jpg') }}" class="img-fluid">
        </div>
        <div class="col-md-6 static-class">
             <h1>Who we are</h1>
            <p>At ADP, what we do is about people. Although we have a strong history of providing solutions for human resource challenges, we strive to do more than that.</p>

           <p>We challenge ourselves to anticipate, think forward and take action in a way that empowers us to shape the changing world of work.</p>

            <h1>What we do</h1>
            We are a comprehensive global provider of cloud-based human capital management (HCM) solutions that unite  HR, payroll, talent, time, tax and benefits administration and a leader in business outsourcing services, analytics and compliance expertise.</p>

           <p>Our unmatched experience, deep insights and cutting-edge technology have transformed human resources from a back-office administrative function to a strategic business advantage.</p>
        </div>

            <h1 class="text-center mt-3">Leadership</h1>
            <div class="col-md-3 pt-3">
                 <img src="{{ asset('/site/CEO.jpg') }}" class="static-img" class="img-fluid">
                 <h5>Maria Black</h5>
                 <p>President and CEO</p>
            </div>

            <div class="col-md-3 pt-3">
                 <img src="{{ asset('/site/chief.jpg') }}" class="static-img img-fluid">
                 <h5>Jimmy Adams</h5>
                 <p>Chief Product Development Officer</p>
            </div>

            <div class="col-md-3 pt-3">
                 <img src="{{ asset('/site/CPD.jpg') }}" class="static-img" class="img-fluid" >
                 <h5>Gus Blanchard</h5>
                 <p>Chief Marketing Officer</p>
            </div>

            <div class="col-md-3 pt-3">
                 <img src="{{ asset('/site/HR.jpg') }}" class="static-img" class="img-fluid">
                 <h5>Paul Boland</h5>
                 <p>Chief Human Resources Officer</p>
            </div>

        </div>
   
@endsection
