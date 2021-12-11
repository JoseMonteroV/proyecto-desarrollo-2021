<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/regular.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!--INICIO PRIMER SUPER SECTION-->
    <section class="container">
        <!--INICIO HEADER-->
        <header class="top-section">
            <!--INICIO SECTION PRIMERA PARTE PAGINA-->
            <section>
                <nav>
                    <ul class="menu-items">
                        <li class="menu-item"><a class="menu-link text-25" href="./formLogin.php">Login</a></li>
                        <li class="menu-item"><a class="menu-link text-25" href="./formLugares.php">Submit your
                                place</a></li>
                        <li class="menu-item"><a class="menu-link text-25" href="./formRegistro.php">Register</a></li>
                    </ul>
                </nav>
                <h1 class="main-title text-166">Travel's</h1>
                <h2 class="second-title text-59">View</h2>
                <p class="third-title text-30">Explore to adventure with one click</p>
                <div class="line-third-title">

                </div>
            </section>
            <!--FIN SECTION PRIMERA PARTE PAGINA-->
        </header>
        <!--FIN HEADER-->

        <!--INICIO SEGUNDO SUPER SECTION-->
        <section class="inner-grid">
            <!--INICIO ACERCA DE-->
            <section>
                <div>
                    <h3 class="title-about text-35 spacing-3">Acerca de</h3>
                    <p class="text-about text-20">Somos una página de viajes. En donde encontrarás los mejores destinos
                        turísticos <br>
                        de toda Costa Rica. Nuestro compromiso es que por medio de nuestra página logres<br> encontrar
                        tu lugar deseado para vacacionar o visitar. Somos View Travel´s.</p>
                </div>
            </section>
            <!--FIN ACERCA DE-->
            <a href="../perfil.html">Perfil</a>
            <!--INICIO GALERIA-->
            <section>
                <div>
                    <p class="text-gallery text-20 spacing-8">En nuestra galería encontrarás fotografías de los mejores
                        lugares del país
                        si quieres que tu lugar favorito sea parte de nuestra galería debes de registrarte
                        en nuestra página para que puedas comenzar a compartir tus destinos con nosotros y las
                        demás personas que visitan nuestra página.<br></p>
                </div>
                <img data-aos="flip-left" data-aos-duration="3000" class="img-gallery" src="./imgs/puerto-viejo.png" alt="Puerto Viejo">
                <a class="button-gallery spacing-3 hvr-bounce-to-right" href="./galeria.php">Go to Gallery</a>
            </section>
            <!-- FIN GALERIA-->

            <!--INICIO TOP 10-->
            <section>
                <div class="spacing-11">
                    <h3 class="text-top-10 text-50">Top 10</h3>
                    <p class=" text-top-10-description text-20">En esta sección encontrarás el top 10 de los lugares más
                        votados <br>
                        de toda nuestra galería de fotografías.</p>
                </div>
                <!-- INICIO DIV IMG TOP 10-->
                <div data-aos="fade-up" data-aos-duration="3000" class="spacing-8 grid">
                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/islaDelCoco.jpg" alt="Isla del Coco">
                        <p class="text-top-10-places text-18">Isla del Coco</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>

                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/volcanPoas.jpg" alt="Volcán Poás">
                        <p class="text-top-10-places text-18">Volcán Poás</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>

                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/manzanillo.jpg" alt="Manzanillo">
                        <p class="text-top-10-places text-18">Manzanillo</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>

                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/parqueManuelAntonio.jpg" alt="Parque Manuel Antonio">
                        <p class="text-top-10-places text-18">Parque Manuel Antonio</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>

                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/playaCostaRica.jpg" alt="Playa Costa Rica">
                        <p class="text-top-10-places text-18">Playa Costa Rica</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>

                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/rioCeleste.jpeg" alt="Río Celeste">
                        <p class="text-top-10-places text-18">Río Celeste</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>

                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/playa.jpg" alt="Playa">
                        <p class="text-top-10-places text-18">Playa</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>

                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/playaAzul.jpg" alt="Playa azul">
                        <p class="text-top-10-places text-18">Playa Azul</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>

                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/puente.jpg" alt="Puente">
                        <p class="text-top-10-places text-18">Puente</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>

                    <div class="card-shadow">
                        <img class="imgs-top-10" src="./imgs/volcanArenal.jpg" alt="Volcán Arenal">
                        <p class="text-top-10-places text-18">Volcán Arenal</p>
                        <i class="far fa-heart img-vote img-vote-media"></i>
                        <a class="button-top-10 hvr-bounce-to-right" href="#">Ver más detalles</a>
                    </div>
                </div>   
                <!--FIN DIV IMG TOP 10-->
            </section>
            <!--FIN TOP 10-->

            <!--INICIO FOOTER-->
            <footer>
                <nav>
                    <a class="text-footer text-30" href="#">View Travel´s</a>
                    <ul class="menu-items">
                        <li>
                            <a class="footer-menu-link" href="https://facebook.com" aria-label="link a facebook">
                                <i class="fab fa-facebook-square"> </i>
                            </a>
                        </li>

                        <li>
                            <a class="footer-menu-link" href="https://twitter.com" aria-label="link a twitter">
                                <i class="fab fa-twitter"> </i>
                            </a>
                        </li>

                        <li>
                            <a class="footer-menu-link" href="https://instagram.com" aria-label="link a instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </footer>
            <!--FIN FOOTER-->
        </section>
        <!--FIN SEGUNDO SUPER SECTION-->
    </section>
    <!--FIN DEL PRIMER SUPER SECTION-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>