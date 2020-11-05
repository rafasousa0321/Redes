<?php
    function par($num){
    if($num % 2 == 0){
        //par
        $resultado = true;
    }else{
        //impar
        $resultado = false;
    }
    return $resultado;
    }
    $devolve = par(5);
    echo $devolve;
?>