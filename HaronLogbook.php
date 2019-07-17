
<!DOCTYPE html>
<html>
    <head>
        <title>Log Book</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Haron's Logbook">
        <meta name="robot" content="noindex nofollow">
        <meta http-equiv="author" content="Haron Yusuf">
        <meta http-equiv="pragma" content="no-cache">
        <!-- Custom styles for this template -->
        <link href="css/jumbotron.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
        <link href="css/style42.css" rel="stylesheet">
        <link href="css/logbook.css" rel="stylesheet">
    </head>

    <body>
        <div class="bg">
        <div id="nav-placeholder"></div>
        <div class="container-fluid logbookbody" >
            <h1>Haron's</h1>
            <h1>Weekly Logbook</h1>
            <figure>
                <img class="container-fluid group" src="images/LarryYoung.jpg">    
                <figcaption>(Professor) Elevator Wiring and Programming</figcaption>
            </figure>
            <div class="submitlog"></div>
            <div>
                <form action="editharon.php" method="POST">
                    <input type="date" name="date">
                    <input type="text" name="log">
                    <button type="submit">Submit</button>
                </form>
            </div>
            <?php
                $database = new PDO(
                    'mysql:host=127.0.0.1; dbname=elevator',
                    'William',
                    'mysql'
                );
                $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $rows = $database->query('SELECT * FROM logbookh ORDER BY date DESC');
                echo '<ul>';
                foreach ($rows as $row)
                {
                    echo '<li class="logbookentry">' . $row['log'] . '</li>';
                    echo '<p class=logdate>' . $row['date'] . '</p>';
                }
                echo '</ul>';
                ?>
        </div>
                    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
    <script src="js/bootstrap.min.js"></script>

    <script>
            $(function(){
                $("#nav-placeholder").load("nav.php", function(){
                $("#logbook").addClass("active");
            });
            });
        </script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    </div>
    </body>

</html>
