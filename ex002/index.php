<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>PHP exemple</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Today is day " . date("d/M/Y");
        
        echo "The hour is " . date("G:i:s"); //G: hour, i: minutes and s: seconds
    ?>
</body>
</html>