<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QRCode</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            body{
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                font-size: calc(10px + 2vmin);
                background-color: #f1f2ea;
            }
            svg{
                width: 200px;
                height: 200px;
            }
        </style>
    </head>

    <body>
        <main>{{ QrCode::size(500)->BTC('bc1qyccpyu5j3mju440tflaj3za5f5vx6yz032s6zc') }}</main>
    </body>
</html>