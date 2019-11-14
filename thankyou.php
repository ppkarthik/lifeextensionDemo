<?php

<?php
require 'braintree-php-4.5.0/lib/Braintree.php';
$gateway = new Braintree_Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'hks7325w6hqpmygy',
    'publicKey' => '4r34k2f6w522kbmv',
    'privateKey' => '487037d54eef8df77798d8efc32bd3fd'
]);

if (isset($_GET['nonce'])) {
    $nonceFromClient = $_GET['payment_method_nonce'];
if (isset($_GET['nonce'])) {
    $deviceData = $_GET['device_data'];

    $result = $gateway->customer()->create([
        'firstName' => 'Cory',
        'lastName' => 'Becker',
        'company' => 'PayPal',
        'paymentMethodNonce' => $nonceFromClient
    ]);

    // Get payment method token from customer (or use the customer_id)
    $paymentMethodToken = $result->customer->paymentMethods[0]->token;

    $result = $gateway->transaction()->sale([
        'amount' => '200.00',
        'paymentMethodNonce' => $nonceFromClient,
        'deviceData' => $deviceData
        'options' => [
          'submitForSettlement' => true
        ],
    ]);

    header('Content-type: application/json');
    print json_encode($result);

?>
