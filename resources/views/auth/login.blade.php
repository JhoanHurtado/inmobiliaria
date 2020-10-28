<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Casas Verdes</title>
    <link href="{{ asset("assets/css/styles.css") }} " rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Casas Verdes</h3>
                                    <center>Inicio de session</center>
                                </div>
                                <div class="card-body">
                                    <form action="{{ url('/login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4 @error('email') is-invalid @enderror"
                                                id="inputEmailAddress" type="email" name="email" placeholder="USUARIO" />

                                            @error('email')
                                            <h5 class="text-danger">{{ $message }}</h5>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4 @error('password') is-invalid @enderror"
                                                id="inputPassword" name="password" type="password" placeholder="CONTRASEÑA" />

                                            @error('password')
                                            <h5 class="text-danger"> {{ $message }}</h5>
                                            @enderror
                                        </div>
                                        <div
                                            class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

                                            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; milton 2020</div>
                        <div>
                            <a href="#">politicas</a>
                            &middot;
                            <a href="#">Terms &amp; condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>
