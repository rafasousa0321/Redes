<?php
    $temp = 0;
    echo '<h1>A temperatura é de '. $temp .'º</h1>';
    if ($temp<=3) {
        echo 'Dia gelado';
    }
    elseif ($temp > 3 && $temp <=15){
        echo 'Dia frio';
    }
    elseif ($temp > 15 && $temp <=29){
        echo 'Dia agradavel';
    }
    else {
        echo '... começa a ficar demasiado calor';
    }
?>