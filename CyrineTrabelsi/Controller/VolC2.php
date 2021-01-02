<?php

class vol 
{

	private $id;
	private $date_heur_disponible;
	private $nbr_places;
	
	function __construct($id,$date_heur_disponible,$nbr_places)
	{
		$this->id=$id;
		$this->date_heur_disponible=$date_heur_disponible;
		$this->nbr_places=$nbr_places;
	}
	
	function getid(){return $this->id;}
	function getdate_heur_disponible(){return $this->date_heur_disponible;}
		function getnbr_places(){return $this->nbr_places;}
	public function set_id($id)
		{
			$this->id = $id;
		}
	public function set_date_heur_disponible($date_heur_disponible)
		{
			$this->date_heur_disponible = $date_heur_disponible;
		}
	public function set_nbr_places($nbr_places)
		{
			$this->nbr_places = $nbr_places;
		}

}
class  VolC{
	


	function ajoutervol($vol)
	{

 	$sql="INSERT INTO `vol`( `date_heur_disponible`, `nbr_places`) VALUES (:date_heur_disponible,:nbr_places)";
 	$db = config::getConnexion();
 		try{
		$req=$db->prepare($sql);		
		$date_heur_disponible=$vol->getdate_heur_disponible();
		$nbr_places=$vol->getnbr_places();
	$req->bindValue(':date_heur_disponible',$date_heur_disponible);
	$req->bindValue(':nbr_places',$nbr_places);
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
	    function afficherlist_vol(){

		$sql="SElECT * From vol";
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
 	$sql="UPDATE `vol` SET `date_heur_disponible`=:date_heur_disponible,`nbr_places`=:nbr_places WHERE `id`=:id";
 		try{

        $req=$db->prepare($sql);		

			$date_heur_disponible=$vol->getdate_heur_disponible();
		$nbr_places=$vol->getnbr_places();

			$req->bindValue(':date_heur_disponible',$date_heur_disponible);
	$req->bindValue(':nbr_places',$nbr_places);

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

$nbr_places=$vol[0]->nbr_places + 1;

$voll=$vol[0];

var_dump($voll->date_heur_disponible);
$newvol = new vol(0,$voll->date_heur_disponible,$nbr_places);
$this->modifiervol($newvol,$id);



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

$nbr_places=$vol[0]->nbr_places - 1;

$voll=$vol[0];
$newvol = new vol(0,$voll->date_heur_disponible,$nbr_places);
$this->modifiervol($newvol,$id);



		return $vol;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }		

		
	
}


?>