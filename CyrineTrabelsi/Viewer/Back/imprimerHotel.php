<?php

include "../../Controller/Reservation_hotel_userC.php";
include "../../Controller/HotelC2.php";


 /*session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
    

 }*/
   require ("pdf/fpdf.php");
 $Reservation_hotel_userC=new Reservation_hotel_userC();
 $HotelC2=new HotelC();
$listelesreservation_tous_hotel=$Reservation_hotel_userC->afficherlesreservation_hotel($_POST['id']);
$hotel = $HotelC2->recupererhotel($_POST['id']);
$nom_hotel = $hotel[0]->nom;

var_dump($listelesreservation_tous_hotel);
    $pdf=new FPDF('P','mm','A3');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
 

    
   $pdf->Cell(130,5,'PDF pour ADMIN ! nom de hotel :',1,0);
    $pdf->Cell(59,5,$nom_hotel,1,1);
    $pdf->Cell(130,5,' ',0,1);

    $pdf->SetFont('Arial','',12);


    $pdf->Cell(8,5,'#',1,0);
    $pdf->Cell(120,5,'Date de reservation',1,0);

    $pdf->Cell(30,5,'nom Client',1,0);
   $pdf->Cell(30,5,'prenom Client',1,0);
    $pdf->Cell(50,5,'mail',1,1);
    
           

    foreach($listelesreservation_tous_hotel as $row){

    $pdf->Cell(8,5,$row["id"],1,0);
        $pdf->Cell(120,5, $row['date_Debut']  ."Jusqu' a ".   $row['date_Fin'],1,0);

         $pdf->Cell(30,5,$row["nomuser"],1,0);
  
 $pdf->Cell(30,5,$row['prenom'],1,0);
 $pdf->Cell(50,5,$row['mail'],1,1);
                  
}
  


    $dest = $_SESSION['username'].'_'.date("Y-m-d-h-m-s").'_hotel.pdf';
    $pdf->Output('F', $dest);
        header('Location: AfficherHotel.php');

?>