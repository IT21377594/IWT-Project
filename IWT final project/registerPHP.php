<?php  

    include_once 'include/connection.php';

    $fName = $_POST['firstname'];
    $lName = $_POST['lastname'];
    $mnumber = $_POST['phone'];
    $emails = $_POST['email'];
    $dob = $_POST['DOB'];
    $pass = $_POST['confirm'];


    $sql = "INSERT INTO users (firstName,lastName,mobile,email,dob,passwords)
        VALUES('$fName','$lName','$mnumber','$emails','$dob','$pass');";

    $result = mysqli_query($connection,$sql);

    header("Location:Log in.php?=Registration Succsesfull");
    
?>