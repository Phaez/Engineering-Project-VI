<?php


    $database = new PDO(
        'mysql:host=127.0.0.1; dbname=elevator',
        'William',
        'mysql'
    );

    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $rows = $database->query('SELECT * FROM elevatorNetwork WHERE nodeID=1');
    $row = $rows->fetch();

    $elevator = $row['currentFloor'];

    echo $elevator;

?>