<?php
    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/customer.php');

    //Instantiate Customer
    $customer = new Customer();

    //Get Customer
    $customers = $customer->getCustomers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./stripe.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Customer List</title>
</head>
<body>
<div class="container mt-4">
    <div class="btn-group" role="group">
    <a href="customerlist.php" class="btn btn-primary">Customers</a>
    <a href="transactionlist.php" class="btn btn-secondary">Transactions</a>
    </div>
    <hr>
   <h2>Customers</h2>
   <table class="table table-striped">
    <thead>
        <tr>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <tbody>
        </tbody>
        </tr>
    </thead>
    <tbody>
    <?php foreach($customers as $c){ ?>
    <tr>
        <td><?php echo $c->id; ?></td>
        <td><?php echo $c->first_name; ?><?php echo $c->last_name; ?></td>
        <td><?php echo $c->email; ?></td>
        <td><?php echo $c->created_at; ?></td>
    </tr>
    <?php }?>
    </tbody>
   </table>
   <br>
   <p><a href="index.php">Pay Page</a></p>
</div>
</body>
</html>