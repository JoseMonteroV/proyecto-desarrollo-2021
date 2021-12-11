
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormRegistro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/forms.css">
</head>

<body>
    <!--INICIO DIV PRINCIPAL-->
        <h1 class="main-title">Formulario de Registro</h1>
        <!--INICIO FORMULARIO-->
        <form action="posRegister.php" method="post">
            <section class="form-container">

                <input id="nombre" class="form-inputs" type="text" name="nombre" 
                    placeholder="Ingrese su nombre">

                <input id="apellido" class="form-inputs" type="text" name="apellido"
                    placeholder="Ingrese sus apellidos">

                <input id="email" class="form-inputs" type="email" name="email"
                    placeholder="Ingrese su correo electrónico">

                <input id="username" class="form-inputs" type="text" name="username"
                    placeholder="Ingrese su nombre de usuario">

                <input id="password" class="form-inputs" type="password" name="password"
                    placeholder="Ingrese su contraseña">

                <button class="buttom" type="submit" value="Registrarse">Registrarse</button>
                <p><a href="./formLogin.php">¿Ya tengo cuenta?</a></p>
            </section>
        </form>
        <!--FIN FORMULARIO-->

</body>

</html>