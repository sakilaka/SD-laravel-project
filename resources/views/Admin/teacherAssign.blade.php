@extends('Admin.AdminLayout.layouts.default')
@section('main')

<div class="login-box">
   <h2>Assign teacher</h2>

   <form action="{{ url('store-assign-teacher') }}" method="post">
      @csrf
      <div class="form-group">
         <label class="text-danger fw-bold" for="">name</label>
         <select name="name" class="form-control">

            @if($name)
            @foreach($name as $n)
            <option value="{{ $n->name }}">{{ $n->name }}</option>
            @endforeach
            @endif

         </select>

      </div>

      <div class="form-group">
         <label for="" class="text-danger fw-bold">Session</label>
         <select name="session" class="form-control">

            @if($session)
            @foreach($session as $p)
            <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif

         </select>
      </div>
      <div class="form-group">
         <label for="" class="text-danger fw-bold">Section</label>
         <select name="section" class="form-control">
            @if($section)
            @foreach($section as $p)
            <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif
         </select>
      </div>
      <div class="form-group">
         <label for="" class="text-danger fw-bold">Course</label>
         <select name="course" class="form-control">
            @if($course)
            @foreach($course as $p)
            <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif
         </select>
      </div>



      <a href="">
         <span></span>
         <span></span>
         <span></span>
         <span></span>

         <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Submit</button>

      </a>

   </form>
</div>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('register.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection