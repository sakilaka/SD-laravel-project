@extends('Admin.AdminLayout.layouts.default')
@section('main')
<div class="container">
        <h2>All Users</h2>
        <!-- <span><a class="btn btn-success" href="{{ url('store-StuRegister') }}">Create Person</a></span> -->
        <table class="table table-success">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Approved</th>
                <th>Action</th>              
            </thead>
            <tbody>
                @foreach($users as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->role }}</td>
                    
                    <td>
                        @if($p->is_approved == 1)
                        <span class="btn btn-success">Approved</span>
                        @else
                        <span class="btn btn-danger">Not approved</span>
                        @endif

                    </td>
                   
                    <td>
                     @if($p->is_approved == 0)
                        <a class="btn btn-primary" href="{{ url('approveUser/'.$p->id) }}">approve</a>
                     @endif
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection