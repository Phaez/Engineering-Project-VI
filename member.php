<?php
    session_start();

    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!<br />";

        echo "<p>Members Only content</p>";

        echo "Click to <a href='logout.php'>Logout</a>";

    }
    else {
        echo "you are not allowed";
    }



?>