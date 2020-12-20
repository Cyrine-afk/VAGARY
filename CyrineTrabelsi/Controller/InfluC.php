<?php
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

class InfluC {
    
    public function afficherInfluenceur() {
        $sql='SELECT * FROM influenceur';
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }


    public function afficherInfluenceurStat() {
        $sql='SELECT * FROM influenceur WHERE nbr_ab_inf=(SELECT max(nbr_ab_inf) FROM influenceur)';
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
        $sql="SELECT * FROM influenceur where id_inf=:id";
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

     public function ajouterInfluenceur($influenceur) {
        $sql = "insert into influenceur (nom_inf,prenom_inf,date_ajout_inf,bio_inf,feedback_inf,img_inf,nbr_ab_inf,fb_inf,insta_inf) values (:nom_inf,:prenom_inf,:date_ajout_inf,:bio_inf,:feedback_inf,:img_inf,:nbr_ab_inf,:fb_inf,:insta_inf)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'nom_inf'=>$influenceur->getNomInf(),
            'prenom_inf'=>$influenceur->getPrenomInf(),
            'date_ajout_inf'=>$influenceur->getDateAjoutInf(),
            'bio_inf'=>$influenceur->getBioInf(),
            'feedback_inf'=>$influenceur->getFeedBackInf(),
            'img_inf'=>$influenceur->getImageInf(),
            'nbr_ab_inf'=>$influenceur->getNbrAbInf(),
            'fb_inf'=>$influenceur->getFbInf(),
            'insta_inf'=>$influenceur->getInstaInf()
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerInfluenceur($id_inf) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from influenceur where id_inf=:id_inf");
            $query->execute(['id_inf'=>$id_inf]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifierInfluenceur($influenceur,$id_inf) {
        try {
            $sql="update influenceur set nom_inf=:nom_inf,prenom_inf=:prenom_inf,date_ajout_inf=:date_ajout_inf,bio_inf=:bio_inf,feedback_inf=:feedback_inf,img_inf=:img_inf,nbr_ab_inf=:nbr_ab_inf,fb_inf=:fb_inf,insta_inf=:insta_inf where id_inf=:id_inf";
            $db=config::getConnexion();
            $query=$db->prepare($sql); 
            $query->execute([
            'id_inf'=>$id_inf,
            'nom_inf'=>$influenceur->getNomInf(),
            'prenom_inf'=>$influenceur->getPrenomInf(),
            'date_ajout_inf'=>$influenceur->getDateAjoutInf(),
            'bio_inf'=>$influenceur->getBioInf(),
            'feedback_inf'=>$influenceur->getFeedBackInf(),
            'img_inf'=>$influenceur->getImageInf(),
            'nbr_ab_inf'=>$influenceur->getNbrAbInf(),
            'fb_inf'=>$influenceur->getFbInf(),
            'insta_inf'=>$influenceur->getInstaInf()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherInfluenceur($nom_inf) {
        $sql="SELECT * FROM influenceur where nom_inf='$nom_inf'";
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