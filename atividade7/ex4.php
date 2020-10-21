<?php
    $num = 50;
    switch ($num) {
        case ($num > 100):
            echo 'Valor muito alto';
        break;
        case ($num < 80 && $num > 51):
            echo 'Valor médio';
        break;
        case ($num === 50):
            echo 'Valor perfeito';
        break;
        case ($num <= 10):
            echo 'Valor muito baixo';
        break;
        case ($num == 0):
            echo 'Sem valor';
        break;
    }
?>