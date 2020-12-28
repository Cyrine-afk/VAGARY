<?PHP
include "config.php";

class productsC
{
	function ajouterproducts($products)
	{
		include "../config.php";
		require_once('../model/product.php');
		 $sql = "INSERT INTO produit (nom_prod,prix_prod,img_prod,categorie_prod) values (:nom_prod, :prix_prod, :img_prod,categorie_prod) ";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':nom_prod', $products->getnom_prod());
            $req->bindValue(':prix_prod', $products->getprix_prod());
			$req->bindValue(':img_prod', $products->getimg_prod());
			$req->bindValue(':categorie_prod', $products->getcategorie_prod());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
		function rechercheproducts($key)
	{
			
		$sql = "SELECT * FROM produit WHERE prix_prod LIKE '%$key%' OR categ LIKE '%$key%' OR nom_prod LIKE '%$key%' or id LIKE '%$key' or categorie_prod LIKE '%$key'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherproducts()
	{
		$sql = "SELECT * FROM produit";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerproducts($nom_prod)
	{
		include "../config.php";
		$sql = "DELETE FROM produit where nom_prod= :nom_prod";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nom_prod', $nom_prod);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	
}
