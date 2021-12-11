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


?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <section>
    <h2>Usuarios Registrados</h2>

    <table>
    <tr>
        <td>Nombre</td>   <!--Columnas de la vista -->
        <td>Apellidos</td>
   </tr>
     
    <?php

     $data = $database->select("tb_users", "*");  //SELECT DE MOODE de todos los usuarios

     
     for($i=0; $i<count($data); $i++){
       
         echo "<tr>"; //Responde a las columnas que se establecieron arriba 

         echo "<td>".$data[$i]["user_firstname"]."</td>";
         echo "<td>".$data[$i]["user_lastname"]."</td>"; //En linea
         echo "<td><a href='edit_user.php?id=".$data[$i]["id_user"]."'>Editar</a>  <a href='delete_user.php?id=".$data[$i]["id_user"]."'>Borrar</a></td>"; //Lo que va recibir cada edit y lo coloca en un formulario 

         echo "</tr>";
     }

    ?>

    </table>
    </section>

    <section>

        <h2>Lugares Registrados</h2>
    <table>
    <tr>
        <td>Titulo</td>   <!--Columnas de la vista -->
        <td>Descripcion</td>
   </tr>
     
    <?php

     $data = $database->select("tb_places", "*");  //SELECT DE MOODE de todos los usuarios

     
     for($i=0; $i<count($data); $i++){
       
         echo "<tr>"; //Responde a las columnas que se establecieron arriba 

         echo "<td>".$data[$i]["place_title"]."</td>";
         echo "<td>".$data[$i]["place_description"]."</td>"; //En linea
         echo "<td><a href='edit_place.php?id=".$data[$i]["id_user"]."'>Editar</a>  <a href='delete_place.php?id=".$data[$i]["id_user"]."'>Borrar</a></td>"; //Lo que va recibir cada edit y lo coloca en un formulario 

         echo "</tr>";
     }

    ?>

    </table>
    </section>

</body>
</html>