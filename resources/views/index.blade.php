<!doctype html>
<html lang="pt-BR">

<head>
    <title>Surf-trip</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/aec702f9a5.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <!-- place navbar here -->
        <div class="d-flex justify-content-between px-5 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-tsunami text-warning" viewBox="0 0 16 16">
                <path
                    d="M.036 12.314a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65zm0 2a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65zM2.662 8.08c-.456 1.063-.994 2.098-1.842 2.804a.5.5 0 0 1-.64-.768c.652-.544 1.114-1.384 1.564-2.43.14-.328.281-.68.427-1.044.302-.754.624-1.559 1.01-2.308C3.763 3.2 4.528 2.105 5.7 1.299 6.877.49 8.418 0 10.5 0c1.463 0 2.511.4 3.179 1.058.67.66.893 1.518.819 2.302-.074.771-.441 1.516-1.02 1.965a1.878 1.878 0 0 1-1.904.27c-.65.642-.907 1.679-.71 2.614C11.076 9.215 11.784 10 13 10h2.5a.5.5 0 0 1 0 1H13c-1.784 0-2.826-1.215-3.114-2.585-.232-1.1.005-2.373.758-3.284L10.5 5.06l-.777.388a.5.5 0 0 1-.447 0l-1-.5a.5.5 0 0 1 .447-.894l.777.388.776-.388a.5.5 0 0 1 .447 0l1 .5a.493.493 0 0 1 .034.018c.44.264.81.195 1.108-.036.328-.255.586-.729.637-1.27.05-.529-.1-1.076-.525-1.495-.426-.42-1.19-.77-2.477-.77-1.918 0-3.252.448-4.232 1.123C5.283 2.8 4.61 3.738 4.07 4.79c-.365.71-.655 1.433-.945 2.16-.15.376-.301.753-.463 1.13z" />
            </svg>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active text-warning" href="{{ route('praias')}}" aria-current="page"><i
                            class="fa-sharp fa-solid fa-water"></i>Guia das ondas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('procurar')}}"><i class="fas fa-search"></i>Procurar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning " href="{{ route('saida')}}"><i
                            class="fa-sharp fa-solid fa-car-side"></i>Oferecer carona</a>
                </li>
            </ul>
            <div class="d-flex">
                <a name="" id="" class="btn btn-warning me-5" href="#login" role="button">Entrar</a>
                <p>
                    <a class="btn btn-warning" type="button" href="{{ route('cadastro')}}">
                        Cadastre-se
                    </a>
                </p>
            </div>
        </div>

    </header>

    <main>
        <div class="container">
            <div class="main-banner text-warning text-center  mt-5">
                <h1>OLD SCHOOL SURF TRIP</h1>
                <p>“O melhor surfista é aquele que mais se diverte.”</p>
                <img class="col-md-4" src="/img/carroviagem.jpg" alt="">
                <p>Previsões de ondas</p>
            </div>
        </div>

        <section class="specialties-container">
            <ul class="row text-center mt-3 text-warning">
                <li class="col-4">
                    <i class=" fas1 fa-solid fa-database text-warning ms-5"></i>
                    <h3 >Viagem com preços combinado e destinos certo.</h3>
                    <p>Porém pensem no imprevisto ou aquela praia ao lado que pode estar melhor, uma reserva é sempre bom.</p>
                </li>
                <li class="col-4">
                    <i class="fas1 fa-solid fa-user text-warning ms-5"></i>
                    <h3>Confie em quem viaja com você</h3>
                    <p>Para nós, é muito importante conhecer cada um dos nossos membros e parceiros.Conferimos as avaliações, perfis e documentações, assim você sempre sabe com quem vai viajar e pode reservar sua viagem com tranquilidade e segurança na nossa plataforma.</p>
                </li>
                <li class="col-4">
                    <i class="fas1 fa-solid fa-car-side text-warning ms-5"></i>
                    <h3>Procure, clique e viaje!</h3>
                    <p>Reservar uma viagem nunca foi tão fácil! Graças à nossa tecnologia e à simplicidade do app, você reserva sua viagem em poucos minutos.</p>
                </li>
            </ul>
        </section>


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
                <p class="copyright-text text-center text-warning">old school surf trip &copy; 2022 - Desenvolvido por
                    Dias0001</p>
            </div>
        </footer>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>