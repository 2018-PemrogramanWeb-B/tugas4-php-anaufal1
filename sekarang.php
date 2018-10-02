<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
date_default_timezone_set("Asia/Jakarta");
    if(date("H") < 12){
        echo "PAGIIII!!!!";
    }
    elseif (date("H") < 15){
        echo "SIAAAANGG!!!!";
    }
    elseif (date("H") < 18){
        echo "SORE!!!!";
    }
    else {
        echo "sssshhhhttt udah malam";
    }
    ?>
</body>
</html>