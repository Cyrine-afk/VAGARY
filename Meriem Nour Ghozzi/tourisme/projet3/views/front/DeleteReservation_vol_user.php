
<?PHP
include "../../core/Reservation_vol_userC.php";
include "../../entities/Reservation_vol_user.php";
include "../../core/VolC2.php";


if (isset($_POST["id"])){



	$Reservation_vol_userC=new Reservation_vol_userC();
	$VolC2=new VolC();


		$result = $Reservation_vol_userC->recupererReservation_vol_user($_POST["id"]);


    foreach($result as $row){

         $id_Vol=$row->id_Vol;
       
    }
    	
		$VolC2->incrementervol($id_Vol);
	$Reservation_vol_userC->Supprimerreservation_vol_user($_POST["id"]);


header('Location: afficherlesreservation_vol.php');
}

?>