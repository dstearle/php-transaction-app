<?php 

    // Config require
    require_once('config/db.php');
    // PDO require
    require_once('lib/pdo_db.php');
    // Customer model
    require_once('models/Customer.php');

    // Instatiate customer
    $customer = new Customer();

    // Get customer
    $customers = $customer->getCustomers();

    // print_r($customers);

?>

<!DOCTYPE html>

<html>

    <head>

        <title>View Customers</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    </head>

    <body>
        
        <div class="container mt-4">

            <!-- Nav Buttons -->
            <div class="btn-group" role="group">

                <!-- Customers Page -->
                <a href="customers.php" class="btn btn-primary">Customers</a>

                <!-- Transactions Page -->
                <a href="transactions.php" class="btn btn-dark">Transactions</a>
            
            </div>

            <hr>

            <!-- Title -->
            <h2 class="my-4 text-center">Customers</h2>

            <!-- Table -->
            <table class="table table-striped">

                <!-- Table Headers -->
                <thead>

                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                    </tr>

                </thead>

                <!-- Table Body -->
                <tbody>

                    <?php foreach($customers as $c): ?>

                        <tr>

                            <td><?php echo $c->id; ?></td>
                            <td><?php echo $c->first_name; ?> <?php echo $c->last_name; ?></td>
                            <td><?php echo $c->email; ?></td>
                            <td><?php echo $c->created_at; ?></td>
                        
                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

            <!-- Pay Page Button -->
            <p>

                <a href="index.php" class="btn btn-primary mt-2">Pay Page</a>

            </p>
        
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="./js/charge.js"></script>

    </body>

</html>