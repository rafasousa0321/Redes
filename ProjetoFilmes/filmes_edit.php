<?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(isset($_GET['filme']) && is_numeric($_GET['filme'])){
            $idFIlme = $_GET['filme'];
            $con = new mysqli("localhost", "root", "filmes");
            if($con->connect_error!=0){
                echo "<h1>Ocorreu um erro no acesso à base de dados. <br>" .$con->connect_error. "</h1>";
                exit();
            }
            $sql = "Select * from filmes where id_filme=?";
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("i" , $idFilme);
                $stm->execute();
                $res=$stm->get_result();
                $stm->close();
            }
?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="ISO-8859-1">
                <title>Editar filme</title>
            </head>
            <body>
                <h1>Editar filme</h1>
                <form action="filmes_update.php?filme=<?php echo $filme['id_filme'];?>" method="post">
                    <label>Titulo</label><input type="text" name="titulo" required value="<?php echo $filme['titulo'];?>"><br>
                    <label>Sínopse</label><input type="text" name="sinopse"  value="<?php echo $filme['sinopse'];?>"><br>
                    <label>Quantidade</label><input type="text" name="quantidade"  value="<?php echo $filme['quantidade'];?>"><br>
                    <label>Idioma</label><input type="text" name="idioma"  value="<?php echo $filme['idioma'];?>"><br>
                    <label>Data de Lançamento</label><input type="text" name="data_lancamento"  value="<?php echo $filme['data_lancamento'];?>"><br>
                    <input type="submit" name="enviar"><br>
                </form>
            </body>
        </html>
    <?php
        }
        else{
            echo ('<h1>Ocorreu um erro ao processar o seu pedido.<br> Dentro de segundos será reencaminhado!</h1>');
            header("refresh:5; url=index.php");
        } 
    } 
?>