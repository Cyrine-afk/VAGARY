<?php 

include '../../Model/Reservation_hotel_user.php';
include '../../Controller/Reservation_hotel_userC.php';
include "../../Controller/HotelC2.php";


if(isset($_POST['id_hotel'])  and isset($_POST['date_Debut']) and isset($_POST['date_Fin']))
{
session_start();
	
$Reservation_hotel_user = new Reservation_hotel_user(0,$_POST['date_Debut'],$_POST['date_Fin'],$_POST['id_hotel'],$_SESSION['e']);
	$HotelC2=new HotelC();


		$HotelC2->decrmenterhotel($_POST['id_hotel']);
	$Reservation_hotel_userC=new Reservation_hotel_userC();
	$Reservation_hotel_userC->reserverhotel($Reservation_hotel_user);
	header('Location: AfficherHotel.php');
}
else{
	echo "verifier les champs";
}

 ?>