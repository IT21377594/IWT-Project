<?php  

    include_once 'include/connection.php';

    $fName = $_POST['fullname'];
    $uName = $_POST['username'];
    $mnumber = $_POST['phone'];
    $emails = $_POST['email'];
    $year = $_POST['year'];
    $sem = $_POST['semester'];


    $sql = "INSERT INTO  librarymember(fullname, username, email, phone, years, semester)
        VALUES('$fName','$uName','$mnumber','$emails','$year','$sem');";

    $result = mysqli_query($connection,$sql);

    header("Location:library.html?=Registration Succsesfull");
    
?>