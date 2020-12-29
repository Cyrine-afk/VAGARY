<?php
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

class ClientFollowInfC {
    
    public function afficherUserFollowInf() {
        $sql='SELECT id_follow,id_client,id_inf,date_follow,nom_inf,prenom_inf,login_client,nom_client,prenom_client FROM client_follow_inf inner join client on client_follow_inf.id_client=client.id_client inner join influenceur on client_follow_inf.id_inf=influenceur.id_inf';
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public function afficherUserFollowInfClient($id_inf) {
        $sql='SELECT client.id_client, 
        client.nom_client,
        client.prenom_client,
        client.login_client,
        client.img_client,
        influenceur.id_inf,
        influenceur.nom_inf,
        influenceur.prenom_inf,
        influenceur.img_inf,
        influenceur.nbr_ab_inf,
        client_follow_inf.date_follow
        FROM  client_follow_inf 
        inner join client on client_follow_inf.id_client=client.id_client 
        inner join influenceur on client_follow_inf.id_inf=influenceur.id_inf 
        where client_follow_inf.id_inf='.$id_inf;
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public function afficherUserFollowInfClient2($id_client) {
        $sql='SELECT client.id_client, 
        client.nom_client,
        client.prenom_client,
        client.login_client,
        client.img_client,
        influenceur.id_inf,
        influenceur.nom_inf,
        influenceur.prenom_inf,
        influenceur.img_inf,
        influenceur.nbr_ab_inf,
        influenceur.date_ajout_inf,
        client_follow_inf.date_follow,
        client_follow_inf.id_follow
        FROM  client_follow_inf 
        inner join client on client_follow_inf.id_client=client.id_client 
        inner join influenceur on client_follow_inf.id_inf=influenceur.id_inf 
        where client_follow_inf.id_client='.$id_client;
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
        $sql="SELECT * FROM client_follow_inf where id_follow=:id";
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
        $sql="SELECT * FROM client_follow_inf where id_inf=:id2";
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


     public function ajouterUserFollowInf($userfollowinf) {

        $sql = "insert into client_follow_inf (id_client,id_inf,date_follow) values (:id_client, :id_inf, :date_follow)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'id_client'=>$userfollowinf->getIdClient(),
            'id_inf'=>$userfollowinf->getIdInf(),
            'date_follow'=>$userfollowinf->getDateFollow()
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    } 


     public function supprimerUserFollowInf($id_follow) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from client_follow_inf where id_follow=:id_follow");
            $query->execute(['id_follow'=>$id_follow]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }



     public function modifierUserFollowInf($userinf,$id_follow) {
        try {
            $sql="update client_follow_inf date_follow=:date_follow set  where id_follow=:id_follow";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
            'id_follow'=>$id_follow,
            'date_follow'=>$userinf->getDateFollow()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


}
?>