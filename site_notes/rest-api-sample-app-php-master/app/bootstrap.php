<?php

// Include the composer autoloader
if(!file_exists(__DIR__ .'/../vendor/autoload.php')) {
	echo "The 'vendor' folder is missing. You must run 'composer update' to resolve application dependencies.\nPlease see the README for more information.\n";
	exit(1);
}
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/common/user.php';
require_once __DIR__ . '/common/order.php';
require_once __DIR__ . '/common/paypal.php';
require_once __DIR__ . '/common/util.php';

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

// Define connection parameters
define('MYSQL_HOST', 'localhost:3306');
define('MYSQL_USERNAME', 'paypal_pizza_app');
define('MYSQL_PASSWORD', 'password');
define('MYSQL_DB', 'paypal_pizza_app');

return getApiContext();

// SDK Configuration
function getApiContext() {


    // Define the location of the sdk_config.ini file
    if (!defined("PP_CONFIG_PATH")) {
        define("PP_CONFIG_PATH", dirname(__DIR__));
    }

	$apiContext = new ApiContext(new OAuthTokenCredential(
		'ATdF1im57T-L3vTyN0zshffCiz0zUXZY1Hu91Nzt0i2MSsDk2Nlvnld0768PmWEE-Su_7ssriKTnN_ZL',
		'EG0ztcgMvwuylPX_gH1BQE3wGfBwbFpebA4djJMBqumuUPpbigGSOjA189oOIvuShYhGE8ZLQMW7wClR'
	));

	
	// Alternatively pass in the configuration via a hashmap.
	// The hashmap can contain any key that is allowed in
	// sdk_config.ini	
	/*
	$apiContext->setConfig(array(
		'http.ConnectionTimeOut' => 30,
		'http.Retry' => 1,
		'mode' => 'sandbox',
		'log.LogEnabled' => true,
		'log.FileName' => '../PayPal.log',
		'log.LogLevel' => 'INFO'		
	));
	*/
	return $apiContext;
}
