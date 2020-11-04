<?php
    $a = array("a"=>"maçã", "b"=>"banana");
    $b = array("a"=>"kiwi", "b"=>"ananás", "c"=>"morango");
    $soma_a = array_merge($a, $b);
    $soma_b = array_merge($b, $a);
    print_r($soma_a);
    echo '<br>';
    print_r($soma_b);
?>