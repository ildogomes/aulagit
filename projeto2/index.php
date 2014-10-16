<?php include_once('topo.php');?>
<div>
<?php
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$url = $_SERVER['REQUEST_URI'];
 
$explode = explode('/', $url);

$paginas = array( 'home','contato','empresa','produtos','servicos');



	/**/if(isset($explode[2]) && $explode[2] == ''):
		include("home.php");	
	elseif($explode[2] != ''):
		 if($explode[2] != '' && in_array($url, $paginas) != $paginas):
		  	include_once $explode[2].".php";
		  endif; 
	else: 
		include("naoexiste.php");
		endif;
?>

</div>
<?php include_once('footer.php');?>