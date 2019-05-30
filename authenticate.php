<?php

    $submitted = !empty($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];


    echo "form submitted successfully: $submitted";
    echo "<p>Username = $username Password = $password</p>";


?>