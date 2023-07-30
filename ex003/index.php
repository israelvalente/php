<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    // 0x = hexadecimal
    // 0b = binário
    // 0 = octal
        // $num = 0x1A;
        // echo "O valor da variável é $num";

        // $casado = false;
        // echo "The value casado is $casado "

        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);
        
        class Person {
            private string $name;
        }
        $p = new Person;
        var_dump($p);
        
        // Object e Array: tipos primitivos compostos.
    ?>
</body>
</html>