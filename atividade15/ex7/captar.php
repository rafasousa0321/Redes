<?php    

    $idade = $_POST["idade"];

    if($idade<=18){
        echo "Você tem " .$idade. " anos - é <b>MENOR</b> de idade.";
    }elseif($idade >= 18 && $idade <= 100){
        echo "Você tem " .$idade. " anos - é <b>MAIOR</b> de idade.";
    }elseif($idade >= 100){
        echo "Você é um Dinossauro!.";
    }

?>