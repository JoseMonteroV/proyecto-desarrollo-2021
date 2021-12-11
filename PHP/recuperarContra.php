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

    $data= $database-> select("tb_users", "*");


    

?>