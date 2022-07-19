<?php
require_once 'functions.php';

$host = "localhost";
$user = "Kurinton";
$pass = "@@90210@@";
$database = "gifs";    /*change */

//input variables
$product_price = $product_description = "";

$mysqli = new mysqli($host, $user, $pass, $database) or die(mysqli_error(mysqli));
//$local_dir = 'C:\xampp\htdocs\mywebsite\Assets\PhotoGIF';
//$local_server_dir = 'PHOTOGIF';
$local_http_dir = local_server_path_to_http($local_server_dir);

copy_files($local_dir, $local_server_dir);
$files = clean_scandir($local_server_dir); //This is going to clean the folder and remove unnecessary files
//✔Hand drawn then animated.

//insert image files into the database
for($i = 0; $i < count($files); $i++){
    $word = remove_ext($files[$i]);
    $http_path = "$local_http_dir/$files[$i]";
    $http_path = preg_replace("! !","%20",$http_path);
    $product_price = "150";                                                             /*change */
    $product_description = "✔Completely customizable.
                            ✔Satisfaction guaranteed- unlimited revisions.
                            ✔Trasparent background for posts and stories.
                            ✔Turnaround- 3 days.
    
    ";
    $query = "INSERT IGNORE INTO products (product_name,product_video,product_price,product_description) VALUES ('$word', '$http_path', '$product_price','$product_description')";
    $mysqli->query($query) or die($mysqli->error);
}

mysqli_close($mysqli);

/* ✔Completely customizable.
                            ✔Satisfaction guaranteed- unlimited revisions.
                            ✔Trasparent background for posts and stories.
                            ✔Turnaround- 10-14 days.
                            ✔FREE photo/logo GIF*/
?>

