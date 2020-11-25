<?php    

    $ordenado = $_POST["ordenado"];

    $descontosinerentes = $ordenado * 0.15;
    $descontocantina = $ordenado * 0.1;
    $descontotransportes = $ordenado * 0.05;

    $total = $ordenado - $descontosinerentes - $descontocantina - $descontotransportes;

    echo "<b>Ordenado Bruto: </b>" .$ordenado;
    echo "<br>";
    echo "<b>Ordenado Liquido: </b>" .$total;
    echo "<br>";
    echo "<b>Descontos Inerentes: </b>" .$descontosinerentes;
    echo "<br>";
    echo "<b>Descontos com a Cantina: </b>" .$descontocantina;
    echo "<br>";
    echo "<b>Descontos com o Transporte: </b>" .$descontotransportes;
?>