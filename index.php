<?php

$token = $_ENV['facebook_token'];
$app_secret = $_ENV['facebook_app-secret'];

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if ($_GET['hub_verify_token'] == $token && $_GET['hub_mode'] = 'subscribe') {
        echo $_GET['hub_challenge'];
    } else {
        header("HTTP/1.1 401 Unauthorized");
    }
} elseif ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $postdata = file_get_contents('php://input');
    $sig_check = 'sha1=' . hash_hmac('sha1', $postdata, $app_secret);
    if ($sig_check === $_SERVER['HTTP_X_HUB_SIGNATURE']) {
      
        // data processing
      
    } else {
        header("HTTP/1.1 400 Unauthorized");
    }
}

exit();
