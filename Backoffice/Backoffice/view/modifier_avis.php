<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/v2.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">VAGARY TRAVEL</h1>
            <p>By JD&Co</p>
          </div>
        </div>
        
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li><a href="index.html"> <i class="icon-home"></i>Home </a></li>
          <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="#">Influencers</a></li>
              <li><a href="#">Communities</a></li>
              <li><a href="#">Trips</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Carts</a></li>
              <li><a href="#">Users</a></li>
            </ul>
          </li>
          <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Tables</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Avis        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Avis Table</strong></div>
                  <div class="table-responsive"> 
                  <?PHP
                  ob_start();

include "../model/avis.php";
include "../controller/avisA.php";

if (isset($_GET['Id'])){
	$avisA=new AvisA();
    $result=$avisA->recupererAvis($_GET['Id']);
	foreach($result as $row){
		$Id=$row['ID'];
		$Nom=$row['NOM'];
    $Text=$row['TEXT'];
    $Date=$row['DATEE'];
    $Idp=$row['IDP'];
        ?>

             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          
             <form name="formmodifavis"  method="POST" action="modifier_avis.php?Id=<?PHP echo $row['ID']; ?>" >

<input type="hidden" value="<?php echo $Id; ?>" name="Id">

<tr><td>
<label> Nom </label></td>
<td><input type="text"  value="<?php echo $Nom;?>" class="form-control" name="Nom" placeholder="Nom" style="width:400px"> </td></tr>

<tr><td><label> Text </label></td>
<td><input type="text"  value="<?php echo $Text;?>" class="form-control" name="Text" placeholder="Text" style="width:400px"> </td></tr>
</td></tr>
<tr><td><label> date </label></td>
<td><input type="text" value="<?php echo $Date;?>" class="form-control" name="Date" placeholder="date" style="width:400px"> </td></tr>
<tr><td><label> Id produit </label></td>

<td><input type="number" value="<?php echo $Idp;?>" class="form-control" name="Idp" placeholder="Id produit" style="width:400px"> </td></tr>


</table>




<button  name="modifier" class="ajouter">modifier</button>


                            
                           
                           
                           
                          
            </form><?PHP }}
            if (isset($_POST['modifier'])){

              $avis1=new AvisA();
            
            
              $avis=new Avis($_GET['Id'],$_POST['Nom'],$_POST['Text'],$_POST['Date'],$_POST['Idp']);
              $avis1->modifierAvis($avis,$_POST['Id']);
              header('Location:avis.php');

            
                      ob_end_flush();
            } ?>

    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
	  </table> 

</br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2020 &copy; Design by <a href="index.html">JD&Co</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>