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

    $data= $database-> select("tb_places", "*");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Photos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php
    $length=count($data);
    session_start();
    for($i=0; $i<$length; $i++){
        $votes= $database-> count("tb_user_likes_place",[
            "id_place"=> $data[$i]["id_place"];
        ]);
        
        $hasVoted=[];
        if(isset($_SESSION["active"])){
            $hasVoted =$database->select("tb_user_likes_place", "*",[
                "AND"=>[
                    "id_user"=>$_SESSION["id"],
                    "id_place"=>$data[$i]["id_place"]
                ]
            ]);
        }
        if(count($hasVoted)> 0){
            $style= 'fas fa-heart black-text'; //Revisar
            $click= "";
        }else{
            $style= 'far fa-heart black-text' ;//Revisar
            $click= "onclick='voting(this.id)'";

        }
      


        
        echo "<div>";
        echo "<div> <img src='./uploads/".$data[$i]["place_main_image"]."' alt'".$data[$i]["place_main_image"]."'></div>";//IMAGEN
        echo ""
        echo "<p class='footer'>Registrado por:</p>";
        echo "<p class='footer'>Categoría:".$data[$i]["id_place_category"]."</p>";
        echo "<p class='footer'>Fecha de publicación:".$data[$i]["place_pub_date"]."</p>";
        echo "<p class='footer' id= 'v".$data[$i]["id_place"]."'>Numero de votos:</p>"; //Para que vaya aumentadndo votes
        
        echo "<div>";
        echo "<i id='".$data[$i]["id_place"]."' class='".$style."' ".$click."></i>";
        echo "<h2 id='v".$data[$i]["id_place"]."' class='align-div'>".$votes."</h2>";
        echo "</div>";

        echo "<button class='button-top-10' onclick='voting(this.id)'>Mas detalles</button>";
        echo "</div";
    }
    
    ?>
    


    <script>
        AOS.init();
        function voting (id){
            console.log(id);
            let info= {place: id };
            fetch("/php/votes.php", {
                method: "POST",
                mode:"same-origin",
                credentials:"same-origin",
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'Content_Type': 'application/jason'
                }
                body: JSON.stringify(info)
            })
            .then(response => response.json())
            .then(data=> {
                if(data=== 401){
                    alert("Debe iniciar sesion para poder votar");
                }
                if(data===200){
                    alert("ALERTA");
                    let btn = document.getElementById(id);
                    btn.classList.remove("far"); //Revisar esto arriba en el voton de vote 
                    btn.removeAttributte("onclick");
                    btn.classList.add("fas");
                    let votes = document.getElementById("v"+id);
                    let updateVotes = Number(votes.innerText);
                    updateVotes+= 1;
                    votes.innerText = updateVotes;

                }
            })

            

        }


    </script>


</body>

</html>