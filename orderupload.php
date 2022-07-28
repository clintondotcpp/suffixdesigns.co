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
        $headshot = $_FILES['headshot'];
        $logo = $_FILES['logo'];
        $instructions = $_POST['instructions'];
        

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
            $sql = "insert into `order_list` (email, headshot, logo, instructions) values ('$email', '$upload_headshot', '$upload_logo', '$instructions')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "Data inserted successfully";
            }else{
                echo "Error uploading";
            }
         }  
        }

       header('Location: create-checkout-session.php?product='.$product);
    }


   

 


    
?>


