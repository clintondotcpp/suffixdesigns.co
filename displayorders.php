<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    img{
        width:200px;
    }
</style>
</head>
<body>
    <h1 class="text-center my-4">Order List</h1>
    <div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered w-50">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Headshot</th>
      <th scope="col">Logo</th>
      <th scope="col">Instructions</th>
      <th scope="col">Time_Of_Order</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $conn = new mysqli('localhost', 'Kurinton', '@@90210@@', 'orders');
    if($conn->connect_error){
        die('Connection error'.$connect_error);
        exit();
    }
    $sql = "Select * from `order_list`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
    $id=$row['order_id'];
    $email = $row['email'];
    $headshot = $row['headshot'];
    $logo = $row['logo'];
    $instructions = $row['instructions'];
    $time = $row['created_at'];
    
    echo '<tr>
      <td>'.$id.'</td>
      <td>'.$email.'</td>
      <td><img src='.$headshot.'></td>
      <td><img src='.$logo.'></td>
      <td>'.$instructions.'</td>
      <td>'.$time.'</td>
    </tr>';
    }
    ?>
  </tbody>
</table>
    </div>
</body>
</html>