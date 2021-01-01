<?php 

include '../../Model/hotel.php';
include '../../Controller/HotelC.php';



if(isset($_POST['lieu'])  and isset($_POST['description']) and isset($_POST['date_disponible_Debut']) and isset($_POST['date_disponible_Fin']) and isset($_POST['nbr_places']) and isset($_POST['image']) and isset($_POST['id'])  and isset($_POST['nom']) )
{
session_start();
	
$hotel = new hotel($_POST['id'],$_POST['image'],$_POST['lieu'],$_POST['description'],$_POST['date_disponible_Debut'],$_POST['date_disponible_Fin'],$_POST['nbr_places'],$_POST['nom']);
	

	$HotelC=new HotelC();
	$HotelC->modifierhotel($hotel,$_POST['id'] );
	header('Location: AfficherHotel.php');
}
else{
	echo "verifier les champs";
}

 ?>