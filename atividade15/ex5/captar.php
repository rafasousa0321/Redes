<?php    

    $nrapazes = $_POST["nrapazes"];
    $nraparigas = $_POST["nraparigas"];

    $nalunos = $nrapazes + $nraparigas;
    $prapazes = ($nrapazes * 100) / $nalunos;
    $praparigas = ($nraparigas * 100) / $nalunos;

    echo "<b>O número total de alunos é: </b>" .$nalunos;
    echo "<br>";
    echo "<b>A percentagem de rapazes é: </b>" .$prapazes. " %.";
    echo "<br>";
    echo "<b>A percentagem de raparigas é: </b>" .$praparigas. " %.";

?>