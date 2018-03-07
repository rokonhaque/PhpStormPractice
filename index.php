<?php

$servername = "localhost";
$username = "rokon";
$password = "blood@1994";

// Create connection
$conn = new mysqli($servername, $username, $password);
/*echo "<pre>";
print_r($conn);
exit();*/
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>