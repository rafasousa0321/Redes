<html>
<body style="background-color: #d9d9d9">
</html>
<?php
    include "css.php";
    $idModulo=$_GET['modulo'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id_disciplina = "";
        $numero = "";
        $modulo = "";
        if(isset($_POST['id_disciplina'])){
            $id_disciplina = $_POST['id_disciplina'];
        }
        if(isset($_POST['numero'])){
            $numero = $_POST['numero'];
        }
        if(isset($_POST['modulo'])){
            $modulo = $_POST['modulo'];
        }
        $con = new mysqli("localhost","root","","disciplinas");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "update modulos set id_disciplina=?, numero=?, modulo=? where id_modulo=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("iisi",$id_disciplina, $numero, $modulo, $idModulo);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Módulo alterada com sucesso!!");</script>';
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