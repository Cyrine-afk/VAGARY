<?php

//Definition et structure d'un objet Influenceur

class Influ {
    private $id_inf;
    private string $nom_inf;
    private string $prenom_inf;
    private string $date_ajout_inf;
    private string $bio_inf;
    private string $feedback_inf;
    private string $image_inf;
    private $nbr_ab_inf;
    private string $fb_inf;
    private string $insta_inf;


    public function __construct (string $nom_inf, string $prenom_inf, string $date_ajout_inf, string $bio_inf, string $feedback_inf, string $image_inf, $nbr_ab_inf, string $fb_inf, string $insta_inf) {
        $this->nom_inf=$nom_inf;
        $this->prenom_inf=$prenom_inf;
        $this->date_ajout_inf=$date_ajout_inf;
        $this->bio_inf=$bio_inf;
        $this->feedback_inf=$feedback_inf;
        $this->image_inf=$image_inf;
        $this->nbr_ab_inf=$nbr_ab_inf;
        $this->fb_inf=$fb_inf;
        $this->insta_inf=$insta_inf;
    }

    
    public function setIdInf ($id_inf) {
        $this->id_inf=$id_inf;
    }
    public function getIdInf () {
        return $this->id_inf;
    }
    
    
    
    public function setNomInf ($nom_inf) {
        $this->nom_inf=$nom_inf;
    }
    public function getNomInf () {
        return $this->nom_inf;
    }

    public function setPrenomInf ($prenom_inf) {
        $this->prenom_inf=$prenom_inf;
    }
    public function getPrenomInf () {
        return $this->prenom_inf;
    }

    public function setDateAjoutInf ($date_ajout_inf) {
        $this->date_ajout_inf=$date_ajout_inf;
    }
    public function getDateAjoutInf () {
        return $this->date_ajout_inf;
    }



    public function setBioInf ($bio_inf) {
        $this->bio_inf=$bio_inf;
    }
    public function getBioInf () {
        return $this->bio_inf;
    }

    public function setFeedBackInf ($feedback_inf) {
        $this->feedback_inf=$feedback_inf;
    }
    public function getFeedBackInf () {
        return $this->feedback_inf;
    }

    public function setImageInf ($image_inf) {
        $this->image_inf=$dimage_inf;
    }
    public function getImageInf () {
        return $this->image_inf;
    }



    public function setNbrAbInf ($nbr_ab_inf) {
        $this->nbr_ab_inf=$nbr_ab_inf;
    }
    public function getNbrAbInf () {
        return $this->nbr_ab_inf;
    }

    public function setFbInf ($fb_inf) {
        $this->fb_inf=$fb_inf;
    }
    public function getFbInf () {
        return $this->fb_inf;
    }

    public function setInstaInf ($insta_inf) {
        $this->insta_inf=$insta_inf;
    }
    public function getInstaInf () {
        return $this->insta_inf;
    }

}

?>