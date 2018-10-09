<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Conference</title>
    <!--<link rel="stylesheet" href="css/normalize.css">-->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/framework.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <!--añadido-->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="css/superslides.css">
    <link rel="stylesheet" href="css/prueba.css">

</head>
<body>
<div class="preload"></div>
<header class="space-inter">
    <div class="container container-flex space-between">
        <figure class="logo"><img src="img/logo1.png" alt=""></figure>
        <nav class="custom-wrapper" id="menu">
            <div class="pure-menu"></div>
            <ul class="container-flex list-unstyled">
                <li><a href="/" class="text-uppercase">Inicio</a></li><!--Home-->
                <li><a href="about" class="text-uppercase">Nosotros</a></li><!--About-->
                <li><a href="speaker" class="text-uppercase">Expositores</a></li><!--Archive-->
                <li><a href="news" class="text-uppercase">Noticias</a></li><!--Contact-->
                    @auth('web')
                            <li class="text-uppercase">
                                <a href="home" >
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                                <li class="text-uppercase">
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                    @else
                        @auth('admin')
                            <li class="text-uppercase">
                                <a href="home" >
                                {{ Auth::guard('admin')->user()->name }}
                                </a>
                            </li>
                                <li class="text-uppercase">
                                    <a href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                        @else
                            <li class="text-uppercase">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>

                            </li>
                            <li class="text-uppercase">
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endauth
                    @endauth
            </ul>
        </nav>
    </div>
</header>

<!--contenido-->
@yield('content')

<div class="footer">
    <footer>
        <div class="container">

            <div class="pages container">
                <div class="page page-contact" style="padding-top:0; padding-bottom:0">
                    <div class="form-contact">
                        <form action="#">
                            <div class="input-container container-flex space-between">
                                <input type="text" placeholder="Nombre" class="input-name">
                                <input type="text" placeholder="Email" class="input-email">
                            </div>
                            <div class="input-container">
                                <input type="text" placeholder="Tema" class="input-subject">
                            </div>
                            <div class="input-container">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="send-message">
                                <a href="#" class="text-uppercase c-green">enviar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="divider-2"></div>
            <figure class="logo"><img src="img/logo3.png" alt=""></figure>
            <nav>
                <ul class="container-flex space-center list-unstyled">
                    <li><a href="/" class="text-uppercase c-white">Inicio</a></li>
                    <li><a href="about" class="text-uppercase c-white">Nosotros</a></li>
                    <li><a href="speaker" class="text-uppercase c-white">Expositores</a></li>
                    <li><a href="news" class="text-uppercase c-white">Noticias</a></li>
                </ul>
            </nav>
            <div class="divider-2" style="width: 80%;"></div>
            <p>La imaginación es más importante que el conocimiento <br> Albert Einstein</p>
            <p>© 2018 - Universidad Mayor de San Simon <span class="c-white">Sitio de conferencias</span></p>
            <ul class="social-media-footer list-unstyled">
                <li><a href="#" class="fb"></a></li>
                <li><a href="#" class="tw"></a></li>
                <li><a href="#" class="in"></a></li>
                <li><a href="#" class="pn"></a></li>
            </ul>
        </div>
    </footer>
</div>

</body>
</html>
