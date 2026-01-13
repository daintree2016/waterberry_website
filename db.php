<?php
include("auth.php");

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
// else {
//      echo'<script>console.log("Database connected")</script>';
// }
?>
