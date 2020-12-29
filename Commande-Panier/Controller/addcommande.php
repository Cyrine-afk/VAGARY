<?php 
//require_once('config.php') ; 
require_once '../Model/db.class.php' ;
require_once 'productsC.php' ; 
require_once '../Model/panier.class.php' ;
require_once '../Model/commande.class.php' ;



$prod=new productsC;
$DB = new DB() ;

  /*  if (isset($_GET['search'])) {
        $listP = $prod->rechercheproducts($_GET['search']);
    } else {
        $listP = $prod->afficherproducts();
    }
    */
    $commande  = new Commande () ; 


if (isset($_GET['id_prod'])) 
{
  $prod= $DB->query ('SELECT id_prod FROM produit WHERE id_prod =:id_prod' , array('id_prod' => $_GET['id_prod'])) ; 

  if (empty($prod) )
    {
    die ("Ce produit n'esxite pas" ) ; 
    }
    $commande->add ($prod[0]->id_prod) ; 
    die ('Order Added to your order list <a href="javascript:history.back()">return to your Cart </a>') ; 



    }
else
{
    die ("Error adding order " ) ; 

}





?>