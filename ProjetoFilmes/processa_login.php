<html>
<body style="background-color: #d9d9d9">
</html>
<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['user_name']) && isset($_POST['password'])){
            $utilizador = $_POST['user_name'];
            $password = $_POST['password'];
            $con = new mysqli ("localhost", "root", "filmes");

            if($con->connect_error!=0){
                echo "Ocorreu um erro no acesso à base de dados. <br>". $con->connect_error;
                exit;
            }
            else{
                $sql = "Select * from utilizadores where user_name=? and password=?";
                $stm = $con->prepare ($sql);
                if($stm!=false){
                    $stm->bind_param("ss", $utilizador, $password);
                    $stm->execute();~
                    $res = $stm->get_result();
                    if($res->num_rows==1){
                        $_SESSION['login']="correto";
                    }
                    else{
                        $_SESSION['login']="incorreto";
                    }
                    header("refresh:5;url=index.php");
                }
                else{
                    echo "Ocorreu um erro no acesso à base de dados. <br> STM:".$con->connect_error;
                    exit;
                }
            }
        }
    }
?>