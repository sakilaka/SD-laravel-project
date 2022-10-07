@extends('Admin.AdminLayout.layouts.default')
@section('main')
<div class="container">
    <h2 class="text-center">All Sections</h2>
    <!-- <span><a class="btn btn-success" href="{{ url('store-StuRegister') }}">Create Person</a></span> -->
    <table class="table table-dark table-striped w-50 m-auto">
        <thead>
            <th>Sections </th>

        </thead>
        <tbody>
            @if($section)
            @foreach($section as $p)
            <tr class="table-dark">
                <td>{{ $p->name }}</td>

            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection