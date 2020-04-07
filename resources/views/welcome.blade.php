<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sterling</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #272727;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            ul {
                margin: 0;
                padding: 0;
                display: flex;
            }

            ul li {
                list-style: none;
                color: #484848;
                font-size: 80px;
                letter-spacing: 15px;
                animation: lighting 1.4s linear infinite;
            }

            ul li:nth-child(1) {
                animation-delay: 0.1s;
            }

            ul li:nth-child(2) {
                animation-delay: 0.2s;
            }

            ul li:nth-child(3) {
                animation-delay: 0.3s;
            }

            ul li:nth-child(4) {
                animation-delay: 0.4s;
            }

            ul li:nth-child(5) {
                animation-delay: 0.5s;
            }

            ul li:nth-child(6) {
                animation-delay: 0.6s;
            }

            ul li:nth-child(7) {
                animation-delay: 0.7s;
            }

            ul li:nth-child(8) {
                animation-delay: 0.8s;
            }

            ul li:nth-child(9) {
                animation-delay: 0.9s;
            }

            ul li:nth-child(10) {
                animation-delay: 1s;
            }

            ul li:nth-child(11) {
                animation-delay: 1.1s;
            }

            ul li:nth-child(12) {
                animation-delay: 1.2s;
            }

            @keyframes lighting {
                0% { color: #484848;
                text-shadow: none;}

                90% { color: #484848;
                text-shadow: none;}

                100% { color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 50px #fff900;}
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <ul>
                        <li>S</li>
                        <li>t</li>
                        <li>e</li>
                        <li>r</li>
                        <li>l</li>
                        <li>i</li>
                        <li>n</li>
                        <li>g</li>
                        <li>-</li>
                        <li>A</li>
                        <li>P</li>
                        <li>I</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
