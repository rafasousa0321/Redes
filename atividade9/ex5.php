<?php
    $soma = 0;
    $num = 0;
    while($soma < 1000){
        $num = rand(0, 100);
        $soma = $soma + $num;
        echo $soma . '<br>';
    }
?>