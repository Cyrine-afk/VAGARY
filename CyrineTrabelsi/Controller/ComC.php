<?php


class CommandeC
{
    

     function supprimerCommande($id_client){
        $sql="DELETE FROM commande where id_comd=:id_comd";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_comd',$id_client);
        try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function afficherCommande()
    {

        $sql='SELECT * FROM commande';

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


function modifierClient($id_comd,$date_achat_comd,$quantity,$paiment)
    {

       $sql = "UPDATE commande SET date_achat_comd='$date_achat_comd',quantity='$quantity',paiment='$paiment' WHERE id_comd='$id_comd' "; 
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
    function affichercommandesearch($search)
    {

        $sql="select * from commande where id_comd='$search' OR date_achat_comd='$search' OR paiment='$search'";

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


    function affichercommandedate($id)
    {

        $sql="select * from vagary.commande where id_prod='$id' ";

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