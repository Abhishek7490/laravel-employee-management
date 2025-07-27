@extends('layouts.fronted')

@section('title', 'Employee Management')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h1>What is employee management?</h1>
        <p>Employee management is the process by which employers ensure workers perform their jobs to the best of their abilities so as to achieve business goals. It typically entails building and maintaining healthy relationships with employees, as well as monitoring their daily labor and measuring progress. In this way, employers can identify opportunities for improvement and recognize achievements.</p>

       <h1>What responsibilities does employee management include?</h1>
       <p> Helping employees reach their full potential requires managers and supervisors to fulfill several of the following key responsibilities:</p>

        <h5>Acquire talent</h5>
        Filling open positions with the right people can make employee management easier from the start. That’s why many hiring managers are diligent about writing detailed job descriptions, sourcing and interviewing qualified applicants, and running background checks.

        <h5>Manage performance</h5>
        <p>Employees tend to do their jobs better and are more engaged when they are given opportunities to learn new skills or grow with the organization. To this end, employers may provide training and upskilling programs, encourage attendance at conferences and trade shows, or permit employees to adjust their roles according to their strengths and interests.</p>

        <h5>Support two-way communication</h5>
        <p>Managers who want to make their employees feel included generally have open door policies and share important information about the business with them. They also provide a forum for individuals to express their ideas, opinions and complaints. This feedback is then used to address any issues that may be negatively affecting the workforce, improve processes and keep employees engaged.</p>

        <h5>Recognize achievements</h5>
        <p>Employees who know their hard work is appreciated by management and senior leadership are typically more motivated to excel in their roles. Recognition can be a simple thank you or shout-out during a meeting, or a reward, such as a pay raise or promotion.</p>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('/site/home1.png')}}" class="img-fluid">
         <img src="{{ asset('/site/home2.png')}}" class="mt-3 img-fluid" >
    </div>
    </div>
</div>
    

@endsection
