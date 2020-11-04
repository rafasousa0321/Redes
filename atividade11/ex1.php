<?php
    $pais = "Portugal";
    ncaracteres ($pais);
    echo '<br>';
    quartoequinto ($pais);
    echo '<br>';
    maiusculas ($pais);

    function quartoequinto ($pais){
        echo 'O quarto e o quinto caracteres são, respetivamente: ', substr($pais, 3, 2);
    }

    function ncaracteres ($pais){
        echo 'Número de caracteres: ', strlen($pais);
    }

    function maiusculas ($pais){
        echo 'Maiusculas: ', strtoupper($pais);
    }
?>