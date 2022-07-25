<?php
    define('KB', 1024);
    define('MB', 1048576);
    define('GB', 1073741824);
    define('TB', 1099511627776);

    $product = $_GET['product'];


    $conn = new mysqli("localhost", "Kurinton", "@@90210@@", "orders");
    if($conn->connect_error){
        die('Connectin Failed: '.$conn->connect_error);
        exit();
    }


    

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $confirm_email = $_POST['confirm_email'];
        $instructions = $_POST['instructions'];
        $headshot = $_FILES['myheadshot'];
        $logo = $_FILES['mylogo'];
        

        /*To access the array, because files returns an array */
        $headshotFileName = $headshot['name'];
        $logoFileName = $logo['name'];
        
        $headshotFileError = $headshot['error'];
        $logoFileError = $logo['error'];
       
        
        $headshotFileTemp = $headshot['tmp_name'];
        $logoFileTemp = $logo['tmp_name'];
        

        $headshotExtensionSeparator = explode('.',$headshotFileName);
        $logoExtensionSeparator = explode('.', $logoFileName);
        

        $file_extension = strtolower($headshotExtensionSeparator[1]);
        $file_extension2 = strtolower($logoExtensionSeparator[1]);

        $extension = array('jpeg', 'jpg', 'png');
        if(in_array($file_extension,$extension)){
            if(in_array($file_extension2,$extension)){
            $upload_headshot = 'clientfolder/'.$headshotFileName;
            $upload_logo = 'clientfolder/'.$logoFileName;
            move_uploaded_file($headshotFileTemp, $upload_headshot);
            move_uploaded_file($logoFileTemp, $upload_logo);
            $sql = "insert into `order_list` (email, confirm_email, headshot, logo, instructions) values ('$email', '$confirm_email', '$upload_headshot', '$upload_logo', '$instructions')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "Data inserted successfully";
            }else{
                echo "Error uploading";
            }
         }  
        }
    }


   

 


   
    /*$sql = "INSERT INTO order_list(email, confirm_email, headshot, logo, instructions) VALUES('$email', '$confirm_email', '$headshot', '$logo', '$instructions')";
    //mysqli_query($conn,$sql);
    $conn->query($sql);*/

    /*header('Location: create-checkout-session.php?product='.$product)*/
?>


 <?php
 
 /* function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = test_input($_POST['email']);
    $confirm_email = test_input($_POST['confirm_email']);
    $instructions = test_input($_POST['instructions']);
    $logo = test_input($_POST['logo']);
    $headshot = test_input($_POST['headshot']);
}


$target_dir = "clientfolder";
$target_file = $target_dir . basename($_FILES[$headshot]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$filename = $_FILES[$headshot]["name"];

$target_dir = "clientfolder";
$target_file = $target_dir . basename($_FILES['logo']["name"]);
$uploadOk2 = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$filename2 = $_FILES[$logo]["name"];


//Check if image file is actual image or fake image
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["$headshot"]["tmp_name"]);
    if($check !== false){
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else{
        echo "File is not an image.";
        $uploadOk = 0;
    }

    

    $check = getimagesize($_FILES[$logo]["tmp_name"]);
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
}*/
 

 ?>