<?php
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

class msgC {
    
    public function afficherMsg() {
        $sql='SELECT id_client,nom_client,prenom_client,img_client,msg,id_msg,login_client FROM msg_client inner join client on msg_client.id_client=client.id_client ';
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }


     public function ajouterMsg($msg) {

        $sql = "insert into msg_client (msg,id_client) values (:msg,:id_client)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'msg'=>$msg->getIdMsg(),
            'id_client'=>$msg->getIdClient()
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        } 
    } 


}
?>