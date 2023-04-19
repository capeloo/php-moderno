<?php 
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
        echo "<script>location.href='index.php';</script>";
    }

    include('config.php');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios
            WHERE usuario = '{$usuario}'
            AND senha = '".md5($senha)."'";

    // -> (ou seta) é um operador que permite acessar um atributo ou método de um objeto.
    $res = $conn->query($sql) or die($conn->error);

    // transforma o resultado em uma array de objetos para que possamos chamar individualmente caso necessário
    $row = $res->fetch_object();

    // quantidade do resultado que ele encontrou 
    // num_rows retorna o número de linhas
    $qtd = $res->num_rows;

    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;

        echo "<script>location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Usuário ou senha incorreto(s)');</script>";
        echo "<script>location.href='index.php';</script>";
    }
?>