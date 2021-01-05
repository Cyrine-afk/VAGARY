<?PHP
	include "../controller/CommunauteC.php";

	$CommunauteC=new CommunauteC();
	
	if (isset($_POST["id_com"])){
		$CommunauteC->supprimerCommunaute($_POST["id_com"]);
		header('Location:afficherCommunaute.php');
	}

?>