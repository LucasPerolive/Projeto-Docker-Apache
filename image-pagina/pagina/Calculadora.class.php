<?php
class Calculadora{
    var $total;
    var $acao_formatada;

    public function calcula($numero1, $numero2, $acao){
        

        if($numero1 != null && $numero2 != null){     
            if(is_numeric($numero1) && is_numeric($numero2)){
                $numero1 = (float)$numero1;
                $numero2 = (float)$numero2;
                    switch($acao){
                        case "soma":
                            $this->total = $numero1 + $numero2;
                        break;
                        case "subtrai":
                            $this->total = $numero1 - $numero2;
                        break;
                        case "multiplica":
                            $this->total = $numero1 * $numero2;
                        break;
                        case "divide":
                            $this->total = $numero1 / $numero2;
                        break;
                    };
            }
            else{
                $this->total = "invalido";
            }
        }
        else{
            $this->total = "vazio";
        }
    }
    public function confere_operacao($acao){
        switch($acao){
            case "soma":
                $this->acao_formatada = "soma";
            break;
            case "subtrai":
                $this->acao_formatada = "subtração";
            break;
            case "multiplica":
                $this->acao_formatada = "multiplicação";
            break;
            case "divide":
                $this->acao_formatada = "divisão";
            break;
        }
    }

    

    public function imprimi(){
        if($this->total == "vazio"){
            echo ("<div class='alert alert-warning' role='alert'> 
            <h3>Os campos dos números estão vazios!</h3></div>");
        }
        elseif($this->total == "invalido"){
            echo("<div class='alert alert-danger' role='alert'>
            <h3>Os valores inseridos são inválidos!</h3></div>");
        }
        else{
            echo("<div class='alert alert-success' role='alert'>
            <h3>O valor da $this->acao_formatada é de: $this->total</h3></div>");
        }
    }
}
?>
