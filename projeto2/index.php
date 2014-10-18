<?php
include_once('topo.php');
?>
<?php

function rotas()
{
    $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $paginas	= array('home', 'empresa', 'produtos', 'servicos', 'contato');

    $explode = $rota['path'];
    $explode = explode('/', $explode);
    if(empty($explode[2])){
        include_once("home.php");
    }elseif(isset($explode[2]) && in_array($explode[2], $paginas)){
        include_once("/{$explode[2]}.php");
    }elseif(isset($explode[2]) && $explode[2] != $paginas){
        include_once("/naoexiste.php");
    }else{
        include_once("/home.php");
    }
}
//echo"<pre>";
//print_r($explode);


rotas();



include_once('footer.php');
?>