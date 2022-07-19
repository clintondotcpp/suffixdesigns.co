<?php
    //create connection
    $conn = new mysqli('localhost', 'Kurinton', '@@90210@@','illustrations');

    //check connection
    if($conn->connect_error){
        die('Connection failed: '. $conn->connect_error);
    }

    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO products(product_price, product_description) VALUES(?,?)" );
    $stmt->bind_param("ss",$product_price,$product_description);


    for($i=0; $i<21; $i++){

        $product_price = "$150";
        $product_description = "-Completely customizable.
                                -Hand drawn.
                                -Satisfaction guaranteed- unlimited revisions.
                                -Turnaround- 10-14 days.
        
        ";
        $stmt->execute();
    }

    echo "NEW RECORDS CREATED SUCCESSFULLY";

    $stmt->close();
    $conn->close();
?>