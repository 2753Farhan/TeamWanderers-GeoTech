<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nasa Space Apps Challange</title>
    <meta name="author" content="SarathKumar">
    <meta name="content" description=" Nasa Space Apps website using Bootstrap framework.">
    <meta name="keywords" description="Nasa Space Apps,API,Data Science">
    <meta name="title" content="Team Wanderers">
    <meta http-equiv="refresh" content="20">

    <!--Latest compiled and minified css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="index.css">
    <!--Can add external CSS here to override the CSS in bootstrap(custom-styles)-->

    <style>
        .footer {
            position: absolute;
            background-color: rgb(16, 16, 16);
            color: rgb(157, 157, 157);
            width: 100%;
            height: 40px;
            padding: 10px 0px;
            bottom: 0;
        }
    </style>
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
                <a class="navbar-brand" href="index.html">GeoTech</a>
            </div>

            <div class="collapse navbar-collapse" id="mynavbar">

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="register.php">
                            <span class="glyphicon glyphicon-user">
                            </span> Sign Up
                        </a>
                    </li>

                    <li>
                        <a href="login.php">
                            <span class="glyphicon glyphicon-log-in">
                            </span> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="content">
        <div class="banner-image">
            <center>
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <h1>"Unearthing the Geological Frontier"</h1>
                        <p> Click below to start your journey</p>
                        <a href="login.php" class="button">Explore</a>
                    </div>
                </div>
            </center>
        </div>
    </div>

    <div class="container footer">
        <center>
            Copyright © Team Wanderers. All Rights Reserved 
        </center>
    </div>


</body>

</html>