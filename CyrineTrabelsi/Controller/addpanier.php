<?php 
//require_once('config.php') ; 
require_once '../Model/db.class.php' ;
require_once '../Controller/productsC.php' ; 
require_once '../Model/panier.class.php' ;


$prod=new productsC;
$DB = new DB() ;

  /*  if (isset($_GET['search'])) {
        $listP = $prod->rechercheproducts($_GET['search']);
    } else {
        $listP = $prod->afficherproducts();
    }
    */
    $panier  = new Panier () ;  


if (isset($_GET['id_prod'])) 
{
  $prod= $DB->query ('SELECT id_prod FROM produit WHERE id_prod =:id_prod' , array('id_prod' => $_GET['id_prod'])) ; 

  if (empty($prod) )
    {
    die ("Ce produit n'esxite pas" ) ; 
    }
    $panier->add ($prod[0]->id_prod) ; 
    //die ('Product  Added to your Cart list <a href="javascript:history.back()">return to shop </a>') ; 



    }
else
{
    die ("Vous n'avez pas selectionne le produit ajouter au panier " ) ; 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagary</title>
</head>
<body>
<p>Product added, one moment...</p>

<meta http-equiv="refresh" content="1;URL='<?php echo $_SERVER['HTTP_REFERER']; ?>'" />
</body>
</html>


