<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<div class="container-fluid">
<div class="row bg-primary text-white p-3">
    <div class="col">
            <h4>Employee Management</h4>
    </div>
</div>

    <div class="row min-vh-100"">

        <div class="col-md-2 bg-light p-3 justify-content-end">
            <h5>Project Modules</h5>    
             @yield('sliderbar')   
        </div>

        <div class="col-md-10 p-3">
            @yield('content')
        </div>

    </div>
</div>  



@yield('scripts')
