<?php 

    // Stripe-php require
    require_once('vendor/autoload.php');
    // Config require
    require_once('config/db.php');
    // PDO require
    require_once('lib/pdo_db.php');

    // Stripe-php server side key
    \Stripe\Stripe::setApiKey('sk_test_FAdioes0P4qTZiWGjCpaVFNy00MfRtYPYq');

    // Sanitize POST array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $first_name = $POST['first_name'];
    $last_name = $POST['last_name'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];

    // echo $token;

    // Create customer in stripe
    $customer = \Stripe\Customer::create(array(

        "email" => $email,
        "source" => $token

    ));

    // Charge customer
    $charge = \Stripe\Charge::create(array(

        "amount" => 5000,
        "currency" => "usd",
        "description" => "One month subscription",
        "customer" => $customer->id

    ));

    // print_r($charge);

    // Redirect to success
    header('Location: success.php?tid=' . $charge->id . '&product=' . $charge->description);

?>