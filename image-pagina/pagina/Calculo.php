<!--HTML apenas para melhorar a saída do PHP-->
<html>
    <body>
    <center>
        <h1>
<!--Código PHP-->
<?php
//Os dois números digitados na página html
$n1 = $_POST ["n1"];
$n2 = $_POST ["n2"];

//Crias as variáveis de operação
$soma = "";
$subtrai = "";
$multiplica = "";
$divide = "";

//Faz os calculos das váriaveis
$nm = $n1 + $n2;
$ns = $n1 - $n2;
$nmult = $n1 * $n2;
$nd = $n1 / $n2;

    //Com o isset(), você verifica se o campo existe no $_POST, se existir, atualiza as variáveis que você já criou vazias.
    if(isset($_POST ["soma"])){
        echo "A soma é $nm";
    }
    elseif(isset($_POST ["subtrai"])){
        echo "A subtração é $ns";
    }
    elseif(isset($_POST ["multiplica"])){
        echo "A multiplicação é $nmult";
    }
    elseif(isset($_POST ["divide"])){
        echo "A divisão é $nd";
    }
    else{
        echo "Tente novamente";
    }

?>
        </h1>
    </center>
    </body>
</html>