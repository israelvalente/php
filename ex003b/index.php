<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in PHP</title>
</head>
<body>
    <?php 
   $course = "PHP";
   $year = date('Y');
   echo <<< FRASE
        I am learning
        
            $course in $year

   FRASE;

    ?>
</body>
</html>