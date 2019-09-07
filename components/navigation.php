<?php
session_start();
$userid = @$_SESSION['user'][0]
?>
<html>
<ul class="nav justify-content-end">
    <?php if ($userid != "") {
    echo '<li class="nav-item">
                <a class="nav-link active" href="/login.php">
                    Logout
                </a>
        </li>';

} else {
    echo '<li class="nav-item">
                <a class="nav-link active" href="/login.php">
                    Login
                </a>
        </li>';
}?>

</ul>

</html>
