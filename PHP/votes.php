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

    session_start();

    if(isset($_SESSION["active"])){ //validaciones para votar
        
    
        if(isset($_SERVER["CONTENT_TYPE"])){// SI EL TIPO DE CONTENIDO CORRESPONDE AL FORMATO 

           $contentType= $_SERVER["CONTENT_TYPE"];
           
            if($contentType === "application/json"){
                $content= trim(file_get_contents("php://input"));
                $decode= jason_decode($content, true);
                $database= insert-> ("tb_user_likes_place",
                [
                    "id_user"=> $_SESSION["id"],
                    "id_places"=> $decode["place"]


                ]);
                echo json_encode(200);
            }
        }
    } else{
       echo json_encode(401);
    }


?>