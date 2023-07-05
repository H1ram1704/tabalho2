<?php
session_start();
include "conectaaluno.php";
if(isset($_POST['botao'])){
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM aluno WHERE nome like '$login'";
$resultado = mysqli_query($conexao, $sql);

echo "não funfou $login $senha e o q tá pegando do banco";
if(mysqli_num_rows($resultado) == 1 ){
$registro = mysqli_fetch_array($resultado);
$_SESSION['nome'] = $registro['nome'];
header("Location: base.php");
} else{
    echo "não funfou $login $senha e o q tá pegando do banco".$registro['nome'];
//header("Location: login.html");
}
}
?>
