<?php
    $pacientes = array (
        'Joana'=>20,
        'Rui'=>25,
        'Ana'=>30,
        'Pedro'=>24,
        'Carla'=>23
    );
    foreach($pacientes as $nome=>$idade){
        echo 'O paciente ' . $nome . ' tem ' . $idade . ' anos.<br>';
    }
?>