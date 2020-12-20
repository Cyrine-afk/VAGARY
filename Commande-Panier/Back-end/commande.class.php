<?php

class Commande
{
   // private $DB ;  

public function __construct() 
{
    if (!isset($_SESSION)) 
    {
            session_start() ;
    }
            if (!isset($_SESSION['commande'])) 
            {
                    $_SESSION['commande'] = array() ; 
            }
           // $this->DB = $DB ; 

          }
public function total()
{
    global $DB ; 
            $total = 0 ; 
            $ids = array_keys($_SESSION['commande']) ; 
            if(empty ($ids))
            {
                    $products = array () ; 
            }
            else{  $products = $DB->query ('SELECT id_prod , prix_prod FROM produit WHERE id_prod IN ('.implode(',',$ids) .')')  ;  
                }

                foreach($products as $product)  
                {
                        $total += $product->prix_prod ; 

                }
            return $total ; 



}

public function add ($produit_id)
{

    $_SESSION['commande'][$produit_id]= 1 ; 
}

public function del ($produit_id) 
{
        unset($_SESSION['commande'][$produit_id]) ; 
}

 }