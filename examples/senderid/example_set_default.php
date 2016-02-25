<?php
/**
 * #example_set_default
 *
 * This sample code demonstrate how to set default sender number through CoolSMS Rest API PHP
 * for more info, visit
 * www.coolsms.co.kr
 */

use Nurigo;

require_once __DIR__ . "/../../vendor/autoload.php";

// api_key and api_secret can be obtained from www.coolsms.co.kr/credentials
$api_key = '#ENTER_YOUR_OWN#';
$api_secret = '#ENTER_YOUR_OWN#';

// initiate rest api sdk object
$rest = new Nurigo\Coolsms($api_key, $api_secret);

// options(handle_key) are mandatory. must be filled
$options->handle_key = 'C29CE02IOE9'; // sender number handle key. check for 'example_list'

// Optional parameters for your own needs
// $options->site_user = 'admin'; // site user_id. '__private__' is default value

$result = $rest->setDefault($options);			
print_r($result);
