<?php
    $date = $_POST['date'];
    $log = $_POST['log'];
    echo $date;
    echo $log;

    $database = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator', 
        'William',
        'mysql'
    );

    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = 'INSERT INTO logbookh (date, log) VALUES (:date,:log)';

    $statement = $database->prepare($query);

    $params = [
        'date' => $date,
        'log' => $log
    ];
    
    $result = $statement->execute($params);
    var_dump($result);
    header("Location: HaronLogbook.php");


?>