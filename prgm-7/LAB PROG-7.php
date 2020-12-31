<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="refresh" content="1" />
    <style>
        p {
            color: white;
            font-size: 90px;
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        body {
             background-image: url("clock-wallpaper.jpg");
             background-repeat: no-repeat;
             background-size:cover; 
             }

    h1{
        color: white;
        text-align: center;
        font-size: 65px;
        font-family: bold;
    }
    </style>
    <p> <?php 
        date_default_timezone_set('Asia/Kolkata');
        echo date(" h: i : s : a");?> </p>
</head>
<body>
    <h1><b>The Current Time</b></h1>
</body>

</html>