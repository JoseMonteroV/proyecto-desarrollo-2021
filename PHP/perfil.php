<?php
namespace Medoo;
require 'Medoo.php';

$database = new Medoo([
    'type'=> 'mysql',
    'host'=> 'localhost',
    'database'=> 'proyecto_bd',
    'username'=> 'root',
    'password'=> ''
]);

$categories= $database-> select("tb_place_category", "*");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section class="container-profile">
        <header class="top-section-profile">
            <section class="inner-grid-profile">
                <nav class="top-menu-profile">
                    <a class="logo-profile" href="#">View Travel's</a>
                    <nav class="top-menu-profile-1">
                        <p class="name-user">Nombre de usuario</p>
                        <a class="icon" href="#">
                            <i class="fas fa-user-circle"></i>
                        </a>
                    </nav>

                </nav>
            </section>
        </header>
        <section class="inner-grid-profile">
            <!--Seccion Lugares visitados-->
            <section>
                <div>
                    <h1 class="title-profile">Mis lugares visitados</span></h1>
                </div>

                <?php
                    for ($galletas = 0; $galletas < 10; $galletas++){       
                        echo "$galletas, ";
                    }
                ?>

                <ul class="publications">                    

                    <div class="details">
                        <img class="details-img" src="./imgs/puerto-viejo.png" alt="Puerto Viejo">
                        <div class="inner-grid-profile ">
                            <h5 class="tittle-publication">Puerto Viejo</h5>
                            <p class="description">Fecha de publicación</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui fuga
                                consequatur
                            </p>
                            <p class="description">Categoría</p>
                            <p class="description">Cantidad de votos</p>
                        </div>
                    </div>

                </ul>

                <?php 
                    for($i=0; $i <= 5; $i++){
                        echo "El número vale:" . $i . "<br/>";

                        // echo "<ul class='publications'>"                  

                        // echo "<div class='details'>"
                        //echo "<div> <img class='details-img' src='./imgs/puerto-viejo.png' alt='Puerto Viejo'> <div>"
                        //echo "<div> <img src='./uploads/".$data[$i]["place_main_image"]."' alt'".$data[$i]["place_main_image"]."'></div>";//IMAGEN
                        
                        // echo "<div class='inner-grid-profile'>"
                        // echo "<h5 class='tittle-publication'>Puerto Viejo</h5>"
                        // echo "<p class='description'>Fecha de publicación</p>"
                        // echo "<p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui fuga consequatur"
                        // echo "</p>"
                        //echo " <p class='description'>Categoría</p>"
                        // echo " <p class='description'>Cantidad de votos</p>"
                        // echo "</div>"
                        // echo "</div>"

                        // echo "</ul>"
                    }
                ?>

                <table>
                    <?php 
                        for($i=0; $i < 300; $i++){
                            echo "<tr><td>".hola."</td><td>".sol."</td><td>".prueba."</td></tr>";
                        }
                    ?>
                </table>

            </section>
            <!--Fin Seccion Lugares visitados-->

            <!--Footer-->
            <footer>
                <a class="btn-add-place" href="./formLugares.php">Agregar nuevo lugar</a>
            </footer>
            <!--Footer-->
        </section>
    </section>
</body>

</html>