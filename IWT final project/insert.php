<?php

    include "connect.php";

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];

    $sql = "insert into librarymember(fullname, username, email, phone, year, semester) values(?, ?, ?, ?, ?, ?)";
    $statement = $conn->prepare($sql);

    $statement->bind_param("ssssii", $fullname, $username, $email, $phone, $year, $semester);

    if($statement->execute()){
        echo "insert Data Success !";

    }else{
        echo "Insert Data Error !";
    }


?>