<?php
    session_start();
    $submitted = !empty($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username&&$password){
        $_SESSION['username']=$username;
    }

    echo "form submitted successfully: $submitted";
    echo "<p>Username = $username Password = $password</p>";


?>