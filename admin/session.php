<?php
include("../includes/connection.php");
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = "select username from admin_login where username = '$user_check' ";

$ses_res = $conn->query($ses_sql);

$row = $ses_res->fetch_array(MYSQLI_ASSOC);

$login_session = $row['username'];

if (!isset($_SESSION['login_user'])) {
    header("location:index.php");
    die();
}
