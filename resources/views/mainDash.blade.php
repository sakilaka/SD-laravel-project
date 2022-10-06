<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <link rel="stylesheet" href="{{ asset('register.css') }}"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <section>
    <nav class="container navbar navbar-expand-lg navbar-light bg-light mt-4"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">
        <a class="navbar-brand fw-bolder" href="{{ url('dashboard') }}">SD Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
        
                    <li class="nav-item" style="margin-left:15px;">
                            <a class="nav-link text-nowrap" href="{{ url('logout') }}">Logout</a>
                        </li>

                    
                </ul>
            </b>
        </div>
    </nav>

    </section>
<main class="container px-4">
    <div class="container-fluid px-4">
        <h1 class="text-center mt-4" style="font-weight:bold;">Main Dashboard</h1>
        <hr class="w-50 m-auto">
        
    <div class="row mt-5 p-3">
        <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4"  style="height: 250px;">
            <div class="card-body" style="font-size:25px; font-weight:bold;">Admin Dashboard</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ url('AdminDashboard') }}"><button class="btn btn-dark">View Dashboard</button></a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4"  style="height: 250px;">
            <div class="card-body fonts" style="color : black;font-size:25px; font-weight:bold;">Teacher Dashboard</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ url('TeacherDashboard') }}"><button class="btn btn-dark">View Dashboard</button></a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-danger text-white mb-4"  style="height: 250px;">
            <div class="card-body" style="font-size:25px; font-weight:bold;">Students Dashboard</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ url('StudentDashboard') }}"><button class="btn btn-dark">View Dashboard</button></a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
            </div>
        </div>
      
    </div>
       
    </main>

</body>
</html>