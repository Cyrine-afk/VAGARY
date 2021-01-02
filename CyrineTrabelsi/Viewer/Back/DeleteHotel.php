<?PHP
include "../../Controller/HotelC.php";
include ".../../Model/hotel.php";



if (isset($_POST["id"])){
	$HotelC=new HotelC();
	$HotelC->Supprimerhotel($_POST["id"]);


header('Location: AfficherHotel.php');
}

?>