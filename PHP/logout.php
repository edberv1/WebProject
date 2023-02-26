<?php 
    session_start();
    session_destroy();
    echo "<script> alert('You are logged out!') </script>";
    echo "<script> window.location.href = 'login.php' </script>";
?>