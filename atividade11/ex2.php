<?php
    $frase = "Estou a aprender PHP na secundária";
    echo $frase;
    echo '<br>';
    altera ($frase);

    function altera ($frase){
        echo 'Frase alterada: ', str_replace("Estou a aprender PHP na secundária", "Estou a aprender PHP na escola", $frase);
    }
?>