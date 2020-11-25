<?php
    $n1 = $_POST["1N"];
    $n2 = $_POST["2N"];
    $op = $_POST["operacao"];

    function soma ($num1, $num2){
        $soma = $num1 + $num2;
        return $soma;
    }

    function sub ($num1, $num2){
        $sub = $num1 - $num2;
        return $sub;
    }

    function mult ($num1, $num2){
        $mult = $num1 * $num2;
        return $mult;
    }

    function div ($num1, $num2){
        $div = $num1 / $num2;
        return $div;
    }
    
    switch($op){
        case($op=="soma"):
            echo "<b>Soma: </b>" .soma($n1, $n2)."<br>";
        break;
        case($op=="sub"):
            echo "<b>Subração: </b>" .sub($n1, $n2)."<br>";
        break;
        case($op=="div"):
            echo "<b>Divisão: </b>" .div($n1, $n2)."<br>";
        break;
        case($op=="mult"):
            echo "<b>Multiplicação: </b>" .mult($n1, $n2)."<br>";
        break;
    }
?>