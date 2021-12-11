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

    $categories= $database-> select("tb_place_category", "*");
    //var_dump($categorias);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de envio de lugares </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/forms.css">
</head>

<body>
    <section>
        <form action="add_place.php" method="post" enctype="multipart/form-data">

            <div class="form-container">

                <h2 class="subtitles">Datos del lugar que desea registrar</h2>
                <div>
                    <input id="title" type="text" name="title" maxlength="100" class="form-inputs" placeholder="Título o nombre del lugar">

                </div>
                <div>
                    <input id="description" type="text" name="description" maxlength="250" class="form-inputs" placeholder="Descripción del lugar">
                </div>

                <div>
                    <label class="subtitles"  for="images">Adjunte las imagenes del lugar <br></label>
                    <img id="preview" src="preview.png" alt="Preview">
                    <input id="images" type="file" name="images" onchange="readURL(this)" class="adj-images" placeholder="Imágen principal">

                    <input id="imag-two" type="file" name="img-two" class="adj-images" placeholder="Imágenes opcionales">

                    <input id="imag-three" type="file" name="img-three" class="adj-images" placeholder="Imágenes opcionales">
                </div>
                <div>
                    <label class="subtitles"  for="lugar" class="label-form">Seleccione la categoria del lugar</label>
                    <select name="lugar" id="lugar" class="form-inputs">
                        <?php
                            for($i=0; $i<count($categories); $i++){
                                echo "<option value'".$categories[$i]
                                ["id_place_category"]."'>".$categories[$i]
                                ["place_category"]."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <button class="btn-submit" type="submit" value="Enviar formulario">Enviar Formulario</button>
                    <button class="btn-submit" type="reset" value="Reestablecer formulario">Reestablecer Formulario</button>   
                </div>
            </div>
        </form>
    </section>

    <script>
        function readURL(input){
            if(input.files && input.files[0]){
                let reader =new FileReader();

                reader.onload=function(e){
                    let preview = document.getElementById('preview');
                    preview.src= e.targget.result;

                }
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

</body>

</html>