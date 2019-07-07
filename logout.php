<?php
    session_start();
    session_destroy();
    echo "you have been logged out Click <a href='login.php'>Here</a> to login";
?>