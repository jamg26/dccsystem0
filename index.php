<?php

session_start();

if (isset($_SESSION["user"])) {
    $user = $_SESSION['user'];
    echo "welcome $user[0], $user[1], $user[2], $user[3] <html><a href='/login.php'>click here</a></html> to logout";
} else {
    header('location: login.php');
}
