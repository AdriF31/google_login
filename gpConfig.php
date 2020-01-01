<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '427030861261-2jn31v8nrtfgr389dng7l40sqv42u7o5.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'rUx4UQIm_NJEOvNXz9ianI4V'; //Google client secret
$redirectURL = 'https://127.0.0.1/google_login/get.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Google Login');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>