<?php
    $con=new mysqli("localhost", "root", "", "disciplinas");
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
            <title>Disciplinas</title>
        </head>
        <body style="background-color: #d9d9d9">
            <h1>Lista de Disciplinas</h1>
            <?php
                $stm = $con->prepare('select * from disciplinas');
                $stm->execute();
                $res = $stm->get_result();
                while($resultado = $res->fetch_assoc()){
                    echo '<a href="disciplinas_show.php?disciplina=' .$resultado['id_disciplina'].'">';
                    echo $resultado['disciplina'];
                    echo '</a>';
                    echo '<br>';
                }
                $stm->close();
            ?>
            <h1>Lista de Módulos</h1>
            <?php
                $stm = $con->prepare('select * from modulos');
                $stm->execute();
                $res = $stm->get_result();
                while($resultado = $res->fetch_assoc()){
                    echo '<a href="modulos_show.php?modulo=' .$resultado['id_modulo'].'">';
                    echo $resultado['modulo'];
                    echo '</a>';
                    echo '<br>';
                }
                $stm->close();
            ?>
            <br>
            <br>
            <button><a href="disciplinas_create.php">Nova Disciplina</a></button>
            <br>
            <button><a href="modulos_create.php">Novo Módulo</a></button>
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