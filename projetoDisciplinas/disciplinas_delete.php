<html>
<body style="background-color: #d9d9d9">
<html>
<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['disciplina']) && is_numeric($_GET['disciplina'])){
        $idDisciplina = $_GET['disciplina'];
        echo $idDisciplina;
        $con = new mysqli("localhost","root","","disciplinas");
        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        else{
        $sql = "delete from disciplinas where id_disciplina=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idDisciplina);
            $stm->execute();
            $stm->close();
            echo ("<script>alert('Disciplina eliminada com sucesso');</script>");
            echo 'Aguarde um momento. A reencaminar página';
            header("refresh:5; url=index.php");
        }
        else{
            echo '<br>';
            echo $con->error;
            echo '<br>';
            echo "Aguarde um momento. A reencaminhar página";
            header("refresh:5; url=index.php");
        }
    }
}
 else{
    echo ("<h1>Ocorreu um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=index.php");
    }
}
else{
    echo ("<h1>Ocorreu um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=index.php");
    }
?>