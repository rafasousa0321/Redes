<?php
    $array = array(
        array(0,0),
        array(1,0),
        array(2,0),
        array(3,0),
        array(4,0),
        array(5,1),
        array(6,1),
        array(7,1),
        array(8,1),
        array(9,1),
    );

    $maior = 0;
    $soma = 0;
    $segundomaior = $array[0][0];

    foreach ($array as $valor){
	foreach($valor as $key=>$valor1){
		if ($valor1 > $maior)
	 	    {
                $maior = $valor1;
    	    }
	    }   	
    }
    for ($linha=0; $linha<10; $linha++) {
        for ($coluna=0; $coluna<2; $coluna++) {
            if($segundomaior < $array[$linha][$coluna] && $array[$linha][$coluna]<$maior){
                $segundomaior = $array[$linha][$coluna];
            }
            $soma += $array[$linha][$coluna];
        }
    }
    echo "Maior: $maior<br>";
    echo "Soma: $soma<br>";
    echo "Segundo maior: $segundomaior";
?>