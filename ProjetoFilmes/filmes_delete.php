<html>
<body style="background-color: #d9d9d9">
<html>
<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['filme']) && is_numeric($_GET['filme'])){
        $idFilme = $_GET['filme'];
        echo $idFilme;
        $con = new mysqli("localhost","root","","filmes");
        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        else{
        $sql = "delete from filmes where id_filme=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idFilme);
            $stm->execute();
            $stm->close();
            echo ("<script>alert('Livro eliminado com sucesso');</script>");
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