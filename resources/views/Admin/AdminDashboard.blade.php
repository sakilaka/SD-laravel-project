@extends('Admin.AdminLayout.layouts.default')
@section('main')

    <body class="sb-nav-fixed">

        <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Admin Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
            <div class="row">
            <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-black fw-bold mb-4">
                        <div class="card-body">Enroll List</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <button class="btn btn-dark"><a class="small text-white stretched-link text-decoration-none" href="{{ url('sessioninfo') }}">View all enrolls</a></button>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Users Information</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                           <div class="btn btn-dark"> <a class="small text-white stretched-link text-decoration-none" href="{{ url('userinfo') }}">View Details</a></div>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Courses</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                           <div class="btn btn-dark"> <a class="small text-white stretched-link text-decoration-none" href="{{ url('courseinfo') }}">View Details</a></div>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Sessions</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                           <div class="btn btn-dark"> <a class="small text-white stretched-link text-decoration-none" href="{{ url('sessioninfo') }}">View Details</a></div>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Sections</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="btn btn-dark"><a class="small text-white stretched-link text-decoration-none" href="{{ url('sectioninfo') }}">View Details</a></div>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>      
    </body>
</html>
@endsection


