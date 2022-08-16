<?php
    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/transaction.php');

    //Instantiate Customer
    $transaction = new Transaction();

    //Get Customer
    $transactions = $transaction->getTransactions();

    

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
    <title>Transaction List</title>
</head>
<body>
<div class="container mt-4">
    <div class="btn-group" role="group">
    <a href="customerlist.php" class="btn btn-secondary">Customers</a>
    <a href="transactionlist.php" class="btn btn-primary">Transactions</a>
    </div>
    <hr>
   <h2>Transactions</h2>
   <table class="table table-striped">
    <thead>
        <tr>
        <th>Transaction ID</th>
        <th>Customer</th>
        <th>Product</th>
        <th>Amount</th>
        <th>Date</th>
        <th>
        <tbody>
        </tbody>
        </tr>
    </thead>
    <tbody>
    <?php foreach($transactions as $t){ ?>
    <tr>
        <td><?php echo $t->id; ?></td>
        <td><?php echo $t->customer_id; ?><?php echo $c->last_name; ?></td>
        <td><?php echo $t->product; ?></td>
        <td><?php echo sprintf('%','2f',$t->amount); ?><?php echo strtoupper($t->currency); ?></td>
        <td><?php echo $t->created_at; ?></td>
    </tr>
    <?php }?>
    </tbody>
   </table>
   <br>
   <p><a href="index.php">Pay Page</a></p>
</div>
</body>
</html>