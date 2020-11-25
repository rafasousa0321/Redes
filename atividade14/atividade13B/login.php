<?php
    $login="aluno";
    $password="1234";
    if($login=="aluno" && $password=="123"){
        header("Location: main.php");
    }
    else{
        header("Location: erro.php");
    }
?>