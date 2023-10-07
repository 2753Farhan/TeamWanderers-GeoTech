<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>

    <!--Latest and minified CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="nav-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">GeoTech</a>
            </div>

            <div class="collapse navbar-collapse" id="mynavbar">

                <ul class="nav navbar-nav navbar-right">


                    <li>
                        <a href="logout.php">
                            <span class="glyphicon glyphicon-log-out	
                            ">
                            </span> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div style="margin-top: 100px;" class="jumbotron">
            <h1>Welcome to the exciting Journey!!</h1>
            <p></p>
        </div>
    </div>


    <div class="container">
        <div class="row text-center">
            <div class="cameras col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/geoevent.jpg" alt="events">
                    <div class="caption">
                        <button class="btn btn-primary btn-block">
                            <a href="https://en.wikipedia.org/wiki/Geological_event">Learn about Geological events</a>
                        </button>
                    </div>
                </div>
            </div>


            <div class="cameras col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/geomap.jpg" alt="geomap">
                    <div class="caption">
                        <button class="btn btn-primary btn-block">
                            <a href="eventmap.php">Generate Geological events map</a>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer>
        <div class="container">
            <center>
                Copyright © Team Wanderers. All Rights Reserved.
            </center>
        </div>
    </footer>
</body>

</html>