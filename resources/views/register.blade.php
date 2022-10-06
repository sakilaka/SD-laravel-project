<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="{{ asset('register.css') }}">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
  <main class="d-flex flex-column">
    <section>
      <nav class="container navbar navbar-expand-lg navbar-light bg-light mt-3" style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
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
                <a class="nav-link text-nowrap" href="{{ url('dashboard') }}">Home</a>
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


    <section>
      <div class="login-box">
        <h2>Sign Up</h2>
        @if(Session::has('err'))
        <div class="alert alert-danger">
          {{ Session::get('err') }}
        </div>
        @endif

        @if(Session::has('success'))
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
        @endif



        <form action="{{ url('store-register') }}" method="post">
          @csrf
          <div class="user-box">
            <input type="name" name="name" required="">
            <label>Name</label>
          </div>

          <div class="user-box">
            <input type="text" name="email" required="">
            <label>Email</label>
          </div>
          <div class="from-group" Style="color:White;">
            <h6>Role</h6>
            <div class="form-check form-check-inline">
              <input class="form-check-input" onclick="idTea()" type="radio" name="role" value="Teacher">
              <label class="form-check-label" for="">Teacher</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" onclick="idStu()" type="radio" name="role" value="Student">
              <label class="form-check-label" for="">Student</label>
            </div>
          </div>
          <div class="text-white mt-2" id="set">

          </div>


          <div class="user-box mt-2">
            <input type="password" name="password" required="">
            <label>Password</label>
            <div class="user-box">
              <input type="password" name="confirm" required="">
              <label>Retype Password</label>
            </div>
            <a href="">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <button type="submit" class="btn btn-block login-button">Register</button>
            </a>

            <a href="{{ url('login') }}">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Sign In
            </a>
        </form>
    </section>

  </main>

  <script>
    const idStu = () => {
      const set = document.getElementById('set');

      set.innerHTML = `
              <label>Id :</label>
              <input type="text" name="id" required="">
           `
    }
    const idTea = () => {
      const set = document.getElementById('set');

      set.innerHTML = `
              <label class="d-none">Id :</label>
              <input class="d-none" type="text" name="confirm">
           `
    }
  </script>

</body>
</html>
