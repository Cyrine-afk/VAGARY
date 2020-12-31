<?php  session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
     
 }

?>
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
          <li><a href="AfficherHotel.php"> <i class="icon-home"></i>List Hotel </a></li>
          <li class="active"><a href="AfficherVol.php"> <i class="icon-padnote"></i>List Vol </a></li>
         
        
     
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
                                           
                                       <p>Afficher Vol </p>
                                        </div>
                                        <div class="col-auto">
                                             <a class="btn btn-primary"  href="AfficherVol.php"><i class="fa fa-bars"> </i></a>
                            
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
                                           
                                                             <form  onsubmit="return validateForm()" name="myForm" method="POST" action="AjouterVolC.php" >
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                          
                       
                              <div class="form-group">
                                
 <input class="form-control"  id="depart" name="depart" type="text" placeholder="depart"   />
                            </div>
                                  <div class="form-group">
                                
 <input class="form-control"  id="destination" name="destination" type="text" placeholder="destination"   />
                            </div>
                      
                              <div class="form-group">
                                
 <input class="form-control"  id="nbr_places" name="nbr_places" type="number" placeholder="nbr_places"   />
                            </div>
                              <div class="form-group">
                                
 <input class="form-control"  id="prix" name="prix" type="number" placeholder="prix"   />
                            </div>
                                 <div class="form-group">

 <input class="form-control"  id="date_heur_disponible" name="date_heur_disponible" type="datetime-local"   placeholder="date_heur_disponible"   />
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

 var depart = document.forms["myForm"]["depart"].value;
  var destination = document.forms["myForm"]["destination"].value;
         var nbr_places = document.forms["myForm"]["nbr_places"].value;
    var prix = document.forms["myForm"]["prix"].value;

        var dateTimeStr = document.forms["myForm"]["date_heur_disponible"].value;


var date_heur_disponible = convertDateToUTC(new Date(dateTimeStr));

var now = new Date();

    if (depart == "" ) {

    alert("depart vide");
    return false;
  }
      if (destination == "" ) {

    alert("destination vide");
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
       if (prix == "" ) {

    alert("prix vide");
    return false;
  }

    if ( prix <= 0) {

    alert("prix ne doit pas etre negative");
    return false;
  }
    if (isNaN(date_heur_disponible.getTime()) ) {

    alert("date_heur_disponible vide");
    return false;
  }
    if ( date_heur_disponible < now ) {

    alert("date_heur_disponible erreur");
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