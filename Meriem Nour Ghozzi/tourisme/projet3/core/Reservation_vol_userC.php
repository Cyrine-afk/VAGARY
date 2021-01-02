<?php


 class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=db', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }

class  Reservation_vol_userC{
	


	function reserverVol($Reservation_vol_user)
	{

 	$sql="INSERT INTO `reservation_vol_user`( `id_User`, `date_Achat`, `id_Vol`) VALUES (:id_User,:date_Achat,:id_Vol)";
 	$db = config::getConnexion();
 		try{
		$req=$db->prepare($sql);

		$id_User=$Reservation_vol_user->getid_User();

		$id_Vol=$Reservation_vol_user->getid_Vol();

		$date_Achat=$Reservation_vol_user->getdate_Achat();

  	

 
		$req->bindValue(':id_Vol',$id_Vol);
		$req->bindValue(':id_User',$id_User);
		$req->bindValue(':date_Achat',$date_Achat);

	
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}



	  function affichermesreservation($id_User){

		$sql="SELECT r.id,date_heur_disponible,depart,destination ,prix,`nbr_places`, `date_Achat` FROM `reservation_vol_user` r INNER JOIN user u INNER JOIN vol v where r.id_Vol = v.id and r.id_User = :id_User GROUP by r.id ";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			
				$req->bindValue(':id_User',$id_User);
				$req->execute();
		$liste=$req->fetchALL();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	  function afficherlesreservation_vol($id_Vol){

		$sql="SELECT r.id,u.nom as nomuser,depart,destination, prix,`prenom`, `mail`,date_heur_disponible, `nbr_places`, `date_Achat` FROM `reservation_vol_user` r INNER JOIN user u INNER JOIN vol v where r.id_Vol = :id_Vol and r.id_User = u.id GROUP by r.id";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindValue(':id_Vol',$id_Vol);
			
	$req->execute();
		return $req->fetchALL();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}





		function recupererReservation_vol_user($id){
		$sql="SELECT * FROM `reservation_vol_user` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$reservation_vol_user= $req->fetchALL(PDO::FETCH_OBJ);
		return $reservation_vol_user;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimerreservation_vol_user($id){

		$sql="DELETE  from reservation_vol_user where  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
		

		
	
}


?>