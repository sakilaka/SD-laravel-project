<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="{{ asset('register.css') }}">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
  <section>
    <nav class="container navbar navbar-expand-lg navbar-light bg-light mt-4" style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
      <div class="container-fluid">
        <a class="navbar-brand fw-bolder" href="{{ url('dashboard') }}">SD Project</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <b>
          <ul class="navbar-nav ">

            <li class="nav-item" style="margin-left:15px;">
              <a class="nav-link text-nowrap active" href="{{ url('dashboard') }}">Home</a>
            </li>
            <li class="nav-item" style="margin-left:15px;">
              <a class="nav-link text-nowrap" href="{{ url('register') }}">Sign Up</a>
            </li>
            <li class="nav-item" style="margin-left:15px;">
              <a class="nav-link text-nowrap" href="{{ url('login') }}">Sign In</a>
            </li>
            <li class="nav-item" style="margin-left:15px;">
              <a class="nav-link text-nowrap" href="{{ url('logout') }}">Logout</a>
            </li>


          </ul>
        </b>
      </div>
    </nav>
  </section>

  <section class="mb-5">
    <div class="login-box">
      <h2>Login</h2>
      <form method="post" action="{{ url('store-login') }}">
        @csrf
        @if(Session::has('err'))
        <div class="alert alert-danger">
          {{ Session::get('err') }}
        </div>
        @endif
        <div class="user-box">
          <input type="email" name="email" required="">
          <label>Email</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required="">
          <label>Password</label>
        </div>
        <a href="">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <button type="submit" class="btn btn-block login-button">Submit</button>
        </a>
        <a href="{{ url('register') }}">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Sign Up
        </a>
      </form>
    </div>
  </section>


</body>

</html>