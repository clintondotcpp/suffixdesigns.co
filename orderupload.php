<?php
    require('charge.php');
define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);

    $email = $confirm_email = $instructions = "";

    return $first_name['first_name'] ?? null; 
    return $first_name['last_name'] ?? null; 
    return $first_name['stripeToken'] ?? null; 

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = test_input($_POST['email']);
        $confirm_email = test_input($_POST['confirm_email']);
        $instructions = test_input($_POST['instructions']);
    }

    if($charge){

    $target_dir = "clientfolder/";
    $target_file = $target_dir . basename($_FILES['headshot']["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $filename = $_FILES["headshot"]["name"];

    $target_dir = "clientfolder/";
    $target_file = $target_dir . basename($_FILES['logo']["name"]);
    $uploadOk2 = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $filename2 = $_FILES["logo"]["name"];


    //Check if image file is actual image or fake image
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["headshot"]["tmp_name"]);
        if($check !== false){
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else{
            echo "File is not an image.";
            $uploadOk = 0;
        }

        

        $check = getimagesize($_FILES["logo"]["tmp_name"]);
        if($check !== false){
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk2 = 1;
        } else{
            echo "File is not an image.";
            $uploadOk2 = 0;
        }

       
    }

    //Check file size
    if($_FILES["headshot"]["size"] > 25*MB){
        echo "Sorry, your file is to large.";
        $uploadOk = 0;
    }

    

    //Check file size
    if($_FILES["logo"]["size"] > 25*MB){
        echo "Sorry, your file is to large.";
        $uploadOk2 = 0;
    }

    

    //Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
    }

 


    $conn = new mysqli("localhost", "Kurinton", "@@90210@@", "orders");

    if($conn->connect_error){
        die('Connectin Failed: '.$conn->connect_error);
        exit();
    }

    $sql = "INSERT INTO order_list(email, confirm_email, headshot, logo, instructions) VALUES('$email', '$confirm_email', '$filename', '$filename2', '$instructions')";
    //mysqli_query($conn,$sql);
    $conn->query($sql);
}
    
?>

 