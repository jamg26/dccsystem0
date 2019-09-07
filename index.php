<?php
include 'components/navigation.php';
include 'styles.php';
if (isset($_SESSION["user"])) {
    $user = $_SESSION['user'];
    echo "<h1>Hello $user[1]";
} else {
    header('location: login.php');
}
