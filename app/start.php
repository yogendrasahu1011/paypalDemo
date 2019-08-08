<?php
require 'vendor/autoload.php';
define('SITE_URL','http://testintegration.dx.am/paypalApitest');

$paypal = new \PayPal\Rest\ApiContext(
new \PayPal\Auth\oAuthTokenCredential(
'*********************',
    '*********************')


);

?>
