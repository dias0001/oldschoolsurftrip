<!doctype html>
<html lang="pt-BR">

<head>
  <title>Surf-trip</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <div class="d-flex justify-content-between px-5 py-2 ">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-tsunami text-warning" viewBox="0 0 16 16">
        <path d="M.036 12.314a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65zm0 2a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65zM2.662 8.08c-.456 1.063-.994 2.098-1.842 2.804a.5.5 0 0 1-.64-.768c.652-.544 1.114-1.384 1.564-2.43.14-.328.281-.68.427-1.044.302-.754.624-1.559 1.01-2.308C3.763 3.2 4.528 2.105 5.7 1.299 6.877.49 8.418 0 10.5 0c1.463 0 2.511.4 3.179 1.058.67.66.893 1.518.819 2.302-.074.771-.441 1.516-1.02 1.965a1.878 1.878 0 0 1-1.904.27c-.65.642-.907 1.679-.71 2.614C11.076 9.215 11.784 10 13 10h2.5a.5.5 0 0 1 0 1H13c-1.784 0-2.826-1.215-3.114-2.585-.232-1.1.005-2.373.758-3.284L10.5 5.06l-.777.388a.5.5 0 0 1-.447 0l-1-.5a.5.5 0 0 1 .447-.894l.777.388.776-.388a.5.5 0 0 1 .447 0l1 .5a.493.493 0 0 1 .034.018c.44.264.81.195 1.108-.036.328-.255.586-.729.637-1.27.05-.529-.1-1.076-.525-1.495-.426-.42-1.19-.77-2.477-.77-1.918 0-3.252.448-4.232 1.123C5.283 2.8 4.61 3.738 4.07 4.79c-.365.71-.655 1.433-.945 2.16-.15.376-.301.753-.463 1.13z" />
      </svg>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active text-warning" href="{{ route('praias') }}" aria-current="page">Guia das ondas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="{{ route('caronas') }}">Procurar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="{{ route('saida') }}">Oferecer carona</a>
        </li>
      </ul>
      <div class="d-flex">
        <a name="" id="" class="btn btn-warning me-5" href="#" role="button">Entrar</a>
        <p>
          <a class="btn btn-warning" type="button" href="{{ route('cadastro')}}">
            Cadastre-se
          </a>
        </p>
        <!-- <div class="collapse text-light" id="contentId">
          <p class="btn btn-outline-warning"><a href="cadastropassageiro.html"
              class="text-decoration-none text-light">carona</a></p>
          <p class="btn btn-outline-warning"><a href="cadastromotorista.html"
              class="text-decoration-none text-light">condutor</a></p>
        </div> -->
      </div>
    </div>

  </header>

  <div id="carouselExampleIndicators" class="carousel slide col-8 offset-2 mb-4" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/opacitygugu2.jpg" class="d-block w-100  rounded-pill" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5>Jamie O’Brien</h5>
          <p>“Não há uma forma correcta de surfar uma onda.”</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/opacitygugu1.jpg" class="d-block w-100 rounded-pill" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5>Mark Richards</h5>
          <p>“O estilo é uma extensão natural do que sou como pessoa.”</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/opacitygugu3.jpg" class="d-block w-100 rounded-pill" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5 class="text-dark">Gabriel Medina - Maresi</h5>
          <p>"O surf é como uma obra de arte: o mar é o papel, a prancha é o lápis e eu sou o artista."</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <main class="container-fluid fw-bold ">
    <div class="row text-center col-10 offset-1">
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="3000">
        <div class="card bg-cinza-op5 text-light rounded-0 border-0 ">
          <img class="card-img-top rounded-5" src="/img/joao3.jpge.png" alt="Title">
          <div class="card-body">
            <h4 class="card-title text-warning">Ubatuba</h4>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="3000">
        <div class="card  bg-cinza-op5 text-light rounded-0 border-0">
          <img class="card-img-top rounded-5" src="/img/joao2.png" alt="Title">
          <div class="card-body c-">
            <h4 class="card-title text-warning">São Sebastião</h4>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="3000">
        <div class="card  bg-cinza-op5 text-light rounded-0 border-0">
          <img class="card-img-top rounded-5" src="/img/joao1.png" alt="Title">
          <div class="card-body">
            <h4 class="card-title text-warning">Bertioga</h4>
          </div>
        </div>

      </div>
    </div>

    <div class="container col-10 offset-1 d-flex justify-content-evenly my-4">
      <!-- <img  class="col-md-4 m-4 float-start" alt=""> -->
      <iframe class="col-md-4 float-start rounded-4" src="https://www.google.com/maps/d/embed?mid=1zVu87ZLt2OD3vS2p6MzgKgrLWoE&hl=pt_BR&ehbc=2E312F" width="640" height="480"></iframe>
      <div class="col-6 d-flex align-items-center mx-">
        <h1 class="text-warning">OLD SCHOOL SURF TRIP apresenta uma
          maneira de surfar e dividir os custos, faça seu cadastro.</h1>
      </div>
    </div>
  </main>

  <!-- place footer here -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h6 class="text-warning text-center">SOBRE</h6>
          <p class=" text-warning text-center"><i>OLD SCHOOL SUR TRIP</i></p>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <p class="copyright-text text-center text-warning">old school surf trip &copy; 2022 - Desenvolvido por Dias0001</p>
    </div>
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>