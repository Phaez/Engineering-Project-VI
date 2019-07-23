<?php


$database = new PDO('mysql:host=127.0.0.1;dbname=elevator',
    'William',
    'mysql'
    );

    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $rows = $database->query('SELECT * FROM ChangeLog ORDER BY nodeID');

    $one = 0;
    $two = 0;
    $three = 0;

    foreach($rows as $row)
    {
        if ($row['currentFloor'] == 1) {
            $one++;
        }
        elseif ($row['currentFloor'] == 2) {
            $two++;
        }
        else{
            $three++;
        }
    }
    $arr = array(
        'one' => $one,
        'two' => $two,
        'three' => $three
    );
    $varia = [];
    array_push($varia, $one, $two, $three);
    $floor = json_encode($arr);
    echo $floor; 
?>