<?php 
    require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/TripInfC.php';
    require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/TripInf.php';
    
    if(isset($_GET['id_voy'])
    && isset($_POST["nom_voy"])
    && isset($_POST["date_voy"]) 
    && isset($_POST["nbr_perso_voy"]) 
    && isset($_POST["destination_voy"]) 
    && isset($_POST["duree_voy"]) 
    && isset($_POST["planning_voy"])
    && isset($_POST["prix_voy"]) 
    && isset($_POST["img_voy"]) 
    && isset($_POST["nom_type"])
    && isset($_POST["id_inf"])) {
      var_dump($_POST['nom_voy']);
      $tripinf= new TripInf(
        $_POST["nom_voy"] ,
        $_POST["date_voy"] ,
        $_POST["nbr_perso_voy"] ,
        $_POST["destination_voy"] ,
        $_POST["duree_voy"] ,
        $_POST["img_voy"] ,
        $_POST["planning_voy"] ,
        $_POST["prix_voy"], 
        $_POST["nom_type"], 
        $_POST["id_inf"] );
      $newtripinf= new TripInfC();
      $newtripinf->modifierTripInf($tripinf,$_POST['id_voy']);
      header("Location:TripInf.php");

    }
    else  
      echo "ICI";


      require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/TypeC.php';
      require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/Type.php';

  $tp1= new TypeC();
  $liste2=$tp1->afficherType();

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

        <style>

          .form-control {
           height: calc(2.4rem + 2px);
           border: 1px solid #444951;
           background: transparent;
           border-radius: 0;
           color: #979a9f;
           padding: 0.45rem 0.75rem;
          }

          input.form-control:valid {
            border:1px solid #0a0;
          }
          input.form-control:invalid {
            border:1px solid #a00;
          }
          input.form-control:valid + span:before  {
            content: "\f00c";
            font-family: "FontAwesome";
            color:#0a0;
            font-size: 1.5em;
          }	
          input.form-control:invalid + span:before  {
            content: "\f00d";
            font-family: "FontAwesome";
            color:#a00;
            font-size: 1.5em;
          }
        </style>

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
            <!-- Navbar Header--><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Vagary</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">V</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                    <div class="status away"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                    <div class="status busy"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                    <div class="status offline"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
            </div>
            <!-- Tasks-->
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
              <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
              </div>
            </div>
            <!-- Tasks end -->
            
            <!-- Log out -->
            <div class="list-inline-item logout">                   <a id="logout" href="login.html" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
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
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Influencers' forms</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Forms</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                            
              <!-- Form Elements -->
              
              <?php
                if (isset($_GET['id_voy'])) {
                  $tripinf2=new TripInfC();
                  $i=$tripinf2->chercherid($_GET['id_voy']); // récupère l'album à modifier de la base
              ?>

              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Update an influencer's trip</strong></div>
                  <div class="block-body">
                  <form class="form-horizontal" method="POST">
                  <div class="form-group row">
                      <label class="col-sm-3 form-control-label">ID Influencer</label>
                      <div class="col-sm-9">
                        <input type="number" readonly class="form-control" name="id_inf" id="id_inf" value="<?= $i['id_inf'] ?>">
                      </div>
                    </div>
                      <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">ID Trip</label>
                      <div class="col-sm-9">
                        <input type="number" readonly class="form-control" name="id_voy" id="id_voy" value="<?= $_GET['id_voy'] ?>">
                      </div>
                    </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nom_voy" id="nom_voy" value="<?= $i['nom_voy'] ?>" pattern="[0-9a-zA-Z-\.]{3,100}">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Trip's date</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" name="date_voy" id="date_voy" value="<?= $i['date_voy'] ?>" min="2020-12-12" max="2022-01-01"><small class="help-block-none text-primary">Make sure to pick an upcoming date !</small>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Maximum number of participants</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="nbr_perso_voy" id="nbr_perso_voy" value="<?= $i['nbr_perso_voy'] ?>" min="3">
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Destination</label>
                        <div class="col-sm-9">
                          <input type="text" name="destination_voy" id="destination_voy" value="<?= $i['destination_voy'] ?>" class="form-control" pattern="[0-9a-zA-Z-\.]{3,100}">
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Duration</label>
                        <div class="col-sm-9">
                          <input type="number" name="duree_voy" id="duree_voy" value="<?= $i['duree_voy'] ?>" class="form-control" min="2" max="10">
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Planning</label>
                        <div class="col-sm-9">
                          <input type="text" name="planning_voy" id="planning_voy" value="<?= $i['planning_voy'] ?>" class="form-control"  > </input>
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label ">Price</label>
                        <div class="col-sm-9 input-group-prepend"><span class="input-group-text">$</span>
                          <input type="number" name="prix_voy" id="prix_voy" value="<?= $i['prix_voy'] ?>" class="form-control" min="100">
                        </div>
                      </div>

                      <br>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Picture</label>
                        <div class="col-sm-9">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <img src="<?php echo $i["img_voy"] ?>">
                                <input type="file" class="btn btn-primary" value="<?php echo $i["img_voy"] ?>" name="img_voy" id="img_voy" required></input>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Pick a new theme for the trip</label>
                        <div class="col-sm-9">
                          <select name="nom_type" id="nom_type" class="form-control mb-3 mb-3" required>
                            <option> Select </option>
                            <?php
                              foreach($liste2 as $t) {
                            ?>
                            <option>   <?php echo $t['nom_type'] ?>   </option>
                            <?php
                              }
                            ?>
                          </select>
                      
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <input type="reset" value="Cancel" name="submit" class="btn btn-secondary"> 

                          <input type="button" onclick="document.getElementById('id').style.display='block'" value="Save" name="Submit" class="btn btn-primary"> 
                          <input type="hidden" value=<?PHP echo $i['id_inf']; ?> name="id">

                          <div id="id" class="modal">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <form method="POST" action="influ.php">
                                <strong>Great !</strong> You just updated the trip <?PHP echo $i['nom_voy'];?>'s informations
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="clearfix ">
                                  <input type="submit" onclick="document.getElementById('id').style.display='none'" class="btn-primary" value="Okay">
                                </div>
                              </form>
                            </div>
                          </div>

                          <script>
                          var modal = document.getElementById('id')
                          window.onclick = function(event) {
                          if (event.target == modal) {
                              modal.style.display = "none";
                          }
                          }
                          </script>

                        </div>
                      </div>

                    </form>

                    <?php 
                      }
                    ?>

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
              <p class="no-margin-bottom">2020 &copy; Design by <a href="index.php">JD&Co</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="jav.js"> </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>