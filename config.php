<?php
ini_set('display_errors', 0);
require_once 'vendor/autoload.php';

session_start();

// init configuration
$clientID = '705146196954-lcrb9f5vgqjqipbtq5d64jl5ohch3ka0.apps.googleusercontent.com2';
$clientSecret = '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';
$redirectUri = 'http://localhost/mab_test_login/menu.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
?>