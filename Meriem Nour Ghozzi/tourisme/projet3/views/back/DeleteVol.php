<?PHP
include "../../core/VolC.php";
include ".../../entities/vol.php";



if (isset($_POST["id"])){
	$VolC=new VolC();
	$VolC->SupprimerVol($_POST["id"]);


header('Location: AfficherVol.php');
}

?>