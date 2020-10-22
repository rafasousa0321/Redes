<?php
    for($i=1; $i<=20; $i++) {
        $nota = rand(1,20);
        if($nota < 8){
            echo '<span style="color: red">Reprovado </span>- A nota do aluno <span style="color: #0000cc">'. $i. '</span> é <span style="color: #0000cc">'. $nota .'</span><br>';
        }
        elseif($nota > 8 && $nota < 9.4){
            echo '<span style="color: yellow">Admitido a exame </span>- A nota do aluno <span style="color: #0000cc">'. $i. '</span> é <span style="color: #0000cc">'. $nota .'</span><br>';
        }
        else{
            echo '<span style="color: lightgreen">Aprovado - </span>A nota do aluno <span style="color: #0000cc">'. $i. '</span> é <span style="color: #0000cc">'. $nota .'</span><br>';
        }
    }

?>