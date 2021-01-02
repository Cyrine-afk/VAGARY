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

class  HotelC{
	


	function ajouterhotel($hotel)
	{

 	$sql="INSERT INTO `hotel`( `image`, `lieu`, `description`, `date_disponible_Debut`, `date_disponible_Fin`, `nbr_places`, `nom`) VALUES (:image,:lieu,:description,:date_disponible_Debut,:date_disponible_Fin,:nbr_places,:nom)";
 	$db = config::getConnexion();
 		try{
		$req=$db->prepare($sql);		
		$image=$hotel->getimage();
		$lieu=$hotel->getlieu();
		$description=$hotel->getdescription();
  		$date_disponible_Debut=$hotel->getdate_disponible_Debut();
  		$date_disponible_Fin=$hotel->getdate_disponible_Fin();
  		$nbr_places=$hotel->getnbr_places();
  		 		$nom=$hotel->getnom();
		$req->bindValue(':image',$image);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':description',$description);
		$req->bindValue(':date_disponible_Debut',$date_disponible_Debut);
			$req->bindValue(':date_disponible_Fin',$date_disponible_Fin);
	$req->bindValue(':nbr_places',$nbr_places);
		$req->bindValue(':nom',$nom);
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
	    function afficherlist_hotel(){

		$sql="SELECT * From hotel";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function modifierhotel($hotel,$id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE `hotel` SET `image`=:image,`lieu`=:lieu,`description`=:description, `nom`=:nom ,`date_disponible_Debut`=:date_disponible_Debut,`date_disponible_Fin`=:date_disponible_Fin,`nbr_places`=:nbr_places WHERE `id`=:id";
 		try{

        $req=$db->prepare($sql);		

		$image=$hotel->getimage();
		$lieu=$hotel->getlieu();
		$description=$hotel->getdescription();
  		$date_disponible_Debut=$hotel->getdate_disponible_Debut();
  		$date_disponible_Fin=$hotel->getdate_disponible_Fin();
  		$nbr_places=$hotel->getnbr_places();
  		$nom=$hotel->getnom();
		$req->bindValue(':image',$image);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':description',$description);
		$req->bindValue(':date_disponible_Debut',$date_disponible_Debut);
			$req->bindValue(':date_disponible_Fin',$date_disponible_Fin);
	$req->bindValue(':nbr_places',$nbr_places);
$req->bindValue(':nom',$nom);
			$req->bindValue(':id',$id);		

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}



		function recupererhotel($id){
		$sql="SELECT * FROM `hotel` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$hotel= $req->fetchALL(PDO::FETCH_OBJ);
		return $hotel;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimerhotel($id){
		$sql="DELETE  from hotel where  id=:id ";
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
	
		function incrementerhotel($id){
		$sql="SELECT * FROM `hotel` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$hotel= $req->fetchALL(PDO::FETCH_OBJ);

$nbr_places=$hotel->getnbr_places() + 1;
$hotel->set_nbr_places($nbr_places);

modifierhotel($hotel,$id);



		return $hotel;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
		function decrmenterhotel($id){
		$sql="SELECT * FROM `hotel` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$hotel= $req->fetchALL(PDO::FETCH_OBJ);

$nbr_places=$hotel->getnbr_places() - 1;
$hotel->set_nbr_places($nbr_places);

modifierhotel($hotel,$id);



		return $hotel;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }		

		
	 
}


?>