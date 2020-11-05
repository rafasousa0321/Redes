<?php
    $n1 = rand(0, 20);
    $n2 = rand(0, 20);
    function percentagem($n1, $n2){
        $total = $n1 + $n2;
        $p1 = ($n1 / $total) * 100;
        return $p1;
    }

    echo 'A percentagem de rapazes é: ' . round(percentagem($n1, $n2)) . '%';
    echo '<br>';
    echo 'A percentagem de raparigas é: ' . round(percentagem($n2, $n1)) . '%';
?>