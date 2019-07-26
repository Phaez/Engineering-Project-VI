<?php


$database = new PDO('mysql:host=127.0.0.1;dbname=elevator',
    'William',
    'mysql'
    );

    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $rows = $database->query('SELECT currentFloor, COUNT(*) AS hits FROM ChangeLog GROUP BY currentFloor');
    $floorarr = [];
    foreach($rows as $row)
    {
        array_push($floorarr, $row['hits']);
    }

    $arr = array(
        'one' => $floorarr[0],
        'two' => $floorarr[1],
        'three' => $floorarr[2]
    );

    
    $floor = json_encode($arr);
    echo $floor; 
?>