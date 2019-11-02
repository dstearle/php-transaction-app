<!DOCTYPE html>

<html>

    <head>

        <title>Pay Page</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    </head>

    <body>
        
        <div class="container">

            <h2 class="my-4 text-center">Service Subscription [$50]</h2>

            <!-- Form -->
            <form action="/charge.php" method="post" id="payment-form">
            
                <div class="mb-5">

                    <!-- First Name -->
                    <input 
                        type="text" 
                        name="first_name"
                        class="form-control mb-3 StripeElement StripeElement--empty"
                        placeholder="First Name"
                    >

                    <!-- Last Name -->
                    <input 
                        type="text" 
                        name="last_name"
                        class="form-control mb-3 StripeElement StripeElement--empty"
                        placeholder="Last Name"
                    >

                    <!-- Email -->
                    <input 
                        type="email" 
                        name="email"
                        class="form-control mb-3 StripeElement StripeElement--empty"
                        placeholder="Email Address"
                    >
                    
                    <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>

                </div>

                <!-- Submit Button -->
                <button>Submit Payment</button>

            </form>
        
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="./js/charge.js"></script>

    </body>

</html>