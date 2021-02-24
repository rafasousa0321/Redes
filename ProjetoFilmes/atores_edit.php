<html>
<body style="background-color: #d9d9d9">
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['ator']) && is_numeric($_GET['ator'])){
        $idAtor = $_GET['ator'];
        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from atores where id_ator=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idAtor);
            $stm->execute();
            $res=$stm->get_result();
            $livro = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar Ator</title>
</head>
<body>
    <h1>Editar Ator</h1>
    <form action="atores_update.php?ator=<?php echo $livro['id_ator']; ?>" method="post">
        <label>Nome</label><input type="text" name="nome" required value="<?php echo $livro['nome'];?>"><br>
        <label>Data Nascimento</label><input type="date" name="data_nascimento" required value="<?php echo $livro['data_nascimento'];?>"><br>
        <label>Nacionalidade</label><input type="text" name="nacionalidade" required value="<?php echo $livro['nacionalidade'];?>"><br>
        <input type="submit" name="enviar"><br>
    </form>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=index.php");
 }
}
?>