@extends('student.StudentLayout.layouts.studentdefault')
@section('student')

<div>
    <h2 class="text-center my-5 fw-bold">My Enrollment Details</h2>

    <div>
        <table class="table table-success table-striped text-white">
            <tr class="bg-dark">
                <th>session</th>
                <th>course</th>
                <th>section</th>
                <th>Action</th>
            </tr>
            @foreach ($allEnroll as $e)
            <tr style="color: black; font-weight: bold;">
                <td>{{ $e->session }}</td>
                <td>{{ $e->course }}</td>
                <td>{{ $e->section }}</td>

                @if ($e->course === 'SD')
                <td>
                   <a href="{{ url('project-submission') }}"><button class="btn btn-dark">Project Idea</button></a>
                </td>

                @endif
                @endforeach

            </tr>
        </table>
    </div>
</div>

@endsection