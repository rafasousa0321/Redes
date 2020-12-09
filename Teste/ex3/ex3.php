<?php
    for($i=0;$i<15;$i++){
        $num[$i] = rand(1,1000);
    if(($num[$i] % 2) == 0){
        echo "O número " .$num[$i]. " é par. <br>";
    }else{
        echo "O número " .$num[$i]. " é impar. <br>";
    }
    }
?>