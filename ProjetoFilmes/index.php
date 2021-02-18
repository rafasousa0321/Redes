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
        <body>
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
            <br>
            <br>
            <a href="filmes_create.php">Novo Filme</a>
            <br>
            <a href="atores_create.php">Novo Ator</a>
            <br>
            <a href="listar_users.php">Lista de Utilizadores</a>
            <br>
            <a href="login.php">Login</a>
        <br>
        </body>
        </html>
<?php
    }
?>