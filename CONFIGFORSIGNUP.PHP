<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('918907831267-gnntd9o7ve36vmob3164i7iibeaeoc2i.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/CROSSBORDERS/USER/SIGNIN.PHP');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>