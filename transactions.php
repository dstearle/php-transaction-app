<?php 

    // Config require
    require_once('config/db.php');
    // PDO require
    require_once('lib/pdo_db.php');
    // Transaction model
    require_once('models/Transaction.php');

    // Instatiate customer
    $transaction = new Transaction();

    // Get customer
    $transactions = $transaction->getTransactions();

    // print_r($transactions);

?>

<!DOCTYPE html>

<html>

    <head>

        <title>View Transactions</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    </head>

    <body>
        
        <div class="container mt-4">

            <!-- Nav Buttons -->
            <div class="btn-group" role="group">

                <!-- Customers Page -->
                <a href="customers.php" class="btn btn-dark">Customers</a>

                <!-- Transactions Page -->
                <a href="transactions.php" class="btn btn-primary">Transactions</a>
            
            </div>

            <hr>

            <!-- Title -->
            <h2 class="my-4 text-center">Transactions</h2>

            <!-- Table -->
            <table class="table table-striped">

                <!-- Table Headers -->
                <thead>

                    <tr>
                        <th>Transaction ID</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>

                </thead>

                <!-- Table Body -->
                <tbody>

                    <?php foreach($transactions as $t): ?>

                        <tr>

                            <td><?php echo $t->id; ?></td>
                            <td><?php echo $t->customer_id; ?></td>
                            <td><?php echo $t->product; ?></td>
                            <td><?php echo sprintf('%.2f', $t->amount / 100); ?> <?php echo strtoupper($t->currency); ?></td>
                            <td><?php echo $t->created_at; ?></td>
                        
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