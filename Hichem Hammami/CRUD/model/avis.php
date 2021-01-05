<?PHP
	class avis{
		private ?int $id_avis = null;
		private ?string $text_avis = null;
		private ?int $client = null;
	

		
		function __construct(string $text_avis/*, int $resultat*/){
			
			$this->text_avis=$text_avis;
			//$this->client=$client;
			
		}
		
		function getId_avis(): int{
			return $this->id_avis;
		}
		function getText_avis(): string{
			return $this->text_avis;
		}
		/*function getClient(): int{
			return $this->client;
		}*/
		

		function setText_avis(string $text_avis): void{
			$this->text_avis=$text_avis;
		}
		/*function setClient(int $client): void{
			$this->client;
		}*/
		
	}
?>