<?php

class hotel 
{

	private $id;
	private $image;
	private $lieu;
		private $nom;
	private $description;
	private $date_disponible_Debut;
	private $date_disponible_Fin;
	private $nbr_places;
	
	function __construct($id,$image,$lieu,$description,$date_disponible_Debut,$date_disponible_Fin,$nbr_places,$nom)
	{
		$this->id=$id;
		$this->image=$image;
		$this->lieu=$lieu;
		$this->description=$description;
		$this->date_disponible_Debut=$date_disponible_Debut;
		$this->date_disponible_Fin=$date_disponible_Fin;
		$this->nbr_places=$nbr_places;
		$this->nom=$nom;
	}
	
	function getid(){return $this->id;}
		function getnom(){return $this->nom;}
	function getimage(){return $this->image;}
	function getlieu(){return $this->lieu;}
	function getdescription(){return $this->description;}
	function getdate_disponible_Debut(){return $this->date_disponible_Debut;}
	function getdate_disponible_Fin(){return $this->date_disponible_Fin;}
		function getnbr_places(){return $this->nbr_places;}
	public function set_id($id)
		{
			$this->id = $id;
		}
			public function set_nom($nom)
		{
			$this->nom = $nom;
		}
public function set_image($image)
		{
			$this->image = $image;
		}
		public function set_lieu($lieu)
		{
			$this->lieu = $lieu;
		}
				public function set_description($description)
		{
			$this->description = $description;
		}
						public function set_date_disponible_Debut($date_disponible_Debut)
		{
			$this->date_disponible_Debut = $date_disponible_Debut;
		}
							public function set_date_disponible_Fin($date_disponible_Fin)
		{
			$this->date_disponible_Fin = $date_disponible_Fin;
		}
						public function set_nbr_places($nbr_places)
		{
			$this->nbr_places = $nbr_places;
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

		$sql="SElECT * From hotel";
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

$nbr_places=$hotel[0]->nbr_places + 1;

$hott=$hotel[0];

$newhotel = new hotel(0,$hott->image,$hott->lieu,$hott->description,$hott->date_disponible_Debut,$hott->date_disponible_Fin,$nbr_places,$hott->nom);

$this->modifierhotel($newhotel,$id);



		return $newhotel;
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
$nbr_places=$hotel[0]->nbr_places - 1;

$hott=$hotel[0];

$newhotel = new hotel(0,$hott->image,$hott->lieu,$hott->description,$hott->date_disponible_Debut,$hott->date_disponible_Fin,$nbr_places,$hott->nom);

$this->modifierhotel($newhotel,$id);


		return $hotel;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }		

		
	
}


?>