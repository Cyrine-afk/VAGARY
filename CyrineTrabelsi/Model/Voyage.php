<?php

require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/Type.php';

//Definition et structure d'un objet Voyage

class Voyage {
    private $id_voy;
    private string $nom_voy;
    private string $date_voy;
    private $nbr_perso_voy;
    private string $destination_voy;
    private $duree_voy;
    private string $img_voy;
    private string $planning_voy;
    private $prix_voy;
    private $id_type;


    public function __construct (string $nom_voy, string $date_voy, $nbr_perso_voy, string $destination_voy, $duree_voy, string $img_voy, string $planning_voy, $prix_voy, $id_type) {
        $this->id_voy=$id_voy;
        $this->nom_voy=$nom_voy;
        $this->date_voy=$date_voy;
        $this->nbr_perso_voy=$nbr_perso_voy;
        $this->destination_voy=$destination_voy;
        $this->duree_voy=$duree_voy;
        $this->img_voy=$img_voy;
        $this->planning_voy=$planning_voy;
        $this->prix_voy=$prix_voy;
        $this->id_type=$id_type;
    }


    public function setIdVoy ($id_voy) {
        $this->id_voy=$id_voy;
    }
    public function getIdVoy () {
        return $this->id_voy;
    }


    public function setNomVoy ($nom_voy) {
        $this->nom_voy=$nom_voy;
    }
    public function getNomVoy () {
        return $this->nom_voy;
    }



    public function setDateVoy ($date_voy) {
        $this->date_voy=$date_voy;
    }
    public function getDateVoy () {
        return $this->date_voy;
    }



    public function setNbrPersoVoy ($nbr_perso_voy) {
        $this->nbr_perso_voy=$nbr_perso_voy;
    }
    public function getNbrPersoVoy () {
        return $this->nbr_perso_voy;
    }
    


    public function setDestVoy ($destination_voy) {
        $this->destination_voy=$destination_voy;
    }
    public function getDestVoy () {
        return $this->destination_voy;
    }



    public function setDureeVoy ($duree_voy) {
        $this->duree_voy=$duree_voy;
    }
    public function getDureeVoy () {
        return $this->duree_voy;
    }



    public function setImgVoy ($img_voy) {
        $this->img_voy=$img_voy;
    }
    public function getImgVoy () {
        return $this->img_voy;
    }



    public function setPlanVoy ($planning_voy) {
        $this->planning_voy=$planning_voy;
    }
    public function getPlanVoy () {
        return $this->planning_voy;
    }



    public function setPrixVoy ($prix_voy) {
        $this->prix_voy=$prix_voy;
    }
    public function getPrixVoy () {
        return $this->prix_voy;
    }


    public function setIdTypeVoy ($id_type) {
        $this->id_type=$id_type;
    }
    public function getIdTypeVoy () {
        return $this->id_type;
    }

}

?>