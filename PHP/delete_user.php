<?php
    namespace Medoo;
    require 'Medoo.php';

    $database = new Medoo([
        // [required]
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'proyecto_bd',
        'username' => 'root',
        'password' => ''
    ]);

    if($_GET){
        $selected_user = $database->select("tb_users", "*", [
            "id_user" => $_GET["id"]
        ]);
    }

    if($_POST){

       $database->delete("tb_users",[
        "id_user" => $_POST["iduser"]
       ]);
        
       header("location:admin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/forms.css">
    <title>Forms</title>
</head>
<body>
    <div class="container" role="main">
        <h1 class="main-title">Eliminar Usuario</h1>
        <form action="delete_user.php" method="post">
            
            <section class= "form-container">
                <p class="subtitles">Eliminar este usuario: <?php echo $selected_user[0]["user_firstname"]." ".$selected_user[0]["user_lastname"] ?></p>
            
                <input class="form-submit" type="button" onclick="history.back();" value="CANCEL">
                <input class="form-submit" type="submit" value="DELETE">
                <input type="hidden" name="iduser" value="<?php echo $selected_user[0]["id_user"] ?>">
            </section>
        </form>
    </div>

</body>
</html>