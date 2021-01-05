<?PHP
	include $_SERVER['DOCUMENT_ROOT']."/projet/VAGARY/CyrineTrabelsi/config.php";
	require_once $_SERVER['DOCUMENT_ROOT'].'/projet/VAGARY/CyrineTrabelsi/Model/communaute.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/projet/VAGARY/CyrineTrabelsi/Model/avis.php';

	class CommunauteC {
		
		function ajouterCommunaute($Communaute){
			$sql="INSERT INTO Communaute (nom_com,nbr_ab_com) 
			VALUES (:nom_com,:nbr_ab_com)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_com' => $Communaute->getNom_com(),
					'nbr_ab_com' => $Communaute->getNbr_ab_com()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherCommunaute(){
			
			$sql="SELECT * FROM Communaute";
			$db = config::getConnexion();
			try{
				$listeCommunaute = $db->query($sql);
				return $listeCommunaute;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function afficherunCommunaute(){
			
			$sql="SELECT * FROM Communaute";
			$db = config::getConnexion();
			try{
				$listeCommunaute = $db->query($sql);
				return $listeCommunaute;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerCommunaute($id_com){
			$sql="DELETE FROM Communaute WHERE id_com= :id_com";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_com',$id_com);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierCommunaute($Communaute, $id_com){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Communaute SET 
						nom_com = :nom_com, 
						nbr_ab_com = :nbr_ab_com
					WHERE id_com = :id_com'
				);
				$query->execute([
					'nom_com' => $Communaute->getNom_com(),
					'nbr_ab_com' => $Communaute->getNbr_ab_com(),
					
					//'id_com' => $id_com
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function recupererCommunaute($id_com){
			$sql="SELECT * from Communaute where id_com=$id_com";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$Communaute = $query->fetch();
				return $Communaute;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererCommunaute1($id_com){
			$sql="SELECT * from Communaute where id_com=$id_com";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$Communaute = $query->fetch(PDO::FETCH_OBJ);
				return $Communaute;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		
	}
	/*class AvisC {
		
		function ajouterAvis($avis){
			$sql_a="SELECT id_client from client WHERE client=:client";
			$sql_a="INSERT INTO avis (text_avis,client) 
			VALUES (:text_avis,:client)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql_a);
			
				$query->execute([
					'text_avis' => $avis->getText_avis(),
					'client' => $resultat['id_client']
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherAvis(){
			
			$sql="SELECT * FROM avis";
			$db = config::getConnexion();
			try{
				$listeAvis = $db->query($sql);
				return $listeAvis;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimeravis($id_avis){
			$sql="DELETE FROM avis WHERE id_avis= :id_avis";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_avis',$id_avis);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierAvis($avis, $id_avis){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE avis SET 
						text_avis = :text_avis, 
						client = :client
					WHERE id_avis = :id_avis'
				);
				$query->execute([
					'text_avis' => $avis->getText_avis(),
					'client' => $avis->getClient(),
					
					//'id_avis' => $id_avis
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function recupererAvis1($id_avis){
			$sql="SELECT * from avis where id_avis=$id_avis";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$avis = $query->fetch(PDO::FETCH_OBJ);
				return $avis;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		
	}*/

?>