@extends('layouts.fronted')

@section('title', 'Features')

@section('content')
    <h1>Application Features</h1>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User Registration</h5>
            <ul>
                <li>Users can easily register using their name, email, and password.</li>
                <li>All input is validated from Serverside and Client Side.</li>
                <li>data is stored safely in the database.</li>
            </ul>
        </div>
    </div>
</div>

<div class="col-md-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Employee Management</h5>
             <ul>
                <li>Login Admin easily add update the employee</li>
                <li>On sidebar click of the employee module the listing file where list of employee.</li>
                <li>Here employee can easily add and updates.</li>
                <li>All input is validated from Serverside and Client Side.</li>
                <li>data is stored safely in the database.</li>
            </ul>
        </div>
    </div>
</div>  

<div class="col-md-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Slack Notifications</h5>
             <ul>
                <li>Automatically Send notification in channel whenever new user is created.</li>
                <li>Also send notification in channel whenever new employee created.</li>
                <li>While whenever the employee data update then also send notification to the channel</li>
            </ul>
        </div>
    </div>
</div>  

<div class="col-md-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Bootstrap 5 Frontend With Static Content</h5>
             <ul>
                <li>Enjoy UI with Bootstrap 5, including a dynamic layout, navigation bar.</li>
                <li>On Front there are 3 pages with static content home, about-us and features.</li>
            </ul>
        </div>
    </div>
</div>  
@endsection
