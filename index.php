<?php include 'server-info.php'; ?>

<!DOCTYPE html>

<html>

    <head>

        <title>Pay Page</title>

        <link rel="stylesheet" href="css/style.css">
    
    </head>

    <body>
        
        <!-- Form -->
        <form action="/charge" method="post" id="payment-form">
        
            <div class="form-row">

                <label for="card-element">

                    Credit or debit card

                </label>
                
                <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>

            </div>

            <button>Submit Payment</button>

        </form>

        <script src="https://js.stripe.com/v3/"></script>

    </body>

</html>