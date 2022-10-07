@extends('Admin.AdminLayout.layouts.default')
@section('main')

<div class="login-box">
  <h2>Courses</h2>

  <form action="{{ url('store-course') }}" method="post">
    @csrf
    <div class="user-box">
      <input type="text" name="title" required="">
      <label>Course Title</label>
    </div>
    <div class="user-box">
      <input type="text" name="code" required="">
      <label>Course Code</label>
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