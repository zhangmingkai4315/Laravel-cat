<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--
               {{ HTML::style('css/zebra/zebra_form.css')}}

               <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
       <!--
        {{ HTML::script('./js/jquery1.9.js')}}
        {{ HTML::style('css/bootstrap.css')}}
        {{ HTML::style('css/bootstrap-theme.min.css')}}
        {{ HTML::script('./js/bootstrap.min.js')}}
        -->
        <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <!-- Optional theme -->
        <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        -->

        <style type='text/css'>
            body {
                background-color: #f9f9f9;
            }

            .shadow {
                    -moz-border-radius: 10px;
                    -webkit-border-radius: 10px;
                    border-radius: 10px;
                    -moz-box-shadow: 10px 10px 10px 10px #ccc;
                    -webkit-box-shadow: 10px 10px 10px 10px #ccc;
                    box-shadow: 10px 10px 10px 10px #ccc;
                    /* For IE 8 */
                    -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000)";
                    /* For IE 5.5 - 7 */
                    filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000');
                }
         </style>
        <!--{{ HTML::style('css/layout.css') }}

        {{ HTML::script('js/zebra/zebra_form.js')}}
        -->

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
