<?php

    require 'nav.html';
    require 'williamlogbook.html';


    $database = new PDO(
        'mysql:host=127.0.0.1; dbname=elevator',
        'William',
        'mysql'
    );

    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $rows = $database->query('SELECT * FROM logbookw ORDER BY date DESC');


    echo '<ul>';

    foreach ($rows as $row)
    {

        echo '<li class="logbookentry">' . $row['log'] . '</li>';
        echo '<p class=logdate>' . $row['date'] . '</p>';
    }

    echo '</ul>';
    
?>
