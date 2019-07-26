<!DOCTYPE HTML>
<head>
    <link href="css/jumbotron.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
    <link href="css/style42.css" rel="stylesheet">
    <link href="css/elevator.css" rel="stylesheet">
    <link href="css/Chart.css" rel="stylesheet">
</head>

<body>
<div class="bg">
    <div id="nav-placeholder"></div>
    <div class="container-fluid">

        <?php
            session_start();


            if (isset($_SESSION['username'])) {
                echo '
                <div class="row">
                    <div class="col-1">
                    <div class="floor">
                        <button id="fThree" type="button" class="btn btn-primary elevatorbtn">Floor 3</button>
                    </div>

                    <div class="floor">
                        <button id="fTwo" type="button" class="btn btn-primary elevatorbtn">Floor 2</button>
                    </div>
                    <div class="floor">
                        <button id="fOne" type="button" class="btn btn-primary elevatorbtn">Floor 1</button>
                    </div>
                    <div class="floor">
                        <h>Current Floor:</h>
                        <h id="floornum"></h>
                    </div>
                    </div>
                    <div id="chart-container" class="col-3">
                        <canvas id="mychart" class="piechart"></canvas>
                    </div>      
                </div>
                '

            ;
                require_once 'config.php';
                $database = new PDO(
                    'mysql:host=127.0.0.1; dbname='.DB_NAME,
                    DB_USERNAME,
                    DB_PASSWORD
                );

                $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

                $rows = $database->query('SELECT * FROM ChangeLog ORDER BY nodeID DESC');

                echo '<ul>';
                foreach ($rows as $row)
                {
                    echo '<li class="">Date: ' . $row['date'] . ' Time:' . $row['time'] . ' ID: ' .  $row['nodeID'] .' Status:'. $row['status'] .' Current floor: ' . $row['currentFloor'] . ' Requested floor: ' . $row['requestedFloor']    .'</li>';

                }
                echo '</ul>';
            }
            else {
                echo '<h1>You must be logged in to access the Elevator Controls</h1>';
            }

        ?>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>

    <script src="js/showFloor.js"></script>
    <script src="js/setFloor.js"></script>
    <script src="js/Chart.js"></script>
    <script src="js/utils.js"></script>



    <script src="js/graph.js"></script>
    
    <script>
        $(function(){
            $("#nav-placeholder").load("nav.php", function(){
                $("#elevator").addClass("active");
            });
        });
    </script>

    </div>

</body>
