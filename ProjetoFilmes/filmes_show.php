<?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['filme']) || !is_numeric($_GET['filme'])){
            echo '<script>alert("Erro ao abrir livro");</script>';
            echo 'Aguarde um momento. A reencaminhar página';
            header("refresh:5; url=index.php");
            exit();
        }
        $idFilme=$_GET['filme'];
        $con=new mysqli("localhost", "root", "" ,"filmes");
        if($con->connect_error!=0){
            echo 'Ocorreu um erro no acesso à base de dados. <br>' .$con->connect_error;
            exit;
        }
        else{
            $sql = 'select * from filmes where id_filme = ?';
            $stm = $con->prepare ( $sql);
            if($stm!=false){
                $stm->bind_param('i', $idFilme);
                $stm->execute();
                $res=$stm->get_result();
                $filme = $res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo '<br>';
                echo "Aguarde um momento. A reencaminhar página";
                echo '<br>';
                echo ("refresh:5; url=index.php");
            }
        }
    }
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="ISO-8859-1">
            <title>Detalhes</title>
        </head>
        <body>
            <h1>Detalhes do Filme</h1>
            <?php
                if (isset($filme)){
                    echo '<br>';
                    echo $filme['titulo'];
                    echo '<br>';
                    echo $filme['sinopse'];
                    echo '<br>';
                    echo $filme['idioma'];
                    echo '<br>';
                    echo $filme['quantidade'];
                    echo '<br>';
                    echo $filme['data_lancamento'];
                    echo '<br>';
                    echo '<a href="filmes_edit.php?filme='.$filme['id_filme'].'">Editar Filme</a>';
                    echo '<a href="filmes_delete.php?filme='.$filme['id_filme'].'">Eliminar Filme</a>';
                    echo '<br>';
                    echo '<a href="index.php">Voltar</a>';
                }
                else{
                    echo '<h2>Parece que o filme selecionado não exite. <br>Confirme a sua seleção.</h2>';
                }
            ?>
        </body>
    </html>