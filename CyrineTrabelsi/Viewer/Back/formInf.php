<?php 
    require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/InfluC.php';
    require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/Influ.php';

    if(isset($_POST["name_inf"])&& isset($_POST["lastName_inf"]) && isset($_POST["dateAjout_inf"]) && isset($_POST["bio_inf"]) && isset($_POST["feedback_inf"]) && isset($_POST["profilePic_inf"])&& isset($_POST["nbrFollowers_inf"]) && isset($_POST["fb_inf"]) && isset($_POST["insta_inf"]) ) {
      var_dump($_POST['name_inf']);
      $inf= new Influ($_POST["name_inf"] ,$_POST["lastName_inf"] ,$_POST["dateAjout_inf"] ,$_POST["bio_inf"] ,$_POST["feedback_inf"] ,$_POST["profilePic_inf"] ,$_POST["nbrFollowers_inf"] ,$_POST["fb_inf"], $_POST["insta_inf"] );
      $newinf= new InfluC();
      $newinf->ajouterInfluenceur($inf);
      header("Location:influ.php");
    }
    else  
      echo "ICI";
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
            <!-- Tasks end-->
            
            <!-- Log out               -->
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
          <li><a href="index.html"> <i class="icon-home"></i>Home </a></li>

          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Influencers' forms</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="formInf.php">Add an influencer</a></li>
            </ul>
          </li>

          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Trips' forms</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="formType.php">Add a theme</a></li>
            </ul>
          </li>

          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="influ.php">Influencers</a></li>
              <li><a href="themes.php">Themes</a></li>
              <li><a href="comm.html">Communities</a></li>
              <li><a href="trips.html">Trips</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="carts.html">Carts</a></li>
              <li><a href="users.html">Users</a></li>
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
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Forms        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                            
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Add an influencer</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="POST" >
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name_inf" id="name_inf" placeholder="Name" required >
                        </div>
                      </div>
                      <div class="line-name"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Last name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="lastName_inf" id="lastName_inf" placeholder="Last Name" required>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Join date</label>
                        <div class="col-sm-9">
                          <input type="date" name="dateAjout_inf" id="dateAjout_inf"  class="form-control" required onblur="document.queryselector('.line-name').innerHTML='verifierLaDate';"> <small class="help-block-none" required>Make sure to pick a recent date !</small>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Biography</label>
                        <div class="col-sm-9">
                          <input type="text" name="bio_inf" id="bio_inf" placeholder="Bio..." class="form-control" cols="30" rows="10" required>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Feedback</label>
                        <div class="col-sm-9">
                          <input type="text" name="feedback_inf" id="feedback_inf"  placeholder="A word for your fans ?" class="form-control" required>
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Number of followers</label>
                        <div class="col-sm-9">
                          <input type="number" name="nbrFollowers_inf" id="nbrFollowers_inf" placeholder="How many followers ?" class="form-control" required>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Facebook page link</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="fb_inf" id="fb_inf" placeholder="Facebook page" required>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Instagram page link</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="insta_inf" id="insta_inf"  placeholder="Instagram page" required>
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Profile picture</label>
                        <div class="col-sm-9">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <input type="file" class="btn btn-primary" name="profilePic_inf" id="profilePic_inf" required></input>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <input type="reset" value="Cancel" name="reset" class="btn btn-secondary"> 
                          <!-- <input type="submit" value="Save" name="submit" class="btn btn-primary"> -->

                          <input type="button" onclick="document.getElementById('id').style.display='block'" value="Save" name="Submit" class="btn btn-primary"> 
                          
                          <div id="id" class="modal">
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                              <form method="POST" action="influ.php">
                                <strong>Great !</strong> You just added an influencer 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="clearfix ">
                                  <input type="submit" onclick="document.getElementById('id').style.display='none'" class="btn-secondary" value="Okay">
                                </div>
                              </form>
                            </div>
                          </div>

                          <script>
                          function verifierLaDate ()
                          {
                              var dateAjout_inf=document.getElementById("dateAjout_inf").value
                              if (dateAjout_inf=="") {
                                  error+="<li> The date is obligatory </li>"
                              }
                              else {
                                var today = new Date();
                                dateA=new Date(dateA)
                                if(today.getFullYear() > 2) {
                                    toterr++;
                                    error+="<li> Incorrect date </li>"
                                }
                              }
                          }
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