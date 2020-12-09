<?php
    $maior = 0;
    $menor = 1000;
    $soma = 0;
    $produto = 1;
    for($i=0;$i<20;$i++){
       $num[$i] = rand(1,1000);
       echo $num[$i] . "<br>";
       $soma = $soma + $num[$i];
       $produto = $produto * $num[$i];
    }
    for($i=1;$i<20;$i++){
        if($maior > $num[$i]){
            $maior = $maior;
        }else{
            $maior=$num[$i];
        }
        for($k=1;$k<20;$k++){
            if($maior>$num[$k]){
                $maior = $maior;
            }else{
                $maior = $num[$k];
            }
        }
    }

     for($j=1;$j<20;$j++){
         if($menor < $num[$j]){
             $menor = $menor;
         }else{
             $menor=$num[$j];
         }
         for($h=1;$h<20;$h++){
             if($menor<$num[$h]){
                 $menor = $menor;
             }else{
                 $menor = $num[$h];
             }
         }
    }

    $media = $soma / 20;
    echo "<br>";
    echo "O maior número é: " .$maior. "<br>";
    echo "O menor número é: " .$menor. "<br>";
    echo "O produto de todos os números é: " .$produto. "<br>";
    echo "A média de todos os números é: " .$media. "<br>";
?>