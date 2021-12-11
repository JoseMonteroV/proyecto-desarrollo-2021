<?php    
    namespace Medoo;   //Esto se va utilizar que es medoo
    require 'Medoo.php';//Lo vinculamos con Medoo

    $database = new Medoo([  ///Realiza la conectcion
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'proyecto_bd',
        'username' => 'root',
        'password' => '',
    ]);


    if($_GET){
        $selected_user= $database->select("tb_users","*",[
            "id_user"=>$_GET["id"]


        ]);
    }

    if($_POST){ //LO QUE PASA SI SE EDITA 
        $database->update("tb_users", [ ///Que es lo que se quiere editar
            "user_firstname"=> $_POST["nombre"],
            "user_lastname"=> $_POST["apellido"],
            "user_email"=> $_POST["email"]
        ],[
            "id_user"=>$_POST["iduser"]  
        ]);

        header("location:admin.php");  //Una vez que se ejecute el update se lleva al respons.php ya editado

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
    
    <title>Usuarios</title>
</head>
<body>
       <h1 class="main-title">Editar Usuario</h1>
        <!--INICIO FORMULARIO-->
        <form action="edit_user.php" method="post">

            <section class="form-container">

                <input id="nombre" class="form-inputs" type="text" name="nombre" value="<?php echo $selected_user[0]["user_firstname"]?>"
                    placeholder="Ingrese su nombre">

                <input id="apellido" class="form-inputs" type="text" name="apellido"
                    placeholder="Ingrese sus apellidos">

                <input id="username" class="form-inputs" type="text" name="username"
                    placeholder="Ingrese su nombre de usuario">

                <input type="hidden" name="iduser" value="<?php echo $selected_user[0]["id_user"]?>">
                <button class="buttom" type="submit" value="Registrarse">Terminar Editado</button>
                
            </section>
        </form>
        <!--FIN FORMULARIO-->


</body>
</html>