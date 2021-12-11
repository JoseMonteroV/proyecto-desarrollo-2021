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

     \date_default_timezone_set("America/Costa_Rica");
      $date = date('Y-m-d H:i:s');

   
    
   function generarNombreArchivo($len=15){
       return substr(str_shuffle(str_repeat($x='01234546789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
       ceil($len/strlen($x)))),1,$len);
   }

   if(isset($_FILES["images"])){
       $errores=array();

       $nombre_archivo= $_FILES["images"]["name"];
       $size_archivo= $_FILES["images"]["size"];
       $tmp_archivo= $_FILES["images"]["tmp_name"];
       $tipo_archivo= $_FILES["images"]["type"];

       $ext_archivo_arr = explode(".", $_FILES["images"]["name"]);
       
       $ext_archivo=end($ext_archivo_arr);
       $img_ext=array("jpeg", "jpg", "png");
       
       if(in_array($ext_archivo, $img_ext) === false){
           $errores[]="Solamente archivos jpg, jpeg o png de formato permitdo";

       }
       if(empty($errores)){
           $img="places-imag-".generarNombreArchivo().".".$ext_archivo;
           move_uploaded_file($tmp_archivo,"uploads/".$img);

           $database->insert("tb_places",[

            "id_place_category"=>$_POST["lugar"],
            "place_title"=> $_POST["title"],
            "place_description"=>$_POST["description"],
            "place_main_image"=>$img,
            "place_right_image"=> $img,
            "place_left_image"=>$img,
            "place_pub_date"=> $date,
            "place_status"=>0 

           ]);
           
       }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/forms.css">
    <title>Document</title>
</head>

<body>
    <div class="form-container">
    <h1 class="subtitles"> Formulario Enviado Correctamente</h1>

    <a href="./index.php" class= "buttom">Volver al inicio</a>
    </div>
</body>

</html>