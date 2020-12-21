<?php
include "../../controller/carteC.php";
$carteC=new CarteC();
if (isset($_POST["id_client"])){
	$carteC->supprimerCarte($_POST["id_client"]);
	
	header('Location:carte.php');

	}
else
{
	echo "Leeee";
}

?>