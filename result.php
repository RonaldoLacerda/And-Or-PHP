<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>And | Or</title>
    <style>
        body{
            text-align: center;
        }
        h4{
            color: blue;
        }
    </style>
</head>
<body>
    <?php
        $nasc = isset($_GET['idad']) && $_GET['idad']!="" ? $_GET['idad'] : 2000;
        $i = date ("Y") - $nasc;
            echo "<h5> Você nasceu em $nasc e tem $i anos.</h5>"; 
        if ($i<16) {
            echo "<h4>Não é obrigatório votar</h4>";
        }else {
            if (($i>=16 && $i<18) || ($i>65)) {
                echo "<h4>seu voto é opcional</h4>";
            }else {
                echo "<h4>o voto é obrigatório</h4>";
            }
        }   
        

    ?>
</body>
</html>
