<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "help_desk";

    $conn = new mysqli($servername, $username,$password, $dbname);

    
    //Check connection
    if($conn->connect_error){
        die("Connection error");
        //die('Connection Failed : '.$conn->connect_error);
    }else{
        echo "Connection ok";
    }

    
?>