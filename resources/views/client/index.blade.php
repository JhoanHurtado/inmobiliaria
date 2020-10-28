<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="milton andres">
    <meta name="description" content="web.">
    <!-- icono pesteña de la pagina web -->
    <link rel="icon" href="{{ asset('/assets/assets/img/logo8.jpg') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/assets/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('/assets/assets/css/styles.css') }}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/assets/img/favicon.png') }}" />

    <title>Tu esta aqui</title>
</head>

<body>
    <!-- barra la navegacion -->
    <nav class="navbar navbar-expand-lg fixed-top animate__animated wow animate__fadeIn data-wow-duration=" 1s" data-wow-delay="1s"">
        <div class=" container">
        <!-- logotipo-->
        <img src="{{ asset('/assets/assets/img/logo8.jpg') }}" class="logo-brand" alt="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{ asset('/assets/assets/img/menu.svg') }}">
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#hero">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Servicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>


    <section id="hero">
        <!-- session fondo buenaventura + titulos inicial -->
        <duv class="container"><br><br><br><br><br><br>
            <div class="content-center">
                <h1 class="animate__animated animate__backInLeft">Encuetra La Casa De Tu Sueños</h1>
                <p class="animate__animated animate__backInLeft">Conozca nuestra variedad de apartamentos Arriendo y Ventas</p>
            </div>
        </duv>
    </section>




    <section id="portfolio">
        <div class="container-fluid">
            <div class="content-center">
                <h2 class=" animate__animated wow animate__bounceInLeft">TU HOGAR ESTA AQUI <B>INMOBILIARIA</B></h2>
                <p class="animate__animated  wow animate__bounceInRight ">Establecemos relaciones de confianza para arrendar o vender su inmueble con el mejor trato...</p>

            </div>
            <div class="container">
                <!-- centrar el contenido -->

                <div class="row">
                    @foreach ($inmuebles as $inmueble)

                    <div class="col-md-6  animate__animated wow animate__fadeIn data-wow-duration=" 1s" data-wow-delay="0.3s" ">
                    <div class=" portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>{{$inmueble->nombre}}</h2>
                            </a>
                            <a href="#">
                                <p>— {{$inmueble->direccion}}</p>
                            </a>
                        </div>
                        <img src="{{ asset('/assets/storage/img/'.$inmueble->imagen)}}" style="height: 450px;" class="img-fluid" alt="Portfolio 01">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="contenido">
                <p style="font-size: 16px; text-align: center;"> <a href="/portafolio"> Ver todos los inmuebles </a></p>
            </div>
        </div>

        </div>
    </section>

    <section id="team" class="bgLightGrey">
        <div class="container">
            <div class="content-center">
                <h2 class="animate__animated wow animate__fadeIn data-wow-duration=" 1s" data-wow-delay="0.9s"">TU HOGAR ESTA AQUI <b>INMOBILIARIA</b></h2>
                <p class=" animate__animated wow animate__fadeIn data-wow-duration="1s" data-wow-delay="1s"">Tu hogar esta aquí.com es una página web esencial para  que los habitantes del municipio de buenaventura adquieran una nueva vivienda de una manera fácil y rápida, ya que no cuentan con un medio que les  facilite el proceso de búsqueda y no es factible que los habitantes recorran el municipio para encontrar una nueva vivienda y al encontrarla no cuente con los requisitos deseados, y a lo largo del tiempo se podrán mantener fiables, rápida y precisa la manera de encontrar una vivienda, Asegurándonos  que la persona que van a utilizar Tu hogar está aquí. Con  queden satisfecho con la eficacia de nuestro servicio publicitario.</p>
            </div>
            <div class=" row">

                    <div class="container-fluid">
                        <h1 class="text-center mb-3 animate__animated wow animate__fadeIn data-wow-duration=" 1s" data-wow-delay="1s"">Nuestro servicios</h1>
                    <div id=" myCarousel" class="carousel slide animate__animated wow animate__fadeIn data-wow-duration=" 1s" data-wow-delay="1.5s"" data-ride=" carousel">
                            <div class="carousel-inner row w-100 mx-auto">
                                <div class="carousel-item col-md-4 active">
                                    <div class="card">
                                        <!-- inicio  carrusel de tarjetas -->
                                        <div class="contenedor ">
                                            <img class="card-img-top img-fluid" src="{{ asset('/assets/assets/img/galeria/hotel-yubarta.jpg') }}" style="height: 350px;" alt="Card image cap">
                                            <div class="texto-encima">$530.000</div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Hotel Yubarta</h4>
                                            <p class="card-text">alquiler apartamento</p>
                                            <p class="card-text"><small class="text-muted"> 368m² · 9 Recámaras · 1 Estacionamientos</small></p>
                                        </div>
                                    </div>
                                </div>



                                <div class="carousel-item col-md-4">
                                    <div class="card">
                                        <div class="contenedor">
                                            <img class="card-img-top img-fluid" src="{{ asset('/assets/assets/img/galeria/casa2.jpg') }}" style="height: 350px;" alt="Card image cap">
                                            <div class="texto-encima">$900.000</div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Casa en las palmas</h4>
                                            <p class="card-text">alquiler de casa.</p>
                                            <p class="card-text"><small class="text-muted"> 368m² · 9 Recámaras · 1 Estacionamientos</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-4">
                                    <div class="card">
                                        <div class="contenedor">
                                            <img class="card-img-top img-fluid" src="{{ asset('/assets/assets/img/galeria/COSMO3.jpg') }}" style="height: 350px;" alt="Card image cap">
                                            <div class="texto-encima">$760.000</div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Hotel cosmo</h4>
                                            <p class="card-text">alquiler de apartamento.</p>
                                            <p class="card-text"><small class="text-muted"> 368m² · 9 Recámaras · 1 Estacionamientos</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-4">
                                    <div class="card">
                                        <div class="contenedor">
                                            <img class="card-img-top img-fluid" src="{{ asset('/assets/assets/img/galeria/casa4.jpg') }}" style="height: 350px;" alt="Card image cap">
                                            <div class="texto-encima">$900.000</div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Casa en las olivos</h4>
                                            <p class="card-text">alquiler de casa.</p>
                                            <p class="card-text"><small class="text-muted"> 368m² · 9 Recámaras · 1 Estacionamientos</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-4">
                                    <div class="card">
                                        <div class="contenedor">
                                            <img class="card-img-top img-fluid" src="{{ asset('/assets/assets/img/galeria/casa2.jpg') }}" style="height: 350px;" alt="Card image cap">
                                            <div class="texto-encima">$900.000</div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Casa en las palmas</h4>
                                            <p class="card-text">alquiler de casa.</p>
                                            <p class="card-text"><small class="text-muted"> 368m² · 9 Recámaras · 1 Estacionamientos</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-4">
                                    <div class="card">
                                        <div class="contenedor">
                                            <img class="card-img-top img-fluid" src="{{ asset('/assets/assets/img/galeria/casa2.jpg') }}" style="height: 350px;" alt="Card image cap">
                                            <div class="texto-encima">$900.000</div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Casa en las palmas</h4>
                                            <p class="card-text">alquiler de casa.</p>
                                            <p class="card-text"><small class="text-muted"> 368m² · 9 Recámaras · 1 Estacionamientos</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-4">
                                    <div class="card">
                                        <div class="contenedor">
                                            <img class="card-img-top img-fluid" src="{{ asset('/assets/assets/img/galeria/casa2.jpg') }}" style="height: 350px;" alt="Card image cap">
                                            <div class="texto-encima">$900.000</div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Casa en las palmas</h4>
                                            <p class="card-text">alquiler de casa.</p>
                                            <p class="card-text"><small class="text-muted"> 368m² · 9 Recámaras · 1 Estacionamientos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                    </div>
            </div> <!-- fin del carrusel de tarjetas -->







        </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h3>Contáctenos</h3>
            <div class="row">
                <div class="col-md-6 mt-4">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15922.650857425651!2d-77.06637058226318!3d3.8822875736298785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1595793854574!5m2!1ses-419!2sco" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
                <div class="col-md-6 mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="segundo nombre">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="nombre de la compañia">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" id="" placeholder="Phone number (optional)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="btn btn-primary full-width">ENVIAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bgDark">
        <div class="container">
            <img src="{{ asset('/assetsassets/img/logo8.jpg') }}" class="logo-brand" alt="logo">
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="#">INICIO</a></li>
                <li class="list-inline-item footer-menu"><a href="#">PORTAFILIO</a></li>
                <li class="list-inline-item footer-menu"><a href="#">NOSOTROS</a></li>
                <li class="list-inline-item footer-menu"><a href="#">SERVICIO</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Contact</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><img src="{{ asset('/assets/assets/img/instagram.svg') }}" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('/assets/assets/img/twitter.svg') }}" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('/assets/assets/img/youtube.svg') }}" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('/assets/assets/img/dribbble.svg') }}" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('/assets/assets/img/facebook.svg') }}" class="img-fluid"></a></li>
            </ul>
            <small>©2020 MILTO ANDRES ANGULO<a href="https://themesbootstrap.com.mx/" class="font-weight-bold" target="_blank" rel="noopener">DESARROLLO</a></small>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/assets/assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('/assets/assets/js/app.js') }}"></script>
    <script src="{{ asset('/assets/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
