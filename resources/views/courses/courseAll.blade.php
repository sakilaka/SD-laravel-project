@extends('Admin.AdminLayout.layouts.default')
@section('main')
    <div class="container">
        <h2>All Courses</h2>
        <!-- <span><a class="btn btn-success" href="{{ url('store-StuRegister') }}">Create Person</a></span> -->
        <table class="table table-dark">
            <thead>
                <th>Course Title</th>
                <th>Course Code</th>
               
            </thead>
            <tbody>
                @if($course)
                @foreach($course as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->code }}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    @endsection

    
