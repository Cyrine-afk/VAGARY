<?php
include "../../controller/clientC.php";
$clientC=new ClientC();
if (isset($_POST["id_client"])){
	$clientC->supprimerClient($_POST["id_client"]);
	echo'Cbonnnnnn';
	header('Location:users.php');

	}
else
{
	echo "Leeee";
}

?>
