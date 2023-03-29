<?php
    session_start();

    if (isset($_POST['logout'])) {
        $_SESSION['user'] = false;
        session_destroy();
        header("location: login.php");
    }
