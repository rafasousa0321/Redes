<?php
    $nome = "Funções de manipulação de strings no PHPs";
    $nome_maiusculo = strtoupper($nome);
    echo $nome_maiusculo;//retorna a frase em maiusculas

    $nome = "Funções de manipulação de strings no PHPs";
    $nome_minusculo = strtolower($nome);
    echo $nome_minusculo;//retorna a frase em minusculas

    $nome = "Funções de manipulação de strings no PHPs";
    $parte = substr($nome, 8);
    echo $parte;//retorna um fragmento da string

    $nome = "Linha de Código";
    $parte = substr($nome, 0, 5);
    echo $parte;//retorna um fragmento da string


    $repetido = str_repeat("0", 5);
    echo $repetido;//retorna o numero de vezes do argumento inteiro

    $qnt_char = strlen("Linha de Código");
    echo $qnt_char;//retorna a quantidade de caracteres

    $texto = "Olá, mundo.";
    $novo_texto = str_replace("mundo", "leitor", $texto);
    echo $novo_texto;//sustitui os caracteres

    $texto = "Bem vindo ao Linha de Código!";
    $pos = strpos($texto, "Código");
    echo $pos;//retorna a posição do texto de pesquisa
?>