<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'].'/projet/VAGARY/CyrineTrabelsi/Controller/CommunauteC.php';

	$CommunauteC=new CommunauteC();
	
	if (isset($_POST["id_com"])){
		$CommunauteC->supprimerCommunaute($_POST["id_com"]);
		header('Location:comm.php');
	}

?>