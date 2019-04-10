<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href= {{ URL::asset('css/extra.css')  }} >
    <link rel="stylesheet" href= {{ URL::asset('css/MDB/mdb.css')  }} >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>

<body>
    <!--Main Navigation-->
<header>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark navtop fixed-top">
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">TECFLIX</a>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="navbar-nav text-right">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href= {{ Route('home') }}>Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href={{ Route('filmes') }}>Filmes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href={{ Route('series') }}>Séries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href={{ Route('desenhos') }}>Desenhos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href={{ Route('sobre') }}>Sobre nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href=></a>
        </li>
        <!-- Dropdown -->
      </ul>

    <ul class="navbar-nav text-right">
        <li class="nav-item">
          <button id="log" type="button" class="btn btn-dark btn-sm nav-link js-scroll-trigger" href= {{ Route('logout') }}>Logout</button>
        </li>
    </ul>
  </div>
</nav>
<!--Navbar-->
@yield('header')

</header>
@yield('conteudo')
<br><br>
<!-- Footer -->
<footer class="page-footer font-small black pt-4">
<div class="container">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">TECFLIX</h5>
          <p>Seu lugar preferido para ler sobre filmes e séries!</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">PERSIGA-NOS!</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Twitter</a>
              </li>
              <li>
                <a href="#!">Facebook</a>
              </li>
              <li>
                <a href="#!">Instagram</a>
              </li>
              <li>
                <a href="#!">Orkut</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center dark py-3">© 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> TECFLIX</a>
    </div>
    <!-- Copyright -->
</div>
  </footer>
  <!-- Footer -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src={{ URL::asset('js/MDB/mdb.js')  }}></script>
<script src= {{ URL::asset('js/extra.js')  }}></script>
</body>
</html>