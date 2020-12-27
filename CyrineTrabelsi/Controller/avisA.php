<?PHP
include "../../config.php";
class AvisA {
	
	
	function afficherAvis(){
		$sql="SElECT * From Avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ajouterAvis($AvisA){
		$sql="insert into Avis (ID,NOM,TEXT,DATEE,IDP) values (:id,:nom,:text,:datee,:idp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$id=$AvisA->getId();
		$text=$AvisA->gettext();
		$nom=$AvisA->getNom();
		$datee=$AvisA->getdatee();
		$idp=$AvisA->getidp();

        

		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':text',$text);
		$req->bindValue(':datee',$datee);
		$req->bindValue(':idp',$idp);

		


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function recupererAvis($id){
		$sql="SELECT * from  avis where ID=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function supprimerAvis($Id){
		$sql="DELETE FROM avis where  ID=:Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);
		try{
            $req->execute();
          header('Location: avis.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}




	function modifierAvis($AvisA,$Id){
		$sql="UPDATE avis SET  ID=:Id,NOM=:Nom,TEXT=:Text,DATEE=:Date,IDP=:Idp WHERE ID=:Id";
		
		$db = config::getConnexion();
		try{		
		$req=$db->prepare($sql);
		$Id=$AvisA->getId();
		$Nom=$AvisA->getNom();
		$Text=$AvisA->getText();
		$Date=$AvisA->getDatee();
		$Idp=$AvisA->getIdp();
	
       

	

		$datas = array(':Id'=>$Id,':Nom'=>$Nom, ':Text'=>$Text, ':Date'=>$Date,':Idp'=>$Idp,);
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Text',$Text);
		$req->bindValue(':Idp',$Idp);
		$req->bindValue(':Date',$Date);
		
		
		
        
		$s=$req->execute();
			
	 }
	 catch (Exception $e){
		 echo " Erreur ! ".$e->getMessage();
echo " Les datas : " ;
print_r($datas);
	 }

}
}

?>