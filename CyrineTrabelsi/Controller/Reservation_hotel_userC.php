<?php


 class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=vagary', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }

class  Reservation_hotel_userC{
	


	function reserverhotel($Reservation_hotel_user)
	{

 	$sql="INSERT INTO `reservation_hotel_user`( `id_User`, `id_Hotel`, `date_Debut`, `date_Fin`) VALUES (:id_User,:id_Hotel,:date_Debut,:date_Fin)";
 	$db = config::getConnexion();
 		try{
		$req=$db->prepare($sql);

		$id_User=$Reservation_hotel_user->getid_User();

		$id_Hotel=$Reservation_hotel_user->getid_Hotel();

		$date_Debut=$Reservation_hotel_user->getdate_Debut();
$date_Fin=$Reservation_hotel_user->getdate_Fin();
 

 
		$req->bindValue(':id_Hotel',$id_Hotel);
		$req->bindValue(':id_User',$id_User);
		$req->bindValue(':date_Debut',$date_Debut);
		$req->bindValue(':date_Fin',$date_Fin);
	
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
	    function affichermesreservation_hotel($id_Hotel,$id_User){

		$sql="SELECT r.id,date_Debut,date_Fin, h.nom,`image`, `lieu`,  `date_disponible_Debut`, `date_disponible_Fin`, `nbr_places` FROM `reservation_hotel_user` r INNER join client u INNER JOIN hotel h where r.id_User = :id_User and r.id_Hotel = :id_Hotel";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindValue(':id_Hotel',$id_Hotel);
				$req->bindValue(':id_User',$id_User);
				$req->execute();
		$liste=$req->fetchALL();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	  function affichermesreservation($id_User){

		$sql="SELECT r.id,date_Debut,date_Fin, h.nom,`image`, `lieu`,  `date_disponible_Debut`, `date_disponible_Fin`, `nbr_places` FROM `reservation_hotel_user` r INNER join client u INNER JOIN hotel h where r.id_User = :id_User and r.id_Hotel = h.id GROUP by r.id";
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
	  function afficherlesreservation_hotel($id_Hotel){

		$sql="SELECT r.id,date_Debut,date_Fin,u.nom as nomuser, h.nom, `prenom`, `mail`,`image`, `lieu`,  `date_disponible_Debut`, `date_disponible_Fin`, `nbr_places` FROM `reservation_hotel_user` r INNER join user u INNER JOIN hotel h where  r.id_Hotel = :id_Hotel and u.id = r.id_User GROUP by r.id";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindValue(':id_Hotel',$id_Hotel);
			
	$req->execute();
		return $req->fetchALL();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function modifierReservation_hotel_user($Reservation_hotel_user,$id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE `reservation_hotel_user` SET `date_Debut`=:date_Debut,`date_Fin`=:date_Fin WHERE `id`=:id";
 		try{

        $req=$db->prepare($sql);		

	
		$date_Debut=$Reservation_hotel_user->getdate_Debut();

  		$date_Fin=$Reservation_hotel_user->getdate_Fin();
	

			$req->bindValue(':date_Fin',$date_Fin);
	$req->bindValue(':date_Debut',$date_Debut);

			$req->bindValue(':id',$id);		

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}



		function recupererreservation_hotel_user($id){
		$sql="SELECT * FROM `reservation_hotel_user` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$reservation_hotel_user= $req->fetchALL(PDO::FETCH_OBJ);
		return $reservation_hotel_user;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimerreservation_hotel_user($id){

		$sql="DELETE  from reservation_hotel_user where  id=:id ";
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