<?php
/**
 * #example_upload_image
 *
 * This sample code demonstrate how to upload image through CoolSMS Rest API PHP
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

// options(image) are mandatory. must be filled
$options->image = 'images/test.jpg'; // image

// Optional parameters for your own needs
// $options->encoding = 'binary'; // image encoding type (base64, binary) default binary

$result = $rest->uploadImage($options);			
print_r($result);