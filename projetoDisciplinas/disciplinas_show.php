<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['disciplina']) || !is_numeric($_GET['disciplina'])){
            echo '<script>alert("Erro ao abrir disciplina");</script>';
            echo 'Aguarde um momento. A reencaminhar página';
            header("refresh:5; url=index.php");
            exit();
        }
        $idDisciplina=$_GET['disciplina'];
        $con=new mysqli("localhost", "root", "" ,"disciplinas");
        if($con->connect_error!=0){
            echo 'Ocorreu um erro no acesso à base de dados. <br>' .$con->connect_error;
            exit;
        }
        else{
            $sql = 'select * from disciplinas where id_disciplina = ?';
            $stm = $con->prepare ( $sql);
            if($stm!=false){
                $stm->bind_param('i', $idDisciplina);
                $stm->execute();
                $res=$stm->get_result();
                $disciplina = $res->fetch_assoc();
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
            <h1>Detalhes da Disciplina</h1>
            <?php
                if (isset($disciplina)){
                    echo "<b>ID da Disciplina:</b>" . $disciplina['id_disciplina'];
                    echo '<br>';
                    echo "<b>Disciplina:</b>" . $disciplina['disciplina'];
                    echo '<br>';
                    echo '<br>';
                    echo '<button><a href="disciplinas_edit.php?disciplina='.$disciplina['id_disciplina'].'">Editar Disciplina</a></button>';
                    echo '<br>';
                    echo '<button><a href="disciplinas_delete.php?disciplina='.$disciplina['id_disciplina'].'">Eliminar Disciplina</a></button>';
                    echo '<br>';
                    echo '<button><a href="index.php">Voltar</a></button>';
                }
                else{
                    echo '<h2>Parece que a disciplina selecionada não exite. <br>Confirme a sua seleção.</h2>';
                }
            ?>
        </body>
    </html>