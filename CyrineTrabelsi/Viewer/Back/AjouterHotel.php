<?php  /*session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
     
 }*/

?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forms</title>
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
    <link rel="shortcut icon" href="img/JD&Co3.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Vagary</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">V</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
          
            
            <!-- Tasks-->
         
            <!-- Tasks end-->
            
            <!-- Log out -->
            <div class="list-inline-item logout">                   <a id="logout" href="../Logout.php" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
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
          <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
          
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Forms</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="formInf.php">Add an influencer</a></li>
              <li><a href="formType.php">Add a theme</a></li>
              <li><a href="ajouterP.php">Add a product</a></li>
              <li><a href="AjouterHotel.php">Add a hotel</a></li>
              <li><a href="AjouterVol.php">Add a flight</a></li>
              <li><a href="ajouterP.php">Add a community</a></li>
            </ul>
          </li>

          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="influ.php">Influencers</a></li>
              <li><a href="themes.php">Themes</a></li>
              <li><a href="comm.html">Communities</a></li>
              <li><a href="AfficherHotel.php">Hotels</a></li>
              <li><a href="afficherlesreservation_hotel.php">Hotel reservations</a></li>
              <li><a href="AfficherVol.php">Flights</a></li>
              <li><a href="afficherlesreservation_vol.php">Flight reservations</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="carts.html">Carts</a></li>
              <li><a href="users.php">Users</a></li>
              <li><a href="carte.php">Fidelité</a></li>
            </ul>
          </li>
          <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
         
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                           <div class="col mr-2">
                                           
                                       <p>Afficher Hotel </p>
                                        </div>
                                        <div class="col-auto">
                                             <a class="btn btn-primary"  href="AfficherHotel.php"><i class="fa fa-bars"> </i></a>
                            
                                        </div>
                    </div>
                   
                  </div>
                  
                </div>
              </div>
    
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
<div class="col-xl-9 col-md-6 mb-6">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                           
                                                           <form  onsubmit="return validateForm()" name="myForm" method="POST" action="AjouterHotelC.php" >
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                             <div class="form-group">
                                <input class="form-control"  id="nom" name="nom" type="text" placeholder="nom"   />
                  
  
                      </div>
                            <div class="form-group">
                                <input class="form-control"  id="lieu" name="lieu" type="text" placeholder="lieu"   />
                  
  
                      </div>
                             
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="description"  id="description" placeholder="description *"  ></textarea>
       
                            </div>
                            <br>
                             <div class="form-group">

 <input class="form-control"  id="date_disponible_Debut" name="date_disponible_Debut" type="datetime-local"   placeholder="date_disponible_Debut"   />
                            </div>
                              <div class="form-group">
                                
 <input class="form-control"  id="date_disponible_Fin" name="date_disponible_Fin" type="datetime-local" placeholder="date_disponible_Fin"   />
                            </div>
                              <div class="form-group">
                                
 <input class="form-control"  id="nbr_places" name="nbr_places" type="number" placeholder="nbr_places"   />
                            </div>
                                <div class="form-group">
                                
 <input class="form-control"  id="image" name="image" type="file" placeholder="image"   />
                            </div>
                        </div>
                       
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Envoi</button>
                    </div>
                </form>
                <script>
                    function convertDateToUTC(date) { 
    return new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(), date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds()); 
}
function validateForm() {
      var nom = document.forms["myForm"]["nom"].value;
  var lieu = document.forms["myForm"]["lieu"].value;
    var description = document.forms["myForm"]["description"].value;
         var nbr_places = document.forms["myForm"]["nbr_places"].value;

    var image = document.forms["myForm"]["image"].value;
        var dateTimeStr = document.forms["myForm"]["date_disponible_Debut"].value;
         var dateTimeStrfin = document.forms["myForm"]["date_disponible_Fin"].value;

var date_disponible_Debut = convertDateToUTC(new Date(dateTimeStr));
var date_disponible_Fin = convertDateToUTC(new Date(dateTimeStrfin));
var now = new Date();
  if (nom == "") {
    alert("nom vide");
    return false;
  }
  if (lieu == "") {
    alert("lieu vide");
    return false;
  }
    if (description == "") {
    alert("description vide");
    return false;
  }
    if (isNaN(date_disponible_Debut.getTime()) ) {

    alert("date_disponible_Debut vide");
    return false;
  }
    if ( date_disponible_Debut < now ) {

    alert("date_disponible_Debut erreur");
    return false;
  }
 
    if (isNaN(date_disponible_Fin.getTime()) ) {

    alert("date_disponible_Fin vide");
    return false;
  }
    if ( date_disponible_Fin < now ) {

    alert("date_disponible_Debut erreur");
    return false;
  }
    if ( date_disponible_Fin <= date_disponible_Debut ) {

    alert("date_disponible_Fin doit etre sup a date_disponible_Debut");
    return false;
  }
    if (nbr_places == "" ) {

    alert("nbr_places vide");
    return false;
  }

    if ( nbr_places <= 0) {

    alert("nbr_places ne doit pas etre negative");
    return false;
  }
   
      if (image == "") {

    alert("image vide");
    return false;
  }

 
    
}
</script>

                                        </div>
                                   
                                    </div>
                                </div>
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
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>