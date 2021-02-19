<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $nome="";
        $data_nascimento="";
        $nacionalidade="";
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }
        if(isset($_POST['nascionalidade'])){
            $nacionalidade = $_POST['nascionalidade'];
        }
        if(isset($_POST['data_nascimento'])){
            $data_nascimento = $_POST['data_nascimento'];
        }
        $con=new mysqli("localhost", "root", "", "filmes");
        if($con->connect_error!=0){
            echo "Ocorreu um erro no acesso à base de dados. <br>" .$con->connect_error;
            exit;
        }
        else{
            $sql = 'insert into realizadores (id_realizador, nome, data_nascimento, nacionalidade) values (?,?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('isss', $id_realizador, $nome, $data_nascimento, $nacionalidade);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Realizador adicionado com sucesso");</script>';
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
                <title>Adicionar Realizadores</title>
            </head>
            <body>
                <h1>Adicionar Realizadores</h1>
                <form action="realizadores_create.php" method="post">
                    <label>Nome</label><input type="text" name="nome"><br>
                    <label>Data de Nascimento</label><input type="date" name="data_nascimento"><br>
                    <label>nacionalidade</label><input type="text" name="nacionalidade"><br>
                    <input type="submit" name="enviar"><br>
                </form>
            </body>
        </html>
<?php
    }
?>