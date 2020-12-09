<?php
require_once 'D:/Programmes/xampp/htdocs/Back&Front/config.php';

class TripInfC {
    
    public function afficherTripInf() {
        $sql='SELECT * FROM tripinf';
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
        $sql="SELECT * FROM tripinf where id_voy=:id";
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


     public function ajouterTripInf($tripinf) {

        $sql = "insert into tripinf (nom_voy,date_voy,nbr_perso_voy,destination_voy,duree_voy,img_voy,planning_voy,prix_voy,id_type,id_inf) values (:nom_voy,:date_voy,:nbr_perso_voy,:destination_voy,:duree_voy,:img_voy,:planning_voy,:prix_voy,:id_type,:id_inf)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'nom_voy'=>$tripinf->getNomVoy(),
            'date_voy'=>$tripinf->getDateVoy(),
            'nbr_perso_voy'=>$tripinf->getNbrPersoVoy(),
            'destination_voy'=>$tripinf->getDestVoy(),
            'duree_voy'=>$tripinf->getDureeVoy(),
            'img_voy'=>$tripinf->getImageInf(),
            'planning_voy'=>$tripinf->getPlanVoy(),
            'prix_voy'=>$tripinf->getPrixVoy(),
            'id_type'=>$tripinf->getIdTypeVoy(),
            'id_inf'=>$tripinf->getIdInf()
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerTripInf($id_voy) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from tripinf where id_voy=:id_voy");
            $query->execute(['id_voy'=>$id_voy]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }



     public function modifierTripInf($tripinf,$id_voy) {
        try {
            $sql="update tripinf set nom_voy=:nom_voy,date_voy=:date_voy,nbr_perso_voy=:nbr_perso_voy,destination_voy=:destination_voy,duree_voy=:duree_voy,img_voy=:img_voy,planning_voy=:planning_voy,prix_voy=:prix_voy,id_type=:id_type,id_inf=:id_inf where id_voy=:id_voy";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
            'id_voy'=>$id_voy,
            'nom_voy'=>$tripinf->getNomVoy(),
            'date_voy'=>$tripinf->getDateVoy(),
            'nbr_perso_voy'=>$tripinf->getNbrPersoVoy(),
            'destination_voy'=>$tripinf->getDestVoy(),
            'duree_voy'=>$tripinf->getDureeVoy(),
            'img_voy'=>$tripinf->getImgVoy(),
            'planning_voy'=>$tripinf->getPlanVoy(),
            'prix_voy'=>$tripinf->getPrixVoy(),
            'id_type'=>$tripinf->getIdTypeVoy(),
            'id_inf'=>$tripinf->getIdInf()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherTripInf($destination_voy) {
        $sql="SELECT * FROM tripinf where destination_voy='$destination_voy'";
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