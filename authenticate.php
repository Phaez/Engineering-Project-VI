<?php
    session_start();
    $submitted = !empty($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username&&$password){
        $database = new PDO(
            'mysql:host=127.0.0.1;dbname=elevator',
            'William',
            'mysql'
        );
        $authenticated = FALSE;
        $rows = $database->query('SELECT * FROM authorizedUsers ORDER BY id');
        foreach ($rows as $row){
            if ($username == $row[1] && $password == $row[2]){
                $authenticated = TRUE;
            }
        }
        if ($authenticated == TRUE){
            $_SESSION['username']=$username;
        }
    }

    echo "form submitted successfully: $submitted";
    echo "<p>Username = $username Password = $password</p>";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>