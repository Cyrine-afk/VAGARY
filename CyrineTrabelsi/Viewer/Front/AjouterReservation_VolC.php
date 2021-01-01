<?php 

include '../../Model/Reservation_vol_user.php';
include '../../Controller/Reservation_vol_userC.php';
include "../../Controller/VolC2.php";


if(isset($_POST['id_Vol']) )
{
session_start();
	
$Reservation_vol_user = new Reservation_vol_user(0,date('Y-m-d H:i:s'),$_POST['id_Vol'],$_SESSION['e']);
	$VolC2=new VolC();


		$VolC2->decrmentervol($_POST['id_Vol']);
	$Reservation_vol_userC=new Reservation_vol_userC();
	$Reservation_vol_userC->reserverVol($Reservation_vol_user);
	header('Location: AfficherVol.php');
}
else{
	echo "verifier les champs";
}

 ?>