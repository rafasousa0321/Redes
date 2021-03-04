<html>
<body style="background-color: #d9d9d9">
</html>
<?php
    $idDisciplina=$_GET['disciplina'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id_modulo = "";
        $numero = "";
        $modulo = "";
        if(isset($_POST['disciplina'])){
            $disciplina = $_POST['disciplina'];
        }

        $con = new mysqli("localhost","root","","disciplinas");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "update filmes set disciplina=? where id_disciplina=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("s",$disciplina);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Disciplina alterada com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
            else{

            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }