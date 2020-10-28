<?php
    for($i=1; $i<=20; $i++){
        $nota1 = rand(1,20);
        $nota2 = rand(1,20);
        $nota3 = rand(1,20);
        $media = round(($nota1 + $nota2 + $nota3)/3,2);
        if($media >= 9.5){
            echo '<span style="color: lightgreen">Aprovado </span>- A nota do aluno <span style="color: #0000cc">'. $i. '</span> é <span style="color: #0000cc">'. $media .'</span><br>';
        }
        elseif($media > 8 && $media < 9.5){
            echo '<span style="color: yellow">Recuperação </span>- A nota do aluno <span style="color: #0000cc">'. $i. '</span> é <span style="color: #0000cc">'. $media .'</span><br>';
        }
        elseif($media <= 8){
            echo '<span style="color: red">Reprovado - </span>A nota do aluno <span style="color: #0000cc">'. $i. '</span> é <span style="color: #0000cc">'. $media .'</span><br>';
        }
    }
?>