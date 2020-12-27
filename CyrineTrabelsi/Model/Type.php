<?php

//Definition et structure d'un objet Trip Influenceur

class Type { 
    private $id__type ;
    private string $nom_type;
    private string $img_type;


    public function __construct (string $nom_type, string $img_type) {
        $this->nom_type=$nom_type;
        $this->img_type=$img_type;
    }


    public function setIdType ($id__type) {
        $this->id__type=$id__type;
    }
    public function getIdType () {
        return $this->id__type;
    }


    public function setNomType ($nom_type) {
        $this->nom_type=$nom_type;
    }
    public function getNomType () {
        return $this->nom_type;
    }


    public function setImgType ($img_type) {
        $this->img_type=$img_type;
    }
    public function getImgType () {
        return $this->img_type;
    }

}

?>