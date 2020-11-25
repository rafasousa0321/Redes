<?php    

    $num = $_POST["n"];

    if($num < 0){
        echo "ERRO";
    }elseif(is_numeric($num)){
        echo "O número é: " .$num;
    }else{
        echo "ERRO";
    }

?>