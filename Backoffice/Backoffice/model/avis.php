<?PHP
class Avis{

	private $Id;
	private $Text;
	private $Nom;
	private $Datee;
	private $Idp;

	


	function __construct($Id,$Nom,$Text,$Datee,$Idp){
		$this->Id=$Id;
		$this->Nom=$Nom;
		$this->Text=$Text;
		$this->Datee=$Datee;
		$this->Idp=$Idp;

		


	}
	function getId(){
		return $this->Id;
	}
	function getNom(){
		return $this->Nom;
	}
	function getText(){
		return $this->Text;
	}
	function getDatee(){
		return $this->Datee;
	}
	function getIdp(){
		return $this->Idp;
	}
	
	
	
	function setId($Id){
		$this->Id=$Id;
	}
	function setNom($Nom){
		$this->Nom=$Nom;
	}
	function setText($Text){
		$this->Text;
	}
	function setDatee($Datee){
		$this->Datee=$Datee;
	}

	function setIdp($Idp){
		$this->Idp=$Idp;
	}
	
	
}

?>