<?php
header("Access-Control-Allow-Origin: *"); // Allows all origins
header("Access-Control-Allow-Methods: GET, OPTIONS"); // Restrict to GET requests
header("Access-Control-Allow-Headers: Content-Type"); // Allow specific headers
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit();
}

// Response Data
$response = [
    "email" => "your-email@example.com",
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"),
    "github_url" => "https://github.com/ayomijpeg/hng_api"
];

echo json_encode($response);
?>
