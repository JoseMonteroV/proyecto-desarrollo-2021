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

    if($_GET){
        $selected_place= $database->select("tb_places","*",[
            "id_user"=>$_GET["id"]


        ]);
    }

    $categories= $database-> select("tb_place_category", "*", [
        "id_place"=> $_GET["id"]

    ]);

    if($_POST){
        //VALIDAR 
        $database->update("tb_places",[
            "place_title"=> $_POST["title"],
            "place_description"=> $_POST ["description"],
            "place_main_image"=> $_POST ["images"],
            "place_right_image"=> $_POST["img-two"],
            "place_left_image"=> $_POST["img-two"],
        ],[
            "id_place"=>$_POST["idplace"]

        ]);
        //ACTUALIZAR

        header("location:admin.php");
    }

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
        
        <form action="edit_place.php" method="post" enctype="multipart/form-data">

            <div class="form-container">

                <h2 class="subtitles">Editar datos del lugar</h2>
                <div>
                    <input id="title" type="text" name="title" value="<?php echo $selected_place[0]["place_title"]?>" maxlength="100" class="form-inputs" placeholder="Título o nombre del lugar">

                </div>
                <div>
                    <input id="description" type="text" name="description"  value="<?php echo $selected_place[0]["place_description"]?>" maxlength="250" class="form-inputs" placeholder="Descripción del lugar">
                </div>

                <div>
                    <label class="subtitles"  for="images">Adjunte las imagenes del lugar <br></label>
                    <img id="preview" src="preview.png" alt="Preview">
                    <input id="images" type="file" name="images"  value="<?php echo $selected_place[0]["place_main_image"]?>" onchange="readURL(this)" class="adj-images" placeholder="Imágen principal">

                    <input id="imag-two" type="file" name="img-two"  value="<?php echo $selected_place[0]["place_right_image"]?>" class="adj-images" placeholder="Imágenes opcionales">

                    <input id="imag-three" type="file" name="img-three" value="<?php echo $selected_place[0]["place_left_image"]?>" class="adj-images" placeholder="Imágenes opcionales">
                </div>
                <div>
                    <label class="subtitles"  for="lugar" class="label-form">Seleccione la categoria del lugar</label>
                    <select name="lugar" id="lugar" class="form-inputs">
                        <?php
                            for($i=0; $i<count($categories); $i++){
                                if($categories[$i]["id_place_category"]== $selected_place[0]["id_place_category"]){
                                    echo "<option value='".$categories[i]["id_place_category"]."'selected>".$categories[$i]["place_category"]."<option>";

                                }else{
                                    echo "<option value='".$categories[$i]["id_place_category"]."'>".$categories[$i]["place_category"]."</option>";
                                }

                               
                            }
                        ?>
                    </select>
                <input type="hidden" name="idplace" value="<?php echo $selected_place[0]["id_place"]?>">
                </div>
                <div>
                    <button class="btn-submit" type="submit" value="Enviar formulario">Terminar Modificacion</button>
                
                </div>
            </div>
        </form>
    </section>
    <script>
        function readURL(input){
            if(input.files && input.files[]){
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