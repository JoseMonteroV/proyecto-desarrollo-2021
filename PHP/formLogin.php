

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio de Session</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/forms.css"">
</head>

<body>
    <div class="form-container">
        <h1 class="main-title">Inicia sesión</h1>
        <form action="posLogin.php" method="post">

            <input id="username" class="form-inputs" type="text" name="username"
                placeholder="Ingrese su nombre de usuario">

            <input id="password" class="form-inputs" type="password" name="password"
                placeholder="Ingrese su contraseña">
                
            <button class="buttom" type="submit" value="Iniciar sesión">Iniciar sesión</button>
        </form>
        <div>
            <p><a href="./formRecuperacion.php">¿Olvidaste tu contraseña?</a></p>
        </div>
    </div>
   
</body>

</html>