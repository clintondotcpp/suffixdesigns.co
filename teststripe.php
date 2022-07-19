<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./stripe.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Pay Page</title>
</head>
<body>
    <div class="container">
    <h2 class="my-4 text-center">Template 1[$150]</h2>
    <form action="./charge.php" method="POST" id="payment-form">
        <div class="form-row">
        <input type ="text" name="first_name" class="form-control mb-3 StripeElement 
        StripeElement--empty" placeholder="First Name">
        <input type ="text" name="last_name" class="form-control mb-3 StripeElement 
        StripeElement--empty" placeholder="Last Name">
        <input type ="email" name="email" class="form-control mb-3 StripeElement 
        StripeElement--empty" placeholder="Email">
        <label for="card-element">
            Credit or debit card
</label>
<div id="card-element" class="form-control">
    <!--a Stripe element will be inserted here-->
</div>
<!--used to display form errors-->
<div id="card-errors" role="alert"></div>

<button>Submit Payment</button>
</div>
    </form>
</div>
<!--We need jquery for our stripe api-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.
min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./charge.js"></script>
</body>
</html>