<?php
    $nome = $_POST['nome'];
    $ano = $_POST['ano'];

    if($ano == null || $nome == null){
        echo "ERRO";
    }elseif($ano <= 2002){
        echo "O cidadão " .$nome. " tem idade para votar.<br>";
    }elseif($ano >= 2002){
        echo "O cidadão " .$nome. " não tem idade para votar.<br>";
    }

    if($nome == "Ana" && $ano == "2000"){
        session_name('Ana');
        session_start();

        $_SESSION['nome']=$nome;
        $_SESSION['ano']=$ano;
    }
?>