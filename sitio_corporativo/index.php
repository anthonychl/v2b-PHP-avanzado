<?php include "includes/cabecera.inc"; ?>

<?php 

if(isset($_GET['pagina'])){

	if($_GET['pagina'] == "inicio.inc" || $_GET['pagina'] == "blog.inc" || $_GET['pagina'] == "productos.inc" || $_GET['pagina'] == "contacto.inc"){
		$url = $_GET['pagina'];
	}else{
		$url = "inicio.inc";
	}

	
}else{
	$url = "inicio.inc";
}



include "includes/".$url; 

?>
			
<?php include "includes/pie.inc"; ?>
