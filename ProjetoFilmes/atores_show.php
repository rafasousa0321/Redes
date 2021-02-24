<?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['ator']) || !is_numeric($_GET['ator'])){
            echo '<script>alert("Erro ao abrir livro");</script>';
            echo 'Aguarde um momento. A reencaminhar página';
            header("refresh:5; url=index.php");
            exit();
        }
        $idAtor=$_GET['ator'];
        $con=new mysqli("localhost", "root", "" ,"filmes");
        if($con->connect_error!=0){
            echo 'Ocorreu um erro no acesso à base de dados. <br>' .$con->connect_error;
            exit;
        }
        else{
            $sql = 'select * from atores where id_ator = ?';
            $stm = $con->prepare ($sql);
            if($stm!=false){
                $stm->bind_param('i', $idAtor);
                $stm->execute();
                $res=$stm->get_result();
                $atores = $res->fetch_assoc();
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
        <body style="background-color: #d9d9d9">
            <h1>Detalhes do Ator</h1>
            <?php
                if (isset($atores)){
                    echo '<br>';
                    echo $atores['id_ator'];
                    echo '<br>';
                    echo $atores['nome'];
                    echo '<br>';
                    echo $atores['data_nascimento'];
                    echo '<br>';
                    echo $atores['nacionalidade'];
                    echo '<br>';
                    echo '<br>';
                    echo '<button><a href="atores_edit.php?ator='.$atores['id_ator'].'">Editar Ator</a></button>';
                    echo '<br>';
                    echo '<button><a href="atores_delete.php?ator='.$atores['id_ator'].'">Eliminar Ator</a></button>';
                    echo '<br>';
                    echo '<button><a href="index.php">Voltar</a></button>';
                }
                else{
                    echo '<h2>Parece que o ator selecionado não exite. <br>Confirme a sua seleção.</h2>';
                }
            ?>
        </body>
    </html>