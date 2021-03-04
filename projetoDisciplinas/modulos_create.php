<html>
<body style="background-color: #d9d9d9">
</html>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id_disciplina="";
        $numero="";
        $modulo="";
        if(isset($_POST['id_disciplina'])){
            $id_disciplina = $_POST['id_disciplina'];
        }
        if(isset($_POST['numero'])){
            $numero = $_POST['numero'];
        }
        if(isset($_POST['modulo'])){
            $modulo = $_POST['modulo'];
        }
        $con=new mysqli("localhost", "root", "", "disciplinas");
        if($con->connect_error!=0){
            echo "Ocorreu um erro no acesso à base de dados. <br>" .$con->connect_error;
            exit;
        }
        else{
            $sql = 'insert into modulos (id_disciplina, numero, modulo) values (?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('iis', $id_disciplina, $numero, $modulo);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Módulo adicionado com sucesso");</script>';
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
                <title>Adicionar Módulos</title>
            </head>
            <body>
                <h1>Adicionar Módulos</h1>
                <form action="modulos_create.php" method="post">
                    <label>ID da Disciplina</label><input type="text" name="id_disciplina"><br>
                    <label>Número</label><input type="text" name="numero"><br>
                    <label>Módulo</label><input type="text" name="modulo"><br>
                    <input type="submit" name="enviar"><br>
                </form>
            </body>
        </html>
<?php
    }
?>