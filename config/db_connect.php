<?php
$servername = "127.0.0.1";  // Change to your server name if different
$username = "root";         // Change to your database username
$password = "";             // Change to your database password
$dbname = "website_2_admin_user_2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
