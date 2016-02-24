<?php
/**
 * #example_send
 *
 * This sample code demonstrate how to check image info through CoolSMS Rest API PHP
 * for more info, visit
 * www.coolsms.co.kr
 */

use Nurigo;

require_once __DIR__ . "/../../vendor/autoload.php";

// api_key and api_secret can be obtained from www.coolsms.co.kr/credentials
$apikey = '#ENTER_YOUR_OWN#';
$apisecret = '#ENTER_YOUR_OWN#';

// initiate rest api sdk object
$rest = new Nurigo\Coolsms($apikey, $apisecret);

// options(image_id) are mandatory. must be filled
$options->image_id = ''; // image id

$result = $rest->imageInfo($options);
print_r($result);
