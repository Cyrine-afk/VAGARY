<?php

include "ComC.php";

$commande=new CommandeC();
$listc=$commande->afficherCommande()  ;
?>

<html>
<body onload="window.print()">
 <div class="title"><strong>Les commandes </strong></div>
                  <div class="table-responsive"> 
                    <table class="table" border="1px">
                      <tr>
                      <td>ID_Commande</td>
                      <td>ID_Produit</td>
                      <td>Prix_Total</td>
                      <td>Quantite</td>
                      <td>Date</td>
                      <td>Paiment</td>
                        
                      
                    </tr>
                <?php
                
                foreach ($listc as $row)
                {
                    echo '
                        <tr>
                        
                            <td>'.$row["id_comd"].'</td>
                            <td>'.$row["id_prod"].'</td>
                            <td>'.$row["prix_total"].'</td>
                            <td>'.$row["quantity"].'</td>
                            <td>'.$row["date_achat_comd"].'</td>
                            <td>'.$row["paiment"].'</td>
                         
                          
                
                
                
                    
                
                        </tr>
                    ';
                }
                ?>
                    </table>
                  </div>
                </div>



</body>
</html>
