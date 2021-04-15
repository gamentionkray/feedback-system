<?php

$conn = new mysqli("localhost", "root", "", "vit_feedback") or die(mysqli_error($conn));

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
