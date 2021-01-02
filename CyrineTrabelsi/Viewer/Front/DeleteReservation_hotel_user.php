<?PHP
include "../../Controller/Reservation_hotel_userC.php";
include "../../Model/Reservation_hotel_user.php";
include "../../Controller/HotelC2.php";


if (isset($_POST["id"])){



	$Reservation_hotel_userC=new Reservation_hotel_userC();
	$HotelC2=new HotelC();


		$result = $Reservation_hotel_userC->recupererreservation_hotel_user($_POST["id"]);


    foreach($result as $row){

         $id_Hotel=$row->id_Hotel;
       
    }
    	var_dump($id_Hotel);
		$HotelC2->incrementerhotel($id_Hotel);
	$Reservation_hotel_userC->Supprimerreservation_hotel_user($_POST["id"]);


header('Location: afficherlesreservation_hotel.php');
}

?>