<?PHP
	class communaute{
		private ?int $id_com = null;
		private ?string $nom_com = null;
		private ?int $nbr_ab_com = null;
	

		
		function __construct(string $nom_com, int $nbr_ab_com){
			
			$this->nom_com=$nom_com;
			$this->nbr_ab_com=$nbr_ab_com;
			
		}
		
		function getId_com(): int{
			return $this->id_com;
		}
		function getNom_com(): string{
			return $this->nom_com;
		}
		function getNbr_ab_com(): int{
			return $this->nbr_ab_com;
		}
		

		function setNom_com(string $nom_com): void{
			$this->nom_com=$nom_com;
		}
		function setNbr_ab_com(int $nbr_ab_com): void{
			$this->nbr_ab_com;
		}
		
	}
?>