<?php

include "../../controller/clientC.php";

$clientC=new clientC();
$listclient=$clientC->afficherClient();
?>

<html>
<body onload="window.print()">
 <div class="title"><strong>Les comptes clients </strong></div>
                  <div class="table-responsive"> 
                    <table class="table" border="1px">
                      <tr>
                        <td>Image</td>
                        <td>Id</td>

                        <td>Name</td>
                        <td>lastname</td>
                        <td>Birthday</td>
                        <td>Login</td>
                        <td>password</td>
                        <td>Email</td>
                        
                      
                    </tr>
                <?php
                
                foreach ($listclient as $row)
                {
                    echo '
                        <tr>
                            <td><img width="80px" height="80px" src="img/'.$row["img_client"].'"'.' ></td>
                            <td>'.$row["id_client"].'</td>
                            <td>'.$row["nom_client"].'</td>
                            <td>'.$row["prenom_client"].'</td>
                            <td>'.$row["date_nai_client"].'</td>
                            <td>'.$row["login_client"].'</td>
                            <td>'.$row["mdp_client"].'</td>
                            <td>'.$row["mail_client"].'</td>
                          
                
                
                
                    
                
                        </tr>
                    ';
                }
                ?>
                    </table>
                  </div>
                </div>



</body>
</html>
