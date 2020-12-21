<?php

include "../../config.php";
class carteC
{
   



    function modifierCarteFid($idclient)
    {
       
        $sql="update vagary.fidelite set  point=point+20 where idclient='$idclient'";
       
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






     function supprimerCarte($id){
        $sql="DELETE FROM fidelite where id_client=:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

     function afficherCarte()
    {

        $sql="select * from vagary.fidelite  ";

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