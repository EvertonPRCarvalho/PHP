<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 4;
        $b = 2;
        $maior = $a>$b ? $a:$b;
        #echo "$maior";

        /*VERIFICA SE O USUÁRIO DEVE VOTAR OU É OPCIONAL A PARTIR DA IDADE*/
        $ano_nasc = 1999;
        $ano_atual = 2022;
        $idade = ($ano_atual - $ano_nasc);
        echo "Você tem $idade anos e no seu caso: <br> ".(($idade>=16 && $idade<=64)? "VOTO OBRIGATÓRIO" : "VOTO OPCIONAL");

    ?>
</body>
</html>