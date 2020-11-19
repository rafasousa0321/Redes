<?php
    $login="aluno";
    $password="123";
    if($login=="aluno" && $password=="1234"){
        header("Location: main.php");
    }
    else{
        header("Location: erro.php");
    }
?>