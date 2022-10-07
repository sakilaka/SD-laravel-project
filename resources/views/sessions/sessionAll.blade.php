@extends('Admin.AdminLayout.layouts.default')
@section('main')
<div class="container">
    <h2 class="text-center my-3">All sessions</h2>
    <!-- <span><a class="btn btn-success" href="{{ url('store-StuRegister') }}">Create Person</a></span> -->
    <table class="table table-dark w-75 m-auto">
        <thead>
            <th>sessions</th>
            <th>is active</th>

        </thead>
        <tbody>
            @if($session)
            @foreach($session as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ $p->is_active }}</td>

            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection