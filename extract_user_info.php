<?php
// Simulate fetching user information from a database or API
$users = array(
    "john.doe@example.com" => array(
        "name" => "John Doe",
        "email" => "john.doe@example.com",
        "age" => 35,
        "ipAddress" => "192.168.1.100",
        "latitude" => 37.7749,
        "longitude" => -122.4194,
        "browser" => "Chrome",
        "os" => "Windows 10",
        "deviceType" => "Desktop",
        "screenResolution" => "1920x1080"
    ),
    "jane.smith@example.com" => array(
        "name" => "Jane Smith",
        "email" => "jane.smith@example.com",
        "age" => 28,
        "ipAddress" => "192.168.1.101",
        "latitude" => 40.7128,
        "longitude" => -74.0060,
        "browser" => "Safari",
        "os" => "macOS",
        "deviceType" => "Laptop",
        "screenResolution" => "1440x900"
    )
);

$email = $_GET['email'];
if (array_key_exists($email, $users)) {
    // Return the user data as a JSON response
    header('Content-Type: application/json');
    echo json_encode($users[$email]);
} else {
    // Return an error message if the user is not found
    http_response_code(404);
    echo json_encode(array("error" => "User not found"));
}