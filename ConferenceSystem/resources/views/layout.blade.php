<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Conference</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/framework.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</head>
<body>
<div class="preload"></div>
<header class="space-inter">
    <div class="container container-flex space-between">
        <figure class="logo"><img src="img/logo1.jpg" alt=""></figure>
        <nav class="custom-wrapper" id="menu">
            <div class="pure-menu"></div>
            <ul class="container-flex list-unstyled">
                <li><a href="/" class="text-uppercase">Inicio</a></li><!--Home-->
                <li><a href="about" class="text-uppercase">Nosotros</a></li><!--About-->
                <li><a href="speaker" class="text-uppercase">Expositores</a></li><!--Archive-->
                <li><a href="news" class="text-uppercase">Noticias</a></li><!--Contact-->
            </ul>
        </nav>
    </div>
</header>

<!--contenido-->
@yield('content')

<section class="footer">
    <footer>
        <div class="container">

            <section class="pages container">
                <div class="page page-contact">
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
                                <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="send-message">
                                <a href="#" class="text-uppercase c-green">enviar</a>
                            </div>
                        </form>
                    </div>

                </div>
            </section>

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
</section>

</body>
</html>