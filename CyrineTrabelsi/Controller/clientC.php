<?php

include "../../config.php";
class clientC
{
    function ajouterClient($client)
    {
        $sql= "insert into vagary.client(id_client, nom_client, prenom_client, date_nai_client, mail_client, date_ajout_client, mdp_client, login_client, img_client, role ) values
         (:id_client,:nom_client,:prenom_client,:date_nai_client,:mail_client,now(),:mdp_client,:login_client,:img_client, 'client')";
            $id_client=$client->getId_client();
         $sql2="insert into vagary.fidelite (id_client,point) values ( '$id_client',0)";
        $db = config::getConnexion();
        try
        {
             $db->query($sql2);
            $req=$db->prepare($sql);
            $id_client=$client->getId_client();
            $nom_client=$client->getNom_client();
            $prenom_client=$client->getPrenom_client();
            $date_nai_client=$client->getDate_nai_client();
            $mail_client=$client->getMail_client();
           
            $mdp_client=$client->getMdp_client();
            $login_client=$client->getLogin_client();
            $img_client=$client->getImg_client();

            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':nom_client',$nom_client);
            $req->bindValue(':prenom_client',$prenom_client);
            $req->bindValue(':date_nai_client',$date_nai_client);
            $req->bindValue(':mail_client',$mail_client);
            
            $req->bindValue(':mdp_client',$mdp_client);
            $req->bindValue(':login_client',$login_client);
            $req->bindValue(':img_client',$img_client);

            $req->execute();

        }
        catch (Exception $e)
        {
            die('404:client exist!!!');

        }

    }

     function supprimerClient($id_client){
        $sql="DELETE FROM client where id_client=:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id_client);
        try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   













    
     function afficherClient()
    {

        $sql="select * from vagary.client ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
  function afficherClient1($id)
    {

        $sql="select * from vagary.client where id_client='$id' ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }



    function modifierClient($id_client,$nom,$prenom,$date,$mail,$mdp,$login)
    {
        $sql="update vagary.client set nom_client= '$nom', prenom_client='$prenom', date_nai_client='$date', mail_client='$mail',mdp_client='$mdp' ,login_client= '$login' where id_client='$id_client'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
     function modifierClient1($id,$nom,$prenom,$date,$mail)
    {
        $sql="update vagary.client set nom_client= '$nom', prenom_client='$prenom', date_nai_client='$date', mail_client='$mail' where id_client='$id'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
         function afficherClient3($mois)
    {

        $sql="select * from client where MONTH(date_ajout_client)='$mois'  ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
       function afficherclienttri($cc)
    {
        
        $sql="select * from client order by $cc desc";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherclientsearch($search)
    {

        $sql="select * from client where id_client='$search' OR nom_client='$search' OR prenom_client='$search'";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>    