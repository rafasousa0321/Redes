<?php
    for($i=1; $i<=20; $i++) {
        $nota = rand(1,20);
        switch($nota){
            case ($nota < 8):
                echo '<span style="color: red">Reprovado </span>- A nota do aluno <span style="color: #0000cc">'. $i. '</span> é <span style="color: #0000cc">'. $nota .'</span><br>';
            break;
            case ($nota > 8 && $nota <9.4):
                echo '<span style="color: red">Reprovado </span>- A nota do aluno <span style="color: #0000cc">'. $i. '</span> é <span style="color: #0000cc">'. $nota .'</span><br>';
            break;
            default:
            echo '<span style="color: lightgreen">Aprovado - </span>A nota do aluno <span style="color: #0000cc">'. $i. '</span> é <span style="color: #0000cc">'. $nota .'</span><br>';
        }
    }

?>