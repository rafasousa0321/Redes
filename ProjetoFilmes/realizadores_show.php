<?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['realizador']) || !is_numeric($_GET['realizador'])){
            echo '<script>alert("Erro ao abrir livro");</script>';
            echo 'Aguarde um momento. A reencaminhar página';
            header("refresh:5; url=index.php");
            exit();
        }
        $idRealizador=$_GET['realizador'];
        $con=new mysqli("localhost", "root", "" ,"filmes");
        if($con->connect_error!=0){
            echo 'Ocorreu um erro no acesso à base de dados. <br>' .$con->connect_error;
            exit;
        }
        else{
            $sql = 'select * from realizadores where id_realizador = ?';
            $stm = $con->prepare ($sql);
            if($stm!=false){
                $stm->bind_param('i', $idRealizador);
                $stm->execute();
                $res=$stm->get_result();
                $realizadores = $res->fetch_assoc();
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
            <h1>Detalhes do Realizador</h1>
            <?php
                if (isset($realizadores)){
                    echo '<br>';
                    echo $realizadores['id_realizador'];
                    echo '<br>';
                    echo $realizadores['nome'];
                    echo '<br>';
                    echo $realizadores['data_nascimento'];
                    echo '<br>';
                    echo $realizadores['nacionalidade'];
                    echo '<br>';
                    echo '<br>';
                    echo '<button><a href="realizadores_edit.php?realizador='.$realizadores['id_realizador'].'">Editar Realizador</a></button>';
                    echo '<br>';
                    echo '<button><a href="realizadores_delete.php?realizador='.$realizadores['id_realizador'].'">Eliminar Realizador</a></button>';
                    echo '<br>';
                    echo '<button><a href="index.php">Voltar</a></button>';
                }
                else{
                    echo '<h2>Parece que o realizador selecionado não exite. <br>Confirme a sua seleção.</h2>';
                }
            ?>
        </body>
    </html>