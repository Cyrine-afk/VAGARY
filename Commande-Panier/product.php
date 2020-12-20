<?PHP
class product
{
    public $nom_prod;
    public $prix_prod;
    public $img_prod;
    public $categorie_prod;
    function __construct($nom_prod,$prix_prod,$img_prod,$categorie_prod)
    {   $this->nom_prod = $nom_prod; 
        $this->prix_prod = $prix_prod;
		$this->img_prod = $img_prod;
        $this->categorie_prod = $categorie_prod;
    }
    // getter 
    function getnom_prod()
    {
        return $this->nom_prod;
    }
    function getprix_prod()
    {
        return $this->prix_prod;
    }
    function getimg_prod()
    {
        return $this->img_prod;
    }
    function getcategorie_prod()
    {
        return $this->categorie_prod;
    }
    // setter 
     function setnom_prod($nom_prod)
    {
        return $this->nom_prod= $nom_prod;
    }
    function setprix_prod($prix_prod)
    {
        return $this->prix_prod= $prix_prod;
    }
    function setimg_prod($img_prod)
    {
        return $this->img_prod= $img_prod;
    }
    function setcategorie_prod($categorie_prod)
    {
        return $this->categorie_prod= $categorie_prod;
    }
}
  ?>
