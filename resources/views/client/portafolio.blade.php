<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="milton andres">
    <meta name="description" content="web.">
    <!-- icono pesteña de la pagina web -->
    <link rel="icon" href="{{asset('/assets/assets/img/logo8.jpg')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/styles2.css')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/assets/img/favicon.png')}}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tu esta aqui</title>
</head>

<body>
    <!-- barra la navegacion -->
    <nav class="navbar navbar-expand-lg fixed-top animate__animated wow animate__fadeIn data-wow-duration=" 1s" data-wow-delay="1s"">
        <div class=" container">
        <!-- logotipo-->
        <img src="{{asset('/assets/assets/img/logo8.jpg')}}" class="logo-brand" alt="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{asset('/assets/assets/img/menu.svg')}}">
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#portfolio">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#team">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#pricing">Servicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <section id="hero" style="padding-bottom: -1200px;">
        <!-- session fondo buenaventura + titulos inicial -->
        <duv class="container"><br><br><br><br><br><br>
            <div class="content-center">

                <h1 class="animate__animated animate__backInLeft">Encuetra La Casa De Tu Sueños</h1>
                <div id="fondo" class=" shadow-lg p-2  rounded" style=" box-shadow: -3px 2px 30px -10px rgba(0,0,0,0.47); ">
                    <!-- centrar el contenido          <div class="container h-100">
                          <div class="row justify-content-center h-100">

                          <div class="col-md-6">
                          <input type="text" class="form-control" placeholder="Buscar Apartamento o oficina" >
                          </div>
                          <div style="margin-top: 10px;">
                         <img src="/web/assets/icons/search.svg" alt="" width="32" height="32" title="Bootstrap">
                      </div>

                      </div>  </div>-->
                    <!-- <div class="row " style="min-height: 83px;">

                        <div class=" col-md-4">
                            <label for="inputState"> </label>
                            <select id="inputState" class="col-md-12 cajas">
                                <option selected> Buenaventura</option>
                                <option selected>cali</option>
                                <option selected>Ciudad</option>
                                <option>...</option>
                            </select>

                        </div>
                        <div class=" col-md-4">
                            <label for="inputState"> </label>
                            <select id="inputState" class="col-md-12  bg-light cajas">
                                <option selected>Casa</option>
                                <option selected>Apartamento</option>
                                <option selected>Tipo</option>
                                <option>...</option>
                            </select>
                        </div> -->
                        <center>
                    <form action="{{ url('portafolio/find') }}" method="GET" >
                        <div  class=" col-md-4">
                            <label for="nombre"> Encuentra tu  Inmueble </label>
                            <input type="text" class="form-control" id="nombre" placeholder="Buscar  apartamento..." name="nombre">
                        </div> <br>
                        <input type="submit" value="Buscar">
                    </form>
                    </center>
                </div>

                </p>
            </div>
            </div>
        </duv>
    </section>

    <!-- Portafolio -->

    <section id="portfolio">
        <div class="container-fluid">
            <div class="content-center">

                <h2 class=" animate__animated wow animate__bounceInLeft">Portafolio </h2>
                <p class="animate__animated  wow animate__bounceInRight ">



            </div>
            <div class="container">
                <!-- centrar el contenido -->
                <div class="row">

                    @if (sizeof($inmuebles)>0)
                    @foreach ($inmuebles as $inmueble)

                    <div class="card" style="">
                        <div class="row no-gutters">
                            <div class="col-sm-6" style="padding: 10px;">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('/assets/storage/img/'.$inmueble->imagen)}}" class="card-img-top h-100" style="padding: 10px;" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('/assets/storage/img/'.$inmueble->image2)}}" class="card-img-top h-100" style="padding: 10px;" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('/assets/storage/img/'.$inmueble->image3)}}" class="card-img-top h-100" style="padding: 10px;" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!--      <img src="assets/img/galeria/sala.jpg" class="card-img-top h-100" style="padding: 10px;" alt="...">
                            -->
                            </div>
                            <div class="col-sm-6">
                                <div class="card-body" style="margin-bottom: -21px;">
                                    <h5 class="card-title">{{$inmueble->nombre}} </h5>
                                    <p lass="card-text" style="font-size:16px">{{$inmueble->ciudad}} - {{$inmueble->direccion}}</p>
                                    <ul>
                                        <li>
                                            <p class="card-text" style="font-size:18px"><img src="{{asset('/assets/assets/ico/kitchen.png')}}" height="18px" alt=""> $ {{$inmueble->precio}} </p>
                                        </li>
                                        <li>
                                            <p class="card-text" style="font-size:18px"><img src="{{asset('/assets/assets/ico/baño.png')}}" height="22px" alt=""> {{$inmueble->banos}} baños</p>
                                        </li>
                                        <li>
                                            <p class="card-text" style="font-size:18px"><img src="{{asset('/assets/assets/ico/bed.png')}}" alt="" height="23px"> {{$inmueble->habitaciones}} habitaciones</p>
                                        </li>
                                        <li>
                                            <p class="card-text" style="font-size:18px"><img src="{{asset('/assets/assets/ico/parking.png')}}" height="20px" alt=""> {{$inmueble->inmobiliaria->correo}}</p>
                                        </li>
                                        <li>
                                            <p class="card-text" style="font-size:18px"> <img src="assets/ico/area.png" height="20px" alt=""> {{$inmueble->area}} Cm2</p>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-sm-12">
                                    <div class="float-right" style="margin-bottom: 10px;">
                                        <p style="font-size:18px">Contacte a nuestro asesor</p>
                                        <p style="font-size:16px; text-align: right;"> {{$inmueble->inmobiliaria->cliente->usuario->nombre}}</p>
                                        <p style="font-size:16px; text-align: right;">
                                            <img src="assets/img/LOGO/Whatsapp.png" height="28px" alt=""> {{$inmueble->inmobiliaria->cliente->telefono}}</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="espacio"></div>
                    @endforeach
                    @else
                    <div class="col-sm-12">
                        <div class="content-center">
                            <h2 class=" animate__animated wow animate__bounceInLeft">No hayresultados, por favor intente mas tarde</h2>
                            <p class="animate__animated  wow animate__bounceInRight ">
                        </div>
                    </div>
                    @endif
                    <div class="espacio"></div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Atras</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
    </section>

    <footer class="bgDark">
        <div class="container">
            <img src="{{asset('/assets/assets/img/logo8.jpg')}}" class="logo-brand" alt="logo">
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="#">INICIO</a></li>
                <li class="list-inline-item footer-menu"><a href="#">PORTAFILIO</a></li>
                <li class="list-inline-item footer-menu"><a href="#">NOSOTROS</a></li>
                <li class="list-inline-item footer-menu"><a href="#">SERVICIO</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Contact</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><img src="{{asset('/assets/assets/img/instagram.svg')}}" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{asset('/assets/assets/img/twitter.svg')}}" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{asset('/assets/assets/img/youtube.svg')}}" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{asset('/assets/assets/img/dribbble.svg')}}" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{asset('/assets/assets/img/facebook.svg')}}" class="img-fluid"></a></li>
            </ul>
            <small>©2020 MILTO ANDRES ANGULO<a href="https://themesbootstrap.com.mx/" class="font-weight-bold" target="_blank" rel="noopener">DESARROLLO</a></small>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
        $('.carousel').carousel({
            interval: 200
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="{{asset('/assets/assets/js/app.js')}}"></script>
    <script src="{{asset('/assets/assets/js/jquery.js')}}"></script>
    <script src="{{asset('/assets/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('/assets/assets/js/bootstrap.min.js')}}"></script>
</body>

</html>
