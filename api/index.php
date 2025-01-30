<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS"); 
header("Access-Control-Allow-Headers: Content-Type"); 
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit();
}

// Response Data
$response = [
    "email" => "ayomitomiwa53@gmail.com",
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"),
    "github_url" => "https://github.com/ayomijpeg/hng_api"
];

echo json_encode($response);
?>
