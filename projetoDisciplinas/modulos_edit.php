<?php
include "css.php";
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['modulo']) && is_numeric($_GET['modulo'])){
        $idModulo = $_GET['modulo'];
        $con = new mysqli("localhost","root","","disciplinas");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from modulos where id_modulo=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idModulo);
            $stm->execute();
            $res=$stm->get_result();
            $modulo = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar módulo</title>
</head>
<body style="background-color: #d9d9d9">
    <h1>Editar módulo</h1>
    <form action="modulos_update.php?modulo=<?php echo $modulo['id_modulo']; ?>" method="post">
        <label>ID da disciplina</label><input type="text" name="id_disciplina" required value="<?php echo $modulo['id_disciplina'];?>"><br>
        <label>Numero</label><input type="text" name="numero" required value="<?php echo $modulo['numero'];?>"><br>
        <label>Módulo</label><input type="text" name="modulo" required value="<?php echo $modulo['modulo'];?>"><br>
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