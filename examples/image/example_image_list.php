<?php
/**
 * #example_image_list
 *
 * This sample code demonstrate how to check image list through CoolSMS Rest API PHP
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

// Optional parameters for your own needs
// $options->offset = 0; // default 0
// $options->limit = 20; // default 20

$result = $rest->imageList($options);
print_r($result);