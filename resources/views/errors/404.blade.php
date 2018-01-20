<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                font-weight: 400;
                margin-bottom: 40px;
                padding: 0px 50px;
                border-radius: 10px
            }
            
            .header {
                font-size: 10em;
                font-family: sans-serif;
                font-weight: 1000;  
                margin-bottom: 0px !important;
                padding-bottom: 0px !important;
            }
            
            .back {
                font-size: 1.5em;
                padding: 20px;
                border: 1px solid #eee;
                border-radius: 5px;
                width: 100px;
                margin: 0px auto;
                text-decoration: none;
                color: #B0BEC5;
                transition: ease-in all .5s;
            }
            .back:hover{
                border-radius: 100%;
                box-shadow: 0px 0px 10px 1px #eee;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="header">404</div>
                <div class="title">Sorry this page currently under development.</div>
                <a class="back"  href="{{ route('front.index') }}">Go Back...</a>
            </div>
        </div>
    </body>
</html>
