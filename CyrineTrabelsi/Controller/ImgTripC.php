<?php
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

class ImagesTripC {
    
    public function afficherImgTrip() {
        $sql='SELECT id_img,img1,img2,img3,img4,img5,img6 FROM images_tripinf';
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
        $sql="SELECT * FROM images_tripinf where id_img=:id";
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


    public function chercheridVoy($id) {
        $sql="SELECT * FROM images_tripinf where id_voy=:id";
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

    

     public function ajouterImgTrip($images_tripinf) {
        $sql = "insert into images_tripinf (id_voy,img1,img2,img3,img4,img5,img6) values (:id_voy,:img1,:img2,:img3,:img4,:img5,:img6)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'id_voy'=>$images_tripinf->getIdVoy(),
            'img1'=>$images_tripinf->getimg1(),
            'img2'=>$images_tripinf->getimg2(),
            'img3'=>$images_tripinf->getimg3(),
            'img4'=>$images_tripinf->getimg4(),
            'img5'=>$images_tripinf->getimg5(),
            'img6'=>$images_tripinf->getimg6()
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerImgTrip($id_img) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from images_tripinf where id_img=:id_img");
            $query->execute(['id_img'=>$id_img]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifierImgTrip($images_tripinf,$id_img) {
        try {
            $sql="update images_tripinf set img1=:img1,img2=:img2,img3=:img3,img4=:img4,img5=:img5,img6=:img6 where id_img=:id_img";
            $db=config::getConnexion();
            $query=$db->prepare($sql); 
            $query->execute([
            'id_img'=>$id_img,
            'img1'=>$images_tripinf->getimg1(),
            'img2'=>$images_tripinf->getimg2(),
            'img3'=>$images_tripinf->getimg3(),
            'img4'=>$images_tripinf->getimg4(),
            'img5'=>$images_tripinf->getimg5(),
            'img6'=>$images_tripinf->getimg6()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}
?>