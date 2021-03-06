<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url('clients')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('patients')}}">Patient file<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{url('vaccinewallets')}}" >Vaccines Wallets</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('vaccines')}}">Vaccines</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('breeds')}}">Breeds</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('animals')}}">Animals</a>
              </li>

            </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>

      </nav>

      <div class="container my-5">
          @yield('page')
      </div>

      <script src="{{url("assets/js/javascript.js")}}"></script>

</body>
</html>
