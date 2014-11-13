<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <link type="text/css" rel="stylesheet" href="/css/layout.css"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js">
        </script>
        <style type='text/css'>
            body {
                background-color: ;
            }
            /*
            .navbar {
                background-color: #2d6ca2;
                background-image: none;
                border-color: #2d6ca2;
                -moz-box-shadow: 2px 2px 2px 0px #ccc;
                -webkit-box-shadow: 2px 2px 2px 2px #ccc;
                box-shadow: 2px 2px 2px 2px #ccc;
                background-repeat: no-repeat;
                filter: none;
            }
            */
            .shadow {
                    -moz-box-shadow: 10px 10px 10px 10px #ccc;
                    -webkit-box-shadow: 10px 10px 10px 10px #ccc;
                    box-shadow: 10px 10px 10px 10px #ccc;
                    /* For IE 8 */
                    -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000)";
                    /* For IE 5.5 - 7 */
                    filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000');
                }
        </style>
        {{ HTML::style('css/layout.css') }}

        <title>
            CatPlant
        </title>
    </head>
    <body>
    <div class="header_part">
     @include("header")
    </div>
    <div class="content_part">
     @yield("content")
        </div>
    <div class="footer_part">
     @include("footer")
    </div>
    </body>
</html>
