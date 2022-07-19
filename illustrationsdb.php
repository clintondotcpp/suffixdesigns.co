<?php
    require_once('lib/pdo_db.php');
    

    try{
        $conn = mysqli_connect('localhost','Kurinton', '@@90210@@', 'illustrations');
        if(!$conn){
            echo 'CONNECTION ERROR' . mysqli_connect_error();
            
        }

        $sql = 'SELECT * products';
        $result = mysqli_query($conn, $sql);
    }catch(Exception $e){
        $error = $e->getMessage();
    }
    $rows = $result->num_rows;
    if(!$rows){
        echo "No results found";
    }else{
        while($product = fetch_assoc($result));
    }

    $id = $product['product_id'];
    if(filter_var($id, FILTER_VALIDATE_INT) === false){
        die('No valid ID');
    }

    echo "<preq>";
    var_dump($product);
    echo "</preq>";

    

?>