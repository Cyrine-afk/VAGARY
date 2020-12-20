<?php

//Definition et structure d'un objet Influenceur

class ImagesTrip {
    private $id_img;
    private $id_voy;
    private string $img1;
    private string $img2;
    private string $img3;
    private string $img4;
    private string $img5;
    private string $img6;


    public function __construct ($id_voy, string $img1, string $img2, string $img3, string $img4, string $img5, string $img6) {
        $this->id_voy=$id_voy;
        $this->img1=$img1;
        $this->img2=$img2;
        $this->img3=$img3;
        $this->img4=$img4;
        $this->img5=$img5;
        $this->img6=$img6;
    }


    public function setIdImg ($id_img) {
        $this->id_img=$id_img;
    }
    public function getIdImg () {
        return $this->id_img;
    }


    
    public function setIdVoy ($id_voy) {
        $this->id_voy=$id_voy;
    }
    public function getIdVoy () {
        return $this->id_voy;
    }
    
    
    
    public function setimg1 ($img1) {
        $this->img1=$img1;
    }
    public function getimg1 () {
        return $this->img1;
    }



    public function setimg2 ($img2) {
        $this->img2=$img2;
    }
    public function getimg2 () {
        return $this->img2;
    }




    public function setimg3 ($img3) {
        $this->img3=$img3;
    }
    public function getimg3 () {
        return $this->img3;
    }





    public function setimg4 ($img4) {
        $this->img4=$img4;
    }
    public function getimg4 () {
        return $this->img4;
    }




    public function setimg5 ($img5) {
        $this->img5=$img5;
    }
    public function getimg5 () {
        return $this->img5;
    }




    public function setimg6 ($img6) {
        $this->img6=$img6;
    }
    public function getimg6 () {
        return $this->img6;
    }


}

?>