<?php 

    // Checks to see if 'tid' and 'product' values have been provided
    if(!empty($_GET['tid'] && !empty($_GET['product']))) {

        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $GET['tid'];
        $product = $GET['product'];

    }

    // If above values have not been provided redirect back to the index
    else {

        header('Location: index.php');

    }

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Thank You</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    </head>

    <body>
        
        <div class="container mt-4">

            <!-- Title -->
            <h2 class="my-4 text-center">Thank you for purchasing "<?php echo $product; ?>"</h2>

            <hr>

            <!-- Transaction ID -->
            <p>Your transaction ID is <?php echo $tid; ?></p>

            <p>Check your email for confirmation</p>

            <!-- Return Button -->
            <p>

                <a href="index.php" class="btn btn-primary mt-2">Return</a>

            </p>
        
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="./js/charge.js"></script>

    </body>

</html>