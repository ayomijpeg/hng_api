<?php
header('Content-Type: application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

$email = "ayomitomiwa53@gmail.com"; 
$current_datetime = gmdate('Y-m-d\TH:i:s\Z'); 
$github_url = "https://github.com/ayomijpeg/hng"; 

// Create the response array
$response = [
    "email" => $email,
    "current_datetime" => $current_datetime,
    "github_url" => $github_url
];


echo json_encode($response, JSON_PRETTY_PRINT);
?>
