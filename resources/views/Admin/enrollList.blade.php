@extends('Admin.AdminLayout.layouts.default')
@section('main')
<div class="container">
    <h2 class="text-center">Enroll List</h2>
    <table class="table table-success table-striped">
        <thead>
            <th>Session</th>
            <th>Course</th>
            <th>Section</th>

        </thead>
        <tbody>
            @foreach($allEnroll as $p)
            <tr>
                <td>{{ $p->session }}</td>
                <td>{{ $p->course }}</td>
                <td>{{ $p->section }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection