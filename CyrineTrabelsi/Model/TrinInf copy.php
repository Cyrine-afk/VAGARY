<?php

require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/Voyage.php';

//Definition et structure d'un objet Trip Influenceur


class TripInf extends Voyage {
    private $id_inf;

    public function __construct (string $nom_voy, $date_voy, $nbr_perso_voy, string $destination_voy, $duree_voy, string $img_voy, string $planning_voy, $prix_voy, $id_type, $id_inf) {
        
        parent::__construct ($nom_voy, $date_voy, $nbr_perso_voy, $destination_voy, $duree_voy, $img_voy, $planning_voy, $prix_voy, $id_type);

        $this->id_inf=$id_inf;
    }


    public function setIdInf ($id_inf) {
        $this->id_inf=$id_inf;
    }
    public function getIdInf () {
        return $this->id_inf;
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