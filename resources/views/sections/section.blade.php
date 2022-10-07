@extends('Admin.AdminLayout.layouts.default')
@section('main')
<div class="login-box">
  <h2>Section</h2>

  <form action="{{ url('store-section') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="">Section</label>
      <select name="section" class="form-control">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>

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