<?php 

include '../../Model/vol.php';
include '../../Controller/VolC.php';



if( isset($_POST['date_heur_disponible']) and isset($_POST['nbr_places'])  and isset($_POST['depart']) and isset($_POST['prix'])  and isset($_POST['destination']) )
{
session_start();
	
$vol = new vol(0,$_POST['date_heur_disponible'],$_POST['nbr_places'],$_POST['depart'],$_POST['destination'],$_POST['prix']);
	

	$VolC=new VolC();
	$VolC->ajoutervol($vol);
	header('Location: AfficherVol.php');
}
else{
	echo "verifier les champs";
}

 ?>