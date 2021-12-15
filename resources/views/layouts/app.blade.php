<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>SUBICI</title>
    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @if (Auth::check())
            <a class="navbar-brand" href="#"><img style="width:48px; height:48px; border-radius:25px; margin-right:5px"
                    src="{{ Storage::disk('public')->url(Auth::user()->foto ? Auth::user()->foto : 'images/usuarios/default.png') }}"
                    alt="">{{ Auth::user()->nombre_usuario }}</a>

        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if (Auth::check())
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="{{ route('indexBicicletas') }}">Home</a>
                    <a class="nav-link" href="{{ route('indexBicicletas') }}">Bicicletas</a>
                    <a class="nav-link" href="{{ route('indexUsuarios') }}">Usuarios</a>
                    <a class="nav-link" href="{{ route('indexVentas') }}">Ventas</a>
                </div>
            </div>
            @livewire('login.logout')

        @endif

    </nav>

    <div class="container mt-4">
        {{ $slot }}
    </div>



    <script src="https://kit.fontawesome.com/dade78913b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    @livewireScripts

    <script>
        livewire.on('error_datos', message => {
                Swal.fire({
                    icon: 'error',
                    title: 'Ocurrio un problema!',
                    text: message
                });
            }

        );
        livewire.on('proximamente', message => {
            Swal.fire({
                title: '<strong>PROXIMAMENTE!</strong>',
                icon: 'info',
                showCloseButton: true

            })
        });
        livewire.on('exito-venta', message => {
            Swal.fire({
                icon: 'success',
                title: message,
                showConfirmButton: false,
                timer: 1500
            })
        });
    </script>
</body>

</html>
