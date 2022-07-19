<?php
    $Email = $_POST['email'];

    //Database connection
    $conn = new mysqli('localhost','Kurinton','@@90210@@','newsletter');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into emailsignup(email) values(?)");
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        echo "registration SUccessfully...";
        $stmt->close();
        $conn->close();
    }


?>