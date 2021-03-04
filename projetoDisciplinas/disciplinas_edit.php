<?php
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['disciplina']) && is_numeric($_GET['disciplina'])){
        $idDisciplina = $_GET['disciplina'];
        $con = new mysqli("localhost","root","","disciplinas");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from filmes where id_disciplina=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idDisciplina);
            $stm->execute();
            $res=$stm->get_result();
            $disciplina = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar disciplina</title>
</head>
<body style="background-color: #d9d9d9">
    <h1>Editar disciplina</h1>
    <form action="disciplinas_update.php?disciplina=<?php echo $disciplina['id_disciplina']; ?>" method="post">
        <label>Disciplina</label><input type="text" name="disciplina" required value="<?php echo $disciplina['disciplina'];?>"><br>
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