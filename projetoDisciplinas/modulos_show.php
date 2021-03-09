<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['modulo']) || !is_numeric($_GET['modulo'])){
            echo '<script>alert("Erro ao abrir modulo");</script>';
            echo 'Aguarde um momento. A reencaminhar página';
            header("refresh:5; url=index.php");
            exit();
        }
        $idModulo=$_GET['modulo'];
        $con=new mysqli("localhost", "root", "" ,"disciplinas");
        if($con->connect_error!=0){
            echo 'Ocorreu um erro no acesso à base de dados. <br>' .$con->connect_error;
            exit;
        }
        else{
            $sql = 'select * from modulos where id_modulo = ?';
            $stm = $con->prepare ( $sql);
            if($stm!=false){
                $stm->bind_param('i', $idModulo);
                $stm->execute();
                $res=$stm->get_result();
                $modulo = $res->fetch_assoc();
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
            <h1>Detalhes do Modulo</h1>
            <?php
                if (isset($modulo)){
                    echo "<b>ID do Módulo:</b>" . $modulo['id_modulo'];
                    echo '<br>';
                    echo "<b>ID da Disciplina:</b>" . $modulo['id_disciplina'];
                    echo '<br>';
                    echo "<b>Número:</b>" . $modulo['numero'];
                    echo '<br>';
                    echo "<b>Módulo:</b>" . $modulo['modulo'];
                    echo '<br>';
                    echo '<br>';
                    echo '<button><a href="modulos_edit.php?modulo='.$modulo['id_modulo'].'">Editar Módulo</a></button>';
                    echo '<br>';
                    echo '<button><a href="modulos_delete.php?modulo='.$modulo['id_modulo'].'">Eliminar Módulo</a></button>';
                    echo '<br>';
                    echo '<button><a href="index.php">Voltar</a></button>';
                }
                else{
                    echo '<h2>Parece que a disciplina selecionada não exite. <br>Confirme a sua seleção.</h2>';
                }
            ?>
        </body>
    </html>