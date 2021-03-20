<?php
    include "css.php";
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $_GET['c'];
	$d = $_GET['d'];
	
    if($a == 127){
		echo "Endereço reservado a loopback ou localhost";
		echo "<br>";
		echo "IP Reservado e Invalido";
	}
	elseif($a >= 1 && $a <= 126 && $b <= 255 && $c <= 255 && $d <= 254){
		echo "Classe A";
	}
	elseif($a >= 128 && $a <= 191 && $b <= 255 && $c <= 255 && $d <= 254){
		echo "Classe B";
	}
	elseif($a >= 192 && $a <= 223 && $b <= 255 && $c <= 255 && $d <= 254){
		echo "Classe C";
	}
	elseif($a >= 224 && $a <= 239 && $b <= 255 && $c <= 255 && $d <= 254){
		echo "Classe D";
	}
	elseif($a >= 240 && $a <= 254 && $b <= 255 && $c <= 255 && $d <= 254){
		echo "Classe E";
	}
	else{
		echo "IP inválido";
	}
    
    echo "<br>";
    if($a == 10){
        echo "IP Privado";
    }
    elseif($a == 172 && ($b >= 16 && $b <= 1)){
        echo "IP Privado";
    }
    elseif($a == 192 && $b == 168 && ($c > 0 && $c <= 255)){
        echo "IP Privado";
    }
    elseif($a == 0){
        echo "IP reservado e Invalido";
    }
    elseif($a == 128 && $b == 0){
        echo "IP Reservado";
    }
    elseif($a == 191 && $b == 255){
        echo "IP Reservado";
    }
    elseif($a == 192 && $b == 0 && $c == 0){
        echo "IP Reservado";
    }
    elseif($a == 223 && $b == 255 && $c == 255){
        echo "IP Reservado";
    }
    elseif($a >= 224 && $a <= 239){
        echo "IP Reservado";
    }
    elseif($a >= 240 && $a <= 255){
        echo "IP Reservado";
    }
    elseif($a == 255){
        echo "IP Invalido";
    }
    elseif($b == 0 && $c == 0 && $d == 0){
        echo "IP Invalido";
    }
    elseif($c == 0 && $d == 0){
        echo "IP Invalido";
    }
    elseif($d == 0 && $d == 255){
        echo "IP Invalido";
    }
    else{
        echo "IP publico";
    }
        echo"<br>";
        echo"<button><a href='form.php'>Voltar</a></button>";

?>