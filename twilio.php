<?php

include './vendor/autoload.php';

use Twilio\Rest\Client;

if (!empty($_POST['mobileTo'])  && !empty($_POST['mobileFrom']) && !empty($_POST['msg'])) {
    $sid    = "AC93afcbe02a5393e44462a9fe8889c84c";
    $token  = "4f372258e4a11eb5f3a1f635b283a43e";
    $twilio = new Client($sid, $token);

    $message = $twilio->messages->create(
            $_POST['mobileTo'], array(
        'from' => $_POST['mobileFrom'],
        'body' => $_POST['msg']
            )
    );
    if ($message->sid) {
        echo "Message sent!";
    }
}
else{
    echo "All fields not filled!";
}