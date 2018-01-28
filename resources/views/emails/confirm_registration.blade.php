<!DOCTYPE html>
<html>
    <head>
        <title>Confirm Registration.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                margin: 0;
                padding: 5%;
                color: #333;
                font-family: sans-serif;
            }

            .container {
                text-align: justify;
                width: 80% !important;
                background: #eee;
                padding: 10%;
                border-radius: 15px;
            }

            .header {
                font-size: 42px;
                margin-bottom: 40px;
                color: #2dca98;
                border-bottom: 1px solid #ddd;
            }
            
            
            .content {
                text-align: justify;
            }

            a {
                text-align: center;
                display: block;
                background: #2dca98;
                color: white;
                text-decoration: none;
                padding: 20px;
                border-radius: 15px;
                text-transform: uppercase;
                transition: ease-out 1s all;
            }
            a:hover {
                background-color: #1d6e54;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                KasXpress
            </div>
            <div class="content">
                Dear <b>{{ $user->name }}</b>,
                <p>
                    Terima kasih telah mendaftarkan diri sebagai <b>{{ ucwords($user->role) }}</b> di kasXpress.
                </p>
                <p>
                    Anda dapat {{ $user->role == 'investor' ? 'memberikan' : 'memperoleh' }} pinjaman dengan 
                    memberikan data yang kami perlukan dan setelah melalui verifikasi oleh Tim KasXpress. 
                    Pinjaman dibiayai dengan dana yang dihimpun secara kolektif dari para investor yang 
                    tertarik membiayai piutang tersebut.                    
                </p>
                <a href="{{ route('account.confirmEmail', $user->email) }}">Klik untuk Aktivasi</a>
            </div>
        </div>
    </body>
</html>
