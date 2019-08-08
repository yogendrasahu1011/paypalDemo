<?php
require 'vendor/autoload.php';
define('SITE_URL','http://testintegration.dx.am/paypalApitest');

$paypal = new \PayPal\Rest\ApiContext(
new \PayPal\Auth\oAuthTokenCredential(
'AYNVaLN1UA9Y50wDzXm6CxZ7YZSS96ulIqwiH45GKJRAaecu38f80YnxCV3kxWJgHlCS6h37sEjAqEId',
    'ECpDMkp4NOOiN6OpJYOrfvit-Y-ugu3QzMn04ExwA9sFNGsXpmoBSewE8IaIZNQvdwdqRJnG10kRx0Xg')


);

?>