@extends('Admin.AdminLayout.layouts.default')
@section('main')
    <div class="container">
        <h2>All Assigned teacher</h2>
        <!-- <span><a class="btn btn-success" href="{{ url('store-StuRegister') }}">Create Person</a></span> -->
        <table class="table table-dark">
            <thead>
                <th>Name</th>
                <th>Session</th>
                <th>Course</th>
                <th>Section</th>
               
            </thead>
            <tbody>
                @if($allTeacher)
                @foreach($allTeacher as $t)
                <tr>
                    <td>{{ $t->name }}</td>
                    <td>{{ $t->session }}</td>
                    <td>{{ $t->course }}</td>
                    <td>{{ $t->section }}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    @endsection

    
