<?php

// API url
$url = 'https://api-petitbag.paraanime.com/login';

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

// Collection object
$authData = [
  'email' => $email,
  'password' => $password,
];

// Initializes a new cURL session
$curl = curl_init($url);

// 1. Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_URL, $url);

// 2. Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);

// 3. Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($authData));

// Execute cURL request with all previous settings
$response = curl_exec($curl);

// Close cURL session
curl_close($curl);

$dataResp = json_decode($response);



?>
