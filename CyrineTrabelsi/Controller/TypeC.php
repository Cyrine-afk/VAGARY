<?php
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

class TypeC {
    
    public function afficherType() {
        $sql='SELECT * FROM typev';
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public function chercheridTypeVoy($id) {
        $sql="SELECT * FROM typev where id__type=:id";
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

     public function ajouterTypeVoy($typev) {
        $sql = "insert into typev (nom_type) values (:nom_type)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'nom_type'=>$typev->getNomType()
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerTypeVoy($id__type) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from typev where id__type=:id__type");
            $query->execute(['id__type'=>$id__type]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifierTypeVoy($type,$id_type) {
        try {
            $sql="update typev set nom_type=:nom_type where id__type=:id__type";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
            'id__type'=>$id_type,
            'nom_type'=>$type->getNomType()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherTypeVoy($nom_type) {
        $sql="SELECT * FROM typev where nom_type='$nom_type'";
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