<html>
<body style="background-color: #d9d9d9">
</html>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id_disciplina="";
        $disciplina="";
        if(isset($_POST['disciplina'])){
            $disciplina = $_POST['disciplina'];
        }
        $con=new mysqli("localhost", "root", "", "disciplinas");
        if($con->connect_error!=0){
            echo "Ocorreu um erro no acesso à base de dados. <br>" .$con->connect_error;
            exit;
        }
        else{
            $sql = 'insert into disciplinas (disciplina) values (?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('s', $disciplina);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Disciplina adicionado com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
        }
    }
    else{
?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="ISO-8859-1">
                <title>Adicionar Disciplinas</title>
            </head>
            <body style="background-color: #d9d9d9">
                <h1>Adicionar Disciplinas</h1>
                <form action="disciplinas_create.php" method="post">
                    <label>Disciplina</label><input type="text" name="disciplina" required><br>
                    <br>
                    <input type="submit" name="enviar"><br>
                </form>
            </body>
        </html>
<?php
    }
?>