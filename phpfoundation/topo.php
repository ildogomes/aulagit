<?php
date_default_timezone_set('Brazil/East');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" href="css/bootstrap.css" rel="Stylesheet"/>
</head>
<body>

<div id="container">
    <div align="center">
        <div id="topo">
            <h1>Site simples em PHP</h1>

            <div id="menu">
                <nav class="btn-group menu-opcoes">
                    <nav class="navbar navbar-default navbar-static-top" role="navigation">
                        <a class="btn" href="index.php">Home</a>
                        <a class="btn" href="empresa.php">Empresa</a>
                        <a class="btn" href="produtos.php">Produtos</a>
                        <a class="btn" href="servicos.php">Serviços</a>
                        <a class="btn" href="contato.php">Contato</a>
                    </nav>
                </nav>
            </div>
        </div>
        <br/>

        <?php
if(file_exists("index.php") or file_exists("empresa.php") or file_exists("produtos.php") or file_exists("servicos.php") or file_exists("contato.php")){

}
else{
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0; URL='index.php'\">";
}
?>