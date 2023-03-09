<!--HTML apenas para melhorar a saída do PHP-->
<html>
    <head>
        <meta charset="UTF-8">
        <link  href="css/bootstrap.css" rel="stylesheet">
        <title>Resultado</title>
    </head>
    <body>
        <center>
        <h1>
<!--Código PHP-->
<?php
//Funcao da calculadora:
function calcular($n1, $n2, $acao){
    if ($acao=="soma"){
       return $n1 + $n2;
    }
    elseif ($acao=="subtrai"){
       return $n1 - $n2;
    }
    elseif ($acao=="multiplica"){
       return $n1 * $n2;
    }
    elseif ($acao=="divide"){
       return $n1 / $n2;
    }
    //Nao foi possivel executar 
    else{
        echo ("Tente novamente<br><a href='venda.php'> voltar </a>");
    }
}
//Chamando a funcao e moostrando o resultado
$resultado = calcular($n1 = $_POST ["n1"], $n2 = $_POST ["n2"], $acao = $_POST ["acao"]);
echo ("O valor da operação: $resultado<br><a href='index.php'> voltar </a>");
?>
        </h1>
        </center>
    </body>
</html>
