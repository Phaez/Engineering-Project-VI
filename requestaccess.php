<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'config.php';
    $database = new PDO(
        'mysql:host=127.0.0.1; dbname='.DB_NAME,
        DB_USERNAME,
        DB_PASSWORD
    );
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $rows = $database->query('SELECT * FROM authorizedUsers ORDER BY id');

    $duplicate = FALSE;
    foreach ($rows as $row)
    {
        if ($row['username'] ==  $username){
            $duplicate = TRUE;
            echo 'Duplicate Username';

        }
        
    }

    if ($duplicate == FALSE){
        $query = 'INSERT INTO authorizedUsers ( username, password) VALUES ( :username,:password)';
        $params = [
            'username' => $username,
            'password' => $password
        ];
        $statement = $database->prepare($query);
        $result = $statement->execute($params);
        header('Location: index.php');
    }
    else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

?>