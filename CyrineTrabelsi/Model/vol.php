<?php 
/**
 * 
 */
class vol 
{

	private $id;
	private $date_heur_disponible;
private $depart;
	private $destination;
		private $prix;
	private $nbr_places;
	
	function __construct($id,$date_heur_disponible,$nbr_places,$depart,$destination,$prix)
	{
		$this->id=$id;
		$this->date_heur_disponible=$date_heur_disponible;
		$this->nbr_places=$nbr_places;
		$this->depart=$depart;
		$this->destination=$destination;
			$this->prix=$prix;
	}
	
	function getid(){return $this->id;}
	function getdate_heur_disponible(){return $this->date_heur_disponible;}
		function getnbr_places(){return $this->nbr_places;}
		function getdepart(){return $this->depart;}
		function getdestination(){return $this->destination;}
				function getprix(){return $this->prix;}
	public function set_id($id)
		{
			$this->id = $id;
		}
			public function set_prix($prix)
		{
			$this->prix = $prix;
		}
	public function set_date_heur_disponible($date_heur_disponible)
		{
			$this->date_heur_disponible = $date_heur_disponible;
		}
	public function set_nbr_places($nbr_places)
		{
			$this->nbr_places = $nbr_places;
		}
	public function set_depart($depart)
		{
			$this->depart = $depart;
		}
	public function set_destination($destination)
		{
			$this->destination = $destination;
		}
}
 ?>
