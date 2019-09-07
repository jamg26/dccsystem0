<?php

if (isset($_POST['password']) && isset($_POST['email'])) {
    if ($_POST['password'] != "" && $_POST['email'] != "") {
        session_start();
        function login($email, $pass)
        {
            include_once '../db.php';
            $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $_SESSION['user'] = [$row['idusers'], $row['firstname'], $row['lastname'], $row['email']];
                    header('location: /');
                }
            } else {
                header('location: /login.php?invalid=true');
            }
            $conn->close();
        }
        login($_POST['email'], $_POST['password']);
    } else {
        header('location: /login.php?blank=true');
    }
}
