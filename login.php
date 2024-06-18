<?php
session_start();

if (empty($_POST) || empty($_POST["usuario"]) || empty($_POST["senha"])) {
    echo "<script>location.href='index.php'</script>";
    exit();
}

include('config.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' AND senha ='{$senha}'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();
$qtd = $res->num_rows;

if ($qtd > 0 ) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome'] = $row->nome;
    $_SESSION['tipo'] = $row->tipo;

    echo "<script>location.href='dashboard.php'</script>";
} else {
    echo "<script>location.href='index.php'</script>";
    echo "<script>alert('usuario ou senha incorreto')</script>";
}
?>
