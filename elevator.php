<?php
    $reqfloor = (int)$_POST['reqfloor'];


    $database = new PDO('mysql:host=127.0.0.1;dbname=mysql',
    'William',
    'mysql'
    );

    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $rows = $database->query('SELECT * FROM elevatorNetwork ORDER BY date DESC');


    $row = $rows->fetch();

    $prevFloor = 1;//$row['currentFloor'];

    echo $prevFloor;

    $params = [
        'date' => '2019-07-08',
        'time' => '10:10:10',
        'status' => 1,
        'currentFloor' => $prevFloor,
        'requestedFloor' => $reqfloor,
        'otherInfo' => 'na'
    ];

    $query = 'INSERT INTO elevatorNetwork (date, time, status, currentFloor, requestedFloor, otherInfo) VALUES (:date,:time,:status,:currentFloor,:requestedFloor,:otherInfo)';

    $statement = $database->prepare($query);

    $result = $statement->execute($params);

    var_dump($result);



?>