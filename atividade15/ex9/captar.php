<?php
    $n = $_GET["valor"];

    if($n==1){
        echo "Mau";
    }elseif($n==2){
        echo "Mediucre";
    }elseif($n==3){
        echo "Médio";
    }elseif($n==4){
        echo "Bom";
    }elseif($n==5){
        echo "Muito Bom";
    }
?>