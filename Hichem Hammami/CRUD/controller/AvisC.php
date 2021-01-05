<?PHP
	include $_SERVER['DOCUMENT_ROOT'].'/CRUD/controller/CommunauteC.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/CRUD/Model/avis.php';
	//include $_SERVER['DOCUMENT_ROOT']."/CRUD/config.php";

	class AvisC {
		
		function ajouterAvis($avis){
			//$sql="SELECT id_client from client WHERE client='1'";
			//$sql="INSERT INTO avis (text_avis,client) VALUES (:text_avis,'1')";
			$sql="insert into avis (text_avis,client) values (:text_avis,:client) ";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'text_avis' => $avis->getText_avis(),
					'client' => '1'
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
		
		
	}

?>