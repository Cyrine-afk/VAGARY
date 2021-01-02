<?php
include "ComC.php";
$commande=new CommandeC();
if (isset($_POST["id"])){
	$commande->supprimerPaiment($_POST["id"]);
	
	header('Location:tablePaiment.php');

	}


?>