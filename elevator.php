<?php

    $reqfloor = (int)$_REQUEST['reqfloor'];


    $database = new PDO('mysql:host=127.0.0.1;dbname=elevator',
    'William',
    'mysql'
    );

    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $rows = $database->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');


    $query = 'INSERT INTO elevatorNetwork ( date, time, nodeID,status, currentFloor, requestedFloor, otherInfo) VALUES ( :date,:time,:nodeID,:status,:currentFloor,:requestedFloor,:otherInfo)';
    $statement = $database->prepare($query);

    $row = $rows->fetch();

    $prevFloor = $reqfloor;//$row['currentFloor'];

    echo $prevFloor;

    $current_date_query = $database->query('SELECT CURRENT_DATE()');
    $curr_date = $current_date_query->fetch(PDO::FETCH_ASSOC);

    $current_time_query = $database->query('SELECT CURRENT_TIME()');
    $curr_time = $current_time_query->fetch(PDO::FETCH_ASSOC);

    $date = $curr_date['CURRENT_DATE()'];
    $time = $curr_time['CURRENT_TIME()'];



    $params = [
        'date' => $curr_date['CURRENT_DATE()'],
        'time' => $curr_time['CURRENT_TIME()'],
        'status' => 1,
        'currentFloor' => $prevFloor,
        'requestedFloor' => $reqfloor,
        'otherInfo' => 'na'
    ];
    $stmt = $database->prepare('SELECT * FROM elevatorNetwork WHERE nodeID=1');
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($stmt->rowCount() == 0){
        $query = 'INSERT INTO elevatorNetwork (nodeID,currentFloor, requestedFloor) VALUES ( :nodeID,:currentFloor, :requestedFloor)';
        $params = [
            'nodeID' => 1,
            'currentFloor' => $reqfloor,
            'requestedFloor' => $reqfloor
        ];
        $statement = $database->prepare($query);
        $result = $statement->execute($params);
    }
    else {
        $queryupd = 'UPDATE elevatorNetwork SET date=?, time=?, currentFloor=?, requestedFloor=? WHERE nodeID = 1';
        $array = [
            'date' => $date,
            'time' => $time,
            'currentFloor' => $reqfloor
        ];
        $statement = $database->prepare($queryupd);
        $statement->execute([$date,$time,$reqfloor, $reqfloor]);

        $query = 'INSERT INTO ChangeLog ( date, time, currentFloor, requestedFloor) VALUES ( :date,:time,:currentFloor,:requestedFloor)';
        $insertstatement = $database->prepare($query);
        $params = [
            'date' => $date,
            'time' => $time,
            'currentFloor' => $reqfloor,
            'requestedFloor' => $reqfloor
        ];
        $insertstatement->execute($params);
    

    }

?>