
<!DOCTYPE html>
<html>
    <style>
    </style>
    <head>
        <title>William Log Book</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="William's Logbook">
        <meta name="robot" content="noindex nofollow">
        <meta http-equiv="author" content="William Davidson">
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
            <h1>William's</h1> 
            <h1>Weekly Logbook</h1>
            <figure>
                <img class="container-fluid group" src="images/WIlliamHeadShot.jpg">
                <figcaption>(Discount Thor) Website Developer and GUI design</figcaption>

            </figure>
            <div class="submitlog"></div>
            <?php
                session_start();
                if (isset($_SESSION['username'])) 
                echo '
            <div>
                <form action="editwilliam.php" method="POST">
            
                    <input type="date" name="date">
                    <input type="text" name="log">
                    <button type="submit">Submit</button>
            
                </form>
            </div>'
            ?>
            <?php
                require_once 'config.php';
                $database = new PDO(
                    'mysql:host=127.0.0.1; dbname='.DB_NAME,
                    DB_USERNAME,
                    DB_PASSWORD
                );

                $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

                $rows = $database->query('SELECT * FROM logbookw ORDER BY date DESC');

                echo '<ul>';
                foreach ($rows as $row)
                {
                    $logbookentry = htmlspecialchars($row['log'], ENT_QUOTES);
                    echo '<li class="logbookentry">' . $logbookentry . '</li>';
                    $logbookentry = htmlspecialchars($row['date'], ENT_QUOTES);
                    echo '<p class=logdate>' . $logbookentry . '</p>';
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

    <script src="js/logbook.js"></script>    

    <script src="js/logbookedit.js"></script>
    </div>
    </body>

</html>

