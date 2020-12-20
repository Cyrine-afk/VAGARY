<?php
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

class TripInfUserC {
    
    public function afficherTripInfUser() {
        $sql='SELECT id_res,nom_voy,date_res,nom_inf,prenom_inf FROM tripinfuser inner join tripinf on tripinfuser.id_voy=tripinf.id_voy inner join influenceur on tripinfuser.id_inf=influenceur.id_inf';
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public function afficherTripInfUserClient($id_client) {
        $sql='SELECT tripinf.id_voy, 
        tripinf.destination_voy,
        tripinf.date_voy,
        tripinf.duree_voy,
        tripinf.nom_voy,
        tripinf.prix_voy,
        influenceur.nom_inf,
        influenceur.prenom_inf,
        influenceur.img_inf,
        tripinf.img_voy 
        FROM tripinfuser 
        inner join tripinf on tripinfuser.id_voy=tripinf.id_voy 
        inner join influenceur on tripinfuser.id_inf=influenceur.id_inf 
        where tripinfuser.id_client='.$id_client;
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public function chercherid($id) {
        $sql="SELECT * FROM tripinfuser where id_voy=:id";
        $db=Config::getConnexion();
        try{
            $query=$db->prepare($sql);
        $query->execute(['id' =>$id ]);
        $liste=$query->fetch();
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    }


    public function chercheridInf($id) {
        $sql="SELECT * FROM tripinfuser where id_inf=:id2";
        $db=Config::getConnexion();
        try{
            $query=$db->prepare($sql);
        $query->execute(['id2' =>$id ]);
        $liste=$query->fetch();
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    }


     public function ajouterTripInfUser($tripinfuser) {

        $sql = "insert into tripinfuser (id_voy, id_client, id_inf, date_res) values (:id_voy, :id_client, :id_inf, :date_res)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'id_voy'=>$tripinfuser->getIdVoy(),
            'id_client'=>$tripinfuser->getIdClient(),
            'id_inf'=>$tripinfuser->getIdInf(),
            'date_res'=>$tripinfuser->getDateRes()
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    } 

     public function supprimerTripInfUser($id_res) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from tripinfuser where id_res=:id_res");
            $query->execute(['id_res'=>$id_res]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }



     public function modifierTripInfUser($tripinf,$id_res) {
        try {
            $sql="update tripinfuser date_res=:date_res set  where id_res=:id_res";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
            'id_res'=>$id_res,
            'date_res'=>$tripinf->getDateRes()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherTripInf($nom_type) {
        $sql="SELECT * FROM tripinfuser where nom_type='$nom_type'";
        $db=Config::getConnexion();
        try{
        $liste = $db->query($sql);
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    } 


}
?>