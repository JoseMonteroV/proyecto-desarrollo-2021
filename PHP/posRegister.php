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

    $username= $database->select("tb_users","*",[
        "user_name"=> $_POST["username"]
    ]);


    if($_POST["username"] == $username[0]["user_name"]){

        echo "<p class='main-title form-container'>Nombre de usuario ya ha sido Registrado</p>";
        echo "<a class='hiperlinks2' href='./formRegistro.php'>Intentarlo de Nuevo</a>";

    }else{

        $pass= password_hash($_POST["password"], PASSWORD_DEFAULT);
        $database-> insert("tb_users", [

            "user_firstname"=> $_POST["nombre"],
            "user_lastname"=> $_POST["apellido"],
            "user_email"=> $_POST["email"],
            "user_name"=> $_POST["username"],
            "user_password"=> $pass,
            "user_added_at"=>$date
        ]);
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="./css/forms.css">
</html>

