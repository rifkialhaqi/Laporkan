<?php
    session_start();

    if($_SESSION['logged_in'] == false) {
      header('location: login_user.html');
    }
?>