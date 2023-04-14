<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //0x = hexadecimal 0b = binário 0 = Octal
        $num = 0x1A;
        //
        $v = 45.2;
        //
        $n = 3e2; //3x(10)^2
        //
        echo "O valor da variável num é $num, o da n é $n e o tipo da variável v é " . var_dump($v);
        



    ?>
</body>
</html>