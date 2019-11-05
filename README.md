# php-transaction-app

<br>

**What Is This Project? :**

- This is a PHP project that uses the Stripe API for credit/debit card transactions.
- The main page is a basic form with an input for credit/debit information. When you submit the form the information is submitted to a database through XAMPP where you may see all (customers and transactions) and also to Stripe's dashboard (where you can view all payments and transactions).
- You may view all of the stored information for customers and transactions by visiting the following directories:
  - The Main Page: http://localhost/php-transaction-app/
  - Customers Page: http://localhost/php-transaction-app/customers.php
  - Transactions Page: http://localhost/php-transaction-app/transactions.php

<br>

**What Is Stripe? :**

- Stripe is a service that allows users to accept payments online, specifically developers.
- Stripe's Dashboard: https://dashboard.stripe.com/

<br>

**Notes:**

- When testing the credit/debit field just type "42" over and over again
- Needs XAMPP with Apache and MSQL running

<br>

**Dependencies:**

- stripe: https://stripe.com/docs/stripe-js
- stripe-php: https://github.com/stripe/stripe-php
