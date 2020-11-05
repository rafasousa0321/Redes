<?php
    $raio = 20;
    $pi = 3.14;
    function area($raio, $pi){
        $area = $pi * ($raio ** 2);
        return $area;
    }
    $devolve = area($raio, $pi);
    echo 'A area é: ' . $devolve;
?>