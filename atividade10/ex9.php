<?php
    $minha_multa['carro'] = 'Pálio';
    $minha_multa['valor'] = 178.00;
    $minha_multa['carro'] .= 'ED 1.0';
    $minha_multa['valor'] += 20;
    foreach ($minha_multa as $valor) {
        echo $valor. '<br>';
    }

    echo '<br>';
    $comidas[] = 'Lazanha';
    $comidas[] = 'Pizza';
    $comidas[] = 'Macarrão';
    $comidas[1] = 'Pizza Calabreza';
    foreach ($comidas as $valor) {
        echo $valor. '<br>';
    }
?>