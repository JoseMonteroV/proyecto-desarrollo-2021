<?php    
    namespace Medoo;  
    require 'Medoo.php';

    $database = new Medoo([ 
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'proyecto_bd',
        'username' => 'root',
        'password' => '',
    ]);

    \date_default_timezone_set("America/Costa_Rica");
    $date = date('Y-m-d H:i:s');


    if($_POST){
        //var_dump($_POST);
        
        $user= $database->select("tb_users","*",[

            "user_name"=>$_POST["username"]
        ]);
        

        if(count($user)>0){
            if(password_verify($_POST["password"], $user[0]["user_password"])){

               //Inicio Sesion
               session_start();

               $_SESSION["active"]=true;//Verifica si hay una sesion activa 
               $_SESSION["name"]= $user[0]["user_name"];
               $_SESSION["id"]= $user[0]["id_user"];
               header("location:index.php");


            }else{
                echo "<p class='main-title form-container'>Contraseña Incorrecta</p>";
                echo "<a class='hiperlinks2' href='./formLogin.php'>Intentarlo de Nuevo</a>";  

            }
        }else{
            echo "<p class='main-title form-container'>Usuario no Registrado</p>";
            echo "<a class='hiperlinks' href='./formRegistro.php'>Para registrarse dar clic en el hipervínculo</a>";
        }

        
    }
   
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="./css/forms.css">
</html>

