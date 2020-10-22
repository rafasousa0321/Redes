<?php
    $x = 1;
    while ($x <= 10){
        $res = $x * 5;
        echo '5 x '. $x .' = '. $res .'<br>';
        $x++;
    }
    echo '<br>';
    echo '<br>';
    $y = 1;
    do{
        $total = $y * 9;
        echo '9 x '. $y .' = '. $total .'<br>';
        $y++;
    }
    while ($y <= 10);
?>