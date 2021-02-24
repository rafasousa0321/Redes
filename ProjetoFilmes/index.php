<?php
    $con=new mysqli("localhost", "root", "", "filmes");
    if($con->connect_error!=0){
        echo "Ocorreu um erro no acesso à base de dados" .$con->connect_error;
        exit;
    }
    else{
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="ISO-8859-1">
            <title>filmes</title>
        </head>
        <body style="background-color: #d9d9d9">
            <h1>Lista de filmes</h1>
            <?php
                $stm = $con->prepare('select * from filmes');
                $stm->execute();
                $res = $stm->get_result();
                while($resultado = $res->fetch_assoc()){
                    echo '<a href="filmes_show.php?filme=' .$resultado['id_filme'].'">';
                    echo $resultado['titulo'];
                    echo '</a>';
                    echo '<br>';
                }
                $stm->close();
            ?>
            <h1>Lista de Atores</h1>
            <?php
                $stm = $con->prepare('select * from atores');
                $stm->execute();
                $res = $stm->get_result();
                while($resultado = $res->fetch_assoc()){
                    echo '<a href="atores_show.php?ator=' .$resultado['id_ator'].'">';
                    echo $resultado['nome'];
                    echo '</a>';
                    echo '<br>';
                }
                $stm->close();
            ?>
            <h1>Lista de Realizadores</h1>
                <?php
                $stm = $con->prepare('select * from realizadores');
                $stm->execute();
                $res=$stm->get_result();
                while($resultado = $res->fetch_assoc()){
                echo '<a href="realizadores_show.php?realizador='.$resultado['id_realizador'].'">';
                echo $resultado['nome'];
                echo '</a>';
                echo '<br>';
            }
            $stm->close();
            ?>
            <br>
            <br>
            <button><a href="filmes_create.php">Novo Filme</a></button>
            <br>
            <button><a href="atores_create.php">Novo Ator</a></button>
            <br>
            <button><a href="realizadores_create.php">Novo Realizador</a></button>
            <br>
            <button><a href="listar_users.php">Lista de Utilizadores</a></button>
            <br>
            <button><a href="login.php">Login</a></button>
        <br>
        </body>
        </html>
<?php
    }
?>