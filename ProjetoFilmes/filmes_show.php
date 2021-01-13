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
                $livro = $res->fetch_assoc();
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
                if (isset($livro)){
                    echo '<br>';
                    echo $livro['titulo'];
                    echo '<br>';
                    echo $livro['sinopse'];
                    echo '<br>';
                    echo $livro['idioma'];
                    echo '<br>';
                    echo $livro['quantidade'];
                    echo '<br>';
                    echo $livro['data_lancamento'];
                    echo '<br>';
                }
                else{
                    echo '<h2>Parece que o filme selecionado não exite. <br>Confirme a sua seleção.</h2>';
                }
            ?>
            <a href="filmes_edit.php">Editar Filme</a>
        </body>
    </html>