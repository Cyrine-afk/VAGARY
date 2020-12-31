<?php
include "ComC.php";
$commande=new CommandeC();
if (isset($_POST["id_comd"])){
	$commande->supprimerCommande($_POST["id_comd"]);
	
	header('Location:tableP.php');

	}


?>
