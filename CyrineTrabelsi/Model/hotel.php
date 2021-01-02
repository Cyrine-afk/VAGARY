<?php 
/**
 * 
 */
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
 ?>
