<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormRecuperarContraseña</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/forms.css">
</head>

<body>
    <div class="form-container">
        <h1 class="main-title">Recuperar Contraseña</h1>
        <form action="recuperarContra.php" method="post">
            <input id="email" class="form-inputs" type="email" name="email" placeholder="Ingrese su correo electrónico">
            <button class="buttom" type="submit" value="Enviar contraseña" name="btnEnviar">Enviar contraseña</button>
        </form>
    </div>

</body>

</html>