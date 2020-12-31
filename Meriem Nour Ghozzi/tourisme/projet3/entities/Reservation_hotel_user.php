<?php 
/**
 * 
 */
class Reservation_hotel_user 
{

	private $id;
	private $id_User;
	private $date_Debut;
	private $date_Fin;
	private $id_Hotel;
	
	function __construct($id,$date_Debut,$date_Fin,$id_Hotel,$id_User)
	{
		$this->id=$id;
		$this->date_Debut=$date_Debut;
				$this->date_Fin=$date_Fin;
		$this->id_Hotel=$id_Hotel;
			$this->id_User=$id_User;
	}
	
	function getid(){return $this->id;}
	function getdate_Fin(){return $this->date_Fin;}
		function getdate_Debut(){return $this->date_Debut;}
			function getid_User(){return $this->id_User;}
				function getid_Hotel(){return $this->id_Hotel;}
	public function set_id($id)
		{
			$this->id = $id;
		}
	public function set_date_Debut($date_Debut)
		{
			$this->date_Debut = $date_Debut;
		}
			public function set_date_Fin($date_Fin)
		{
			$this->date_Fin = $date_Fin;
		}
			public function set_id_Hotel($id_Hotel)
		{
			$this->id_Hotel = $id_Hotel;
		}
					public function set_id_User($id_User)
		{
			$this->id_User = $id_User;
		}

}
 ?>
