@extends('Admin.AdminLayout.layouts.default')
@section('main')

<div class="login-box">
  <h2>Sessions</h2>

  <form action="{{ url('store-session') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="" class="text-white">Session</label>
      <select name="session" class="form-control">
        <option value="Spring 2022">Spring 2022</option>
        <option value="Fall 2022">Fall 2022</option>
      </select>
    </div>
    <div class="form-group">
      <label for="" class="text-white">is_active</label>
      <input type="boolean" name="is_active" id="">
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