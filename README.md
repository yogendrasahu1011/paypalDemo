# paypalDemo

Paypal integration using RESTful Api from Paypal
PHP auto loader configured for dependancies from "https://packagist.org/packages/paypal/rest-api-sdk-php"
using Composer for PHP.


Feel free to use.

To use in a live website configure client Id and secret in start.php line <<<--$paypal = new \PayPal\Rest\ApiContext(
new \PayPal\Auth\oAuthTokenCredential('id', 'secret');

and configure your SITE_URL to your site landing page
