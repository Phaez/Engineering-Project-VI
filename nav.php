<!DOCTYPE html>
<head>

        <title>Global Navbar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Navigation bar">
        <meta name="robot" content="noindex nofollow">
        <meta http-equiv="author" content="William Davidson">
        <meta http-equiv="pragma" content="no-cache">


        <link href="css/nav.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-inverse fixed-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmain" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span class="navbar-brand mb-0 h1">Project VI</span>
                <div class="collapse navbar-collapse" id="navmain">
                    <ul class="navbar-nav mr-auto">
                        <li id="home" class="nav-item">
                            <a class="nav-link" id="nav-button" href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li id="logbook" class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logbooks</a>
                            <div class="dropdown-menu" aria-labelledby="drop">
                                <a class="dropdown-item" id="drop-item" href="TudorLogbook.php">Tudor's Logbook</a>
                                <a class="dropdown-item" id="drop-item" href="williamlogbook.php">William's Logbook</a>
                                <a class="dropdown-item" id="drop-item" href="HaronLogbook.php">Haron's Logbook</a>
                            </div>
                        </li>
                        <li id="details" class="nav-item">
                            <a class="nav-link" id="nav-button" href="projectdetails.php">Details</a>
                        </li>
                        <li id="plan" class="nav-item">
                            <a class="nav-link" id="nav-button" href="Plan.php" >Plan</a>
                        </li>
                        <li id="about" class="nav-item">
                            <a class="nav-link" id="nav-button" href="about.php" >About</a>
                        </li>
                        <li id="elevator" class="nav-item">
                            <a class="nav-link" id="nav-button" href="elevatorreq.php" >Elevator</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item time">
                            <a class="nav-link " id="currenttime"></a>
                        </li>
                        <?php 
                            session_start();
                            if (isset($_SESSION['username'])){
                                echo '<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropper" data-toggle="dropdown">Hello ' . $_SESSION['username'] . '</a>
                                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="drop">
                                        <a class="dropdown-item" id="drop-item" href="logout.php">Logout</a>
                                        </div>
                                        </li>
                                ';

                            }
                            else {
                                echo '
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle dropper" data-toggle="dropdown">Login</a>
                                        <div class="dropdown-menu dropdown-menu-right dropdownlogin" id="logindrop">
                                            <form action="authenticate.php" method="POST" class="px-4 py-3">
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormEmail1" class="dropdown-in">Username</label>
                                                    <input type="text" name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username">
                                                </div> 
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormPassword1" class="dropdown-in">Password</label>
                                                    <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-xs-7 rememberme">
                                                            <input type="checkbox" class="" tabindex="5" name="remember" id="remember">
                                                            <label for="remember"> Remember Me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary dropdown-in">Sign in</button>
                                            </form>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item dropdown-in" href="register.php">New around here? Sign up</a>
                                            <a class="dropdown-item dropdown-in" href="login.php">Direct Login</a>
                                        </div>
                                    </li>';
                            }
                            ?>
                    </ul>
                </div>
        </nav>
    </div>

    <script src="js/time.js"></script>

</body>
</html>