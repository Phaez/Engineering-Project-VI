<?php

    session_start();
    $username= $_POST['username'];
    $password = $_POST['password'];


    if(($username=="william.davidson314@gmail.com") && ($password == "larry4prez")) {
        $_SESSION['username']=$username;
        echo "<p>Congratulations, you are now logged into the site</p>";
    }
    else{
        echo "<p>Wrong Username</p>";
    }
    echo '<p><a href="index.php">return</a>'

    ?>