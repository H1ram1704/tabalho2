<?php
session_start();

if(!isset($_SESSION['nome'])){
    header("Location: login.html");
    }
?>
<html>
    <head>
        <title>site-exercicio</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css"
        href="baseestilo.css">
    </head>
<body>

<br>
<fieldset>
<nav id="start"> <label><a href="base.php">Início</a>
<br>
<a href="reserva.php"> Reserve um livro</a>
<br>
</nav>
</fieldset>
<br>
<fieldset id="inicio">
<H1 id="começo"> BEM VINDO AO LIVRANET <?php echo $_SESSION['nome'];?></H1>
<p>Neste site você podera reservar livros dos mais diversos tipos</p>
</fieldset></body></html>
