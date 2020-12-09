<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $dias = array('Domingo' , 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
            $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        ?>
        <form action="res.php" method="post">
            <select name="dias">
            <?php
                for($i=0;$i<7;$i++){
                    echo '<option value="' .$dias[$i]. '">' .$dias[$i]. '</option>';
                }
            ?>
            </select>
            <select name="meses">
            <?php
                for($i=0;$i<12;$i++){
                    echo '<option value="' .$meses[$i]. '">' .$meses[$i]. '</option>';
                }
            ?>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
