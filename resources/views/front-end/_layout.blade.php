<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>{{ isset($pageTitle) ? $pageTitle.' | ': '' }}{{ config('app.name') }}</title>

  <link rel="shortcut icon" href="{{ asset("logo-icon.png") }}" type="image/x-icon">
  <link rel="icon" href="{{ asset("logo-icon.png") }}" type="image/x-icon">
  <!--- End favicon-->

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Public+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
  <!-- End google font  -->

  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Code Editor  -->
<style>
  body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
  }
  
  footer {
      min-height: 10vh;
      display: flex;
      flex-direction: column;
  }

  .nav-link{
    padding-left: 0.1rem !important;
    padding-right: 0.1rem !important;
  }

  .navbar-nav {
    list-style: none !important;
  }

  button#input-submit, a#input-submit {
    margin-top: 16px;
  }

  @media (max-width: 767px) {
    button#input-submit, a#input-submit {
      margin-top: 0;
    }
  }

  button#input-submit{
    width: 196px;
    height: 55px;
    left: 182px;
    top: 4119px;
    border-radius: 10px;
    font-weight: 700;
    font-size: 16px;
    transition: all 0.4s;
    background-color: #FFC947;
    padding: 14px;
  }

  a#input-submit {
    width: 196px;
    height: 55px;
    left: 182px;
    top: 4119px;
    border-radius: 10px;
    font-weight: 700;
    font-size: 16px;
    transition: all 0.4s;
    background-color: #2bcbf3;
    padding: 14px;

  }

  button#input-submit:hover, a#input-submit:hover {
    color: #ffffff;
    background-color: #0f2031;
  }

  .point-page {
    min-height: 285px;
    margin: 80px 0;
  }

</style>
  @stack('head')
</head>

<body class="light">  

  <div class="row">

      <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #ffffff">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <a class="navbar-brand" href="#"><img src="https://www.capitallife.co.id/asset/img/capitallife-logo.png" class="img-fluid" style="width: 115px; height: auto; position:relative"></a>

              </div>
              <div class="col-md-6" style="text-align:center; padding: 5px;">

                <h3 style="text-align: left; padding: 5px">{{ isset($pageTitle) ? $pageTitle : 'Welcome' }}</h3>

              </div>

            </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

          </div>
        </div>
      </nav>

  </div>

  <div class="col-md-12">
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #0f2031">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          @include('front-end.inc.navbar-menu')

        </div>
      </div>
    </nav>
  </div>

  @yield('content')
  
  <footer class="mt-auto" style="background-color: #0f2031">
    <div class="container-fluid">
        <div class="row">

            <h1 style="text-align: center; color: white;">Footer</h1>

    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  @stack('foot')

</body>
</html>
