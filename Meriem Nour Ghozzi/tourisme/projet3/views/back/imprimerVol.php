<?php

include "../../core/Reservation_vol_userC.php";

 session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
    

 }
   require ("pdf/fpdf.php");
    $Reservation_vol_userC=new Reservation_vol_userC();

$listelesreservation_tous_vol=$Reservation_vol_userC->afficherlesreservation_vol($_POST['id']);



    $pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(130,5,'PDF pour ADMIN :',1,0);
    $pdf->Cell(59,5,$_SESSION['username'],1,1);
    $pdf->Cell(130,5,' ',0,1);

    $pdf->SetFont('Arial','',12);


    $pdf->Cell(8,5,'#',1,0);
    $pdf->Cell(80,5,'Date de achat',1,0);

    $pdf->Cell(20,5,'nom client',1,0);
  
    $pdf->Cell(30,5,'Nombre Dispo',1,1);

    

    
           
 
    foreach($listelesreservation_tous_vol as $row){

    $pdf->Cell(8,5,$row["id"],1,0);
        $pdf->Cell(80,5, $row['date_Achat'] ,1,0);

         $pdf->Cell(20,5,$row["nomuser"],1,0);
  
 $pdf->Cell(30,5,$row['nbr_places'],1,1);

                  
}
  


    $dest = $_SESSION['username'].'_'.date("Y-m-d-h-m-s").'_vol.pdf';
    $pdf->Output('F', $dest);
           header('Location: AfficherVol.php'); 

?>