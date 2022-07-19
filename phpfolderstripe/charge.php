<?php
    //we are gonna go to stripe-php github and install with composer
    require_once('vendor/autoload.php');
    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/customer.php');
    require_once('models/transaction.php');

    //$stripe = new \Stripe\StripeClient('sk_test_4eC39HqLyjWDarjtT1zdp7dc'); //TODO this should be the secret key:TEST from API 
    //$stripe = new \Stripe\StripeClient("sk_test_51LMBLYGvSc684Tudw7W3TJhoOwXeXuf3l4zHk8OeAbvJU3PI80xp5ENPpTXm4rsZ7Szidxbd773gqnNcLUtNaaIS00YjFJGxUm");
    \Stripe\Stripe::setApiKey('sk_test_51LMBLYGvSc684Tudw7W3TJhoOwXeXuf3l4zHk8OeAbvJU3PI80xp5ENPpTXm4rsZ7Szidxbd773gqnNcLUtNaaIS00YjFJGxUm');
    // Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys

    //Sanitize POST Array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    

    $first_name = $POST['first_name'];
    $last_name = $POST['last_name'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];

    echo $token;
    //create customer in stripe
    $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token
    ));

    //Charge customer
    $charge = \Stripe\Charge::create(array(
        "amount" => 5000,
        "currency" => "usd",
        "description" => "Template 1",
        "customer" => $customer->id
    ));

    //Customer data
    $customerData = [
        'id' => $charge->customer,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email
    ];

    //Instantiate Customer
    $customer = new Customer();

    //Add Customer to DB
    $customer->addCustomer($customerData);


    //TRansaction data
    $transactionData = [
        'id' => $charge->id,
        'customer_id' => $charge->customer, //TODO,
        'product' => $charge->description,
        'amount' => $charge->amount,
        'currency' => $charge->currency,
        'status' => $charge->status,
    ];

    //Instantiate Transaction
    $transactionData = new Transaction();

    //Add Customer to DB
    $transactionData->addTransaction($transactionData);



    //Redirect to success after payment
    header('Location: success.php/tid='.$charge->id.'&product='.$charge->description);

?>