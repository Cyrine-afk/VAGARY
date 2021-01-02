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

class  VolC{
	


	function ajoutervol($vol)
	{

 	$sql="INSERT INTO `vol`( `date_heur_disponible`, `nbr_places`, `depart`, `destination`, `prix`) VALUES (:date_heur_disponible,:nbr_places,:depart,:destination,:prix)";
 	$db = config::getConnexion();
 		try{
		$req=$db->prepare($sql);		
		$date_heur_disponible=$vol->getdate_heur_disponible();
		$nbr_places=$vol->getnbr_places();
		$depart=$vol->getdepart();
		$destination=$vol->getdestination();
			$prix=$vol->getprix();
	$req->bindValue(':date_heur_disponible',$date_heur_disponible);
	$req->bindValue(':nbr_places',$nbr_places);
		$req->bindValue(':depart',$depart);
			$req->bindValue(':destination',$destination);
					$req->bindValue(':prix',$prix);
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
	    function afficherlist_vol(){

		$sql="SELECT * From vol";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function modifiervol($vol,$id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE `vol` SET `date_heur_disponible`=:date_heur_disponible,`nbr_places`=:nbr_places , `depart`=:depart, `destination`=:destination, `prix`=:prix WHERE `id`=:id";
 		try{

        $req=$db->prepare($sql);		

			$date_heur_disponible=$vol->getdate_heur_disponible();
		$nbr_places=$vol->getnbr_places();
	$depart=$vol->getdepart();
		$destination=$vol->getdestination();
				$prix=$vol->getprix();
			$req->bindValue(':date_heur_disponible',$date_heur_disponible);
	$req->bindValue(':nbr_places',$nbr_places);
	$req->bindValue(':depart',$depart);
			$req->bindValue(':destination',$destination);
				$req->bindValue(':prix',$prix);
			$req->bindValue(':id',$id);		

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}



		function recuperervol($id){
		$sql="SELECT * FROM `vol` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$vol= $req->fetchALL(PDO::FETCH_OBJ);
		return $vol;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimervol($id){
		$sql="DELETE  from vol where  id=:id ";
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
	
		function incrementervol($id){
		$sql="SELECT * FROM `vol` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$vol= $req->fetchALL(PDO::FETCH_OBJ);

$nbr_places=$vol->getnbr_places() + 1;
$vol->set_nbr_places($nbr_places);

modifiervol($vol,$id);



		return $vol;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
		function decrmentervol($id){
		$sql="SELECT * FROM `vol` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$vol= $req->fetchALL(PDO::FETCH_OBJ);

$nbr_places=$vol->getnbr_places() - 1;
$vol->set_nbr_places($nbr_places);

modifiervol($vol,$id);



		return $vol;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }		

		
	
}


?>