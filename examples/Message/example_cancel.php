<?php
/** 
 * #example_cancel
 *
 * This sample code demonstrate how to cancel reserved sms through CoolSMS Rest API PHP
 * for more info, visit
 * www.coolsms.co.kr
 */

use Nurigo\Coolsms\Message;
use Nurigo\Exceptions\CoolsmsException;

require_once __DIR__ . "/../../vendor/autoload.php";

// api_key and api_secret can be obtained from www.coolsms.co.kr/credentials
$api_key = '#ENTER_YOUR_OWN#';
$api_secret = '#ENTER_YOUR_OWN#';

try {
    // initiate rest api sdk object 
    $rest = new Message($api_key, $api_secret);

    // Either mid or gid must be entered. 
    $options = new stdClass();
    $options->mid = 'M52CB443257C61'; // message id. 
    // $options->gid = 'G52CB4432576C8'; // group id. 

    $rest->cancel($options); // cancel does not return any.
} catch(CoolsmsException $e) {
    echo $e->getMessage(); // get error message
    echo $e->getCode(); // get 'api.coolsms.co.kr' response code
}
