<?php 

include '../../entities/vol.php';
include '../../core/VolC.php';



if( isset($_POST['date_heur_disponible']) and isset($_POST['nbr_places']) and isset($_POST['id']) and isset($_POST['depart'])  and isset($_POST['destination']) and isset($_POST['prix']) )
{
session_start();
	
$vol = new vol($_POST['id'],$_POST['date_heur_disponible'],$_POST['nbr_places'],$_POST['depart'],$_POST['destination'],$_POST['prix']);
	

	$VolC=new VolC();
	$VolC->modifiervol($vol,$_POST['id'] );
	header('Location: AfficherVol.php');
}
else{
	echo "verifier les champs";
}

 ?>