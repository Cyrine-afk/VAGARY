<?php 
/**
 * 
 */
class Reservation_vol_user 
{

	private $id;
	private $id_User;
	private $date_Achat;
	private $id_Vol;
	
	function __construct($id,$date_Achat,$id_Vol,$id_User)
	{
		$this->id=$id;
		$this->date_Achat=$date_Achat;
		$this->id_Vol=$id_Vol;
			$this->id_User=$id_User;
	}
	
	function getid(){return $this->id;}
	function getdate_Achat(){return $this->date_Achat;}
			function getid_User(){return $this->id_User;}
				function getid_Vol(){return $this->id_Vol;}
	public function set_id($id)
		{
			$this->id = $id;
		}
	public function set_date_Achat($date_Achat)
		{
			$this->date_Achat = $date_Achat;
		}

			public function set_id_Vol($id_Vol)
		{
			$this->id_Vol = $id_Vol;
		}
					public function set_id_User($id_User)
		{
			$this->id_User = $id_User;
		}

}
 ?>
