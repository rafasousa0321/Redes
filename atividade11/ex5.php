<?php
    $equipas = array (
        'FCP' => array(
            'Nome Completo' => 'Futebol Clube do Porto',
            'Estadio' => 'Estádio do Dragão',
            'Localidade' => 'Porto',
            'País' => 'Portugal'
        ),
        'FCB' => array(
            'Nome Completo' => 'Futbol Club Barcelona',
            'Estadio' => 'Camp Nou',
            'Localidade' => 'Barcelona',
            'País' => 'Espanha'
        ),
        'MUFC' => array(
            'Nome Completo' => 'Manchester United Football Club',
            'Estadio' => 'Old Trafford',
            'Localidade' => 'Manchester',
            'País' => 'Inglaterra'
        ),
        'JFC' => array(
            'Nome Completo' => 'Juventus Football Club',
            'Estadio' => 'Juventus Stadium',
            'Localidade' => 'Torino',
            'País' => 'Itália'
        )
        );

     foreach ($equipas as $clubes => $equipas){
         echo '<h1>' . $clubes . '</h1>';
         foreach ($equipas as $nome => $detalhe){
             echo '<b>' . $nome . '</b>: ' . $detalhe . '<br>';
         }
     }
?>