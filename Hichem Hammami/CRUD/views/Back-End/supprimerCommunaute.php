<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'].'/CRUD/Controller/CommunauteC.php';

	$CommunauteC=new CommunauteC();
	
	if (isset($_POST["id_com"])){
		$CommunauteC->supprimerCommunaute($_POST["id_com"]);
		header('Location:comm.php');
	}

?>