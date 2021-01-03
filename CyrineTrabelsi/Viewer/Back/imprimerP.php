<?php

include "ComC.php";

$commande=new CommandeC();
$listc=$commande->afficherPaiment() ;
?>

<html>
<body onload="window.print()">
 <div class="title"><strong>Les paiment </strong></div>
                  <div class="table-responsive"> 
                    <table class="table" border="1px">
                      <tr>
                      <td>ID</td>
                      <td>NameOnCard</td>
                      <td>CardNumber</td>
                      <td>ExpiryDate</td>
                      <td>CVV</td>
                      <td>ZIP</td>
                        
                      
                    </tr>
                <?php
                
                foreach ($listc as $row)
                {
                    echo '
                        <tr>
                        
                            <td>'.$row["id"].'</td>
                            <td>'.$row["NameOnCard"].'</td>
                            <td>'.$row["CardNumber"].'</td>
                            <td>'.$row["ExpiryDate"].'</td>
                            <td>'.$row["CVV"].'</td>
                            <td>'.$row["ZIP"].'</td>
                         
                          
                
                
                
                    
                
                        </tr>
                    ';
                }
                ?>
                    </table>
                  </div>
                </div>



</body>
</html>
