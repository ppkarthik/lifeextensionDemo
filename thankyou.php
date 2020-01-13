<html>
<body>
<input type="hidden" id="nonce" name="payment_method_nonce" />
<script type="text/javascript">

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
console.log(getQueryVariable("nonce"));
document.querySelector('#nonce').value = getQueryVariable("nonce");
</script>

       
<?php
require 'braintree-php-4.5.0/lib/Braintree.php';
$gateway = new Braintree_Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'hks7325w6hqpmygy',
    'publicKey' => '4r34k2f6w522kbmv',
    'privateKey' => '487037d54eef8df77798d8efc32bd3fd'
]);

if (isset($_GET['nonce'])) {
    $nonceFromClient = $_GET['nonce'];

    $result = $gateway->transaction()->sale([
        'amount' => '8.78',
        'paymentMethodNonce' => $nonceFromClient,
        'options' => [
          'submitForSettlement' => true
        ],
    ]);

    header('Content-type: application/json');
    print json_encode($result);
    exit;
}
       
       
       
?>       
       

</body>
</html> 
