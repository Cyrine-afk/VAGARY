<?php

session_start (); 

require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/TripInfC.php';
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/TripInf.php';

require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/ImgTripC.php';
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/ImgTrip.php';


require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/InfluC.php';
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/Influ.php';

$trip1= new TripInfC();
$liste=$trip1->afficherTripInf();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Directory Theme by Bootstrapious</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <!-- swiper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <!-- Magnigic Popup-->
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
    <!-- Leaflet Maps-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body style="padding-top: 72px;">
  <header class="header">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
          <div class="d-flex align-items-center"><a class="navbar-brand py-1" href="index.php"><img src="img/v2.png" alt="Directory logo"></a>
            <form class="form-inline d-none d-sm-flex" action="#" id="search">
              <div class="input-label-absolute input-label-absolute-left input-reset input-expand ml-lg-2 ml-xl-3"> 
                <label class="label-absolute" for="search_search"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
                <input class="form-control form-control-sm border-0 shadow-0 bg-gray-200" id="search_search" placeholder="Search" aria-label="Search">
                <button class="btn btn-reset btn-sm" type="reset"><i class="fa-times fas"></i></button>
              </div>
            </form>
          </div>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="form-inline mt-4 mb-2 d-sm-none" action="#" id="searchcollapsed">
              <div class="input-label-absolute input-label-absolute-left input-reset w-100">
                <label class="label-absolute" for="searchcollapsed_search"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
                <input class="form-control form-control-sm border-0 shadow-0 bg-gray-200" id="searchcollapsed_search" placeholder="Search" aria-label="Search">
                <button class="btn btn-reset btn-sm" type="reset"><i class="fa-times fas">           </i></button>
              </div>
            </form>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown"><a class="nav-link" id="homeDropdownMenuLink" href="index.php" >
                   Home</a>
              </li>
              <!-- Megamenu-->
              <li class="nav-item dropdown position-static"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Options</a>
                <div class="dropdown-menu megamenu py-lg-0">
                  <div class="row">
                    <div class="col-lg-9">
                      <div class="row p-3 pr-lg-0 pl-lg-5 pt-lg-5">
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Interactive Travelling</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="comm.html">Travel in communities  <span class="badge badge-info-light ml-1">New</span> </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="influ.php">Travel with influencers <span class="badge badge-info-light ml-1">New</span>  </a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Trips</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="nat_trip.html">National Trips  </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="inter_trips.html">International Trips / Vans <span class="badge badge-info-light ml-1">New</span> </a></li>
                            
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Shop</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="products.html"> Products   </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="cart.html"> Cart   </a></li>
                          
                          </ul>
                          
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">User</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="user_profile.html">Profile   </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="signin.html">Sign in   </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="signup.html">Sign up   </a></li></ul>
                        </div>
                      </div>
                      <div class="row megamenu-services d-none d-lg-flex pl-lg-5">
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#destination-map-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">Best rentals</h6>
                              <p class="mb-0 text-muted text-sm">Find the perfect place</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#money-box-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">Earn points</h6>
                              <p class="mb-0 text-muted text-sm">And get great rewards</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#customer-support-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">020-800-456-747</h6>
                              <p class="mb-0 text-muted text-sm">24/7 Available Support</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#secure-payment-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">Secure Payment</h6>
                              <p class="mb-0 text-muted text-sm">Secure Payment</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block"><img class="bg-image" src="img/photo/photo-1521170665346-3f21e2291d8b.jpg" alt=""></div>
                  </div>
                </div>
              </li>
              <!-- /Megamenu end-->
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a>
              </li>
              
              <?php
                if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                { 
              ?>

                  <li class="nav-item dropdown ml-lg-3"><a id="userDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="avatar avatar-sm avatar-border-white mr-2"<?php echo 'src="'.'img/'.$_SESSION['r'].'"';?> alt="Jack London"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdownMenuLink"><a class="dropdown-item" href="">Login: <?php echo ' '.$_SESSION['l'];?></a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="./logout.php"><i class="fas fa-sign-out-alt mr-2 text-muted"></i> Sign out</a>
                    </div>
                  </li>
                  
                <?php
                }

                else { 
                    echo'    
                    <li class="nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block"><a class="btn btn-primary" href="./login.html"">Sign in</a></li>
                    <li class="nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block"><a class="btn btn-primary" href="signup.html">Sign up</a></li>';
                }  

                ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->
    </header>
    <div class="container-fluid"> 
    <?php
      if (isset($_GET['id_voy'])) {
        $tripinf=new TripInfC();
        $trip=$tripinf->chercherid($_GET['id_voy']); 
    ?>              
      <div class="row">
        <div class="col-lg-7 col-xl-5 px-4 pb-4 pl-xl-5 pr-xl-5">
          <section class="mx-n4 mx-xl-n5 mb-4 mb-xl-5">
            <!-- Slider main container-->
            <div class="swiper-container booking-detail-slider">
              <!-- Additional required wrapper-->
              <div class="swiper-wrapper">
                <!-- Slides-->
                <?php
                  if (isset($_GET['id_voy'])) {
                  $newimgs=new ImagesTripC();
                  $li=$newimgs->chercheridVoy($_GET['id_voy']); 
                ?>
  
                  <div class="swiper-slide"><img class="img-fluid" src="<?php  echo $li['img1']?>" alt="Our street"></a></div>
                  <div class="swiper-slide"><img class="img-fluid" src="<?php  echo $li['img2']?>" alt="Outside"></a></div>
                  <div class="swiper-slide"><img class="img-fluid" src="<?php  echo $li['img3']?>" alt="Rear entrance"></a></div>
                  <div class="swiper-slide"><img class="img-fluid" src="<?php  echo $li['img4']?>" alt="Kitchen"></a></div>
                  <div class="swiper-slide"><img class="img-fluid" src="<?php  echo $li['img5']?>" alt="Bedroom"></a></div>
                  <div class="swiper-slide"><img class="img-fluid" src="<?php  echo $li['img6']?>" alt="Bedroom"></a></div>
                
                <?php
                    }
                ?>
              </div>
              <div class="swiper-pagination swiper-pagination-white"></div>
              <div class="swiper-button-prev swiper-button-white"></div>
              <div class="swiper-button-next swiper-button-white">   </div>
            </div>
          </section>
          <!-- Breadcrumbs -->
          <ol class="breadcrumb pl-0  justify-content-start">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="user-grid.html">Your trips</a></li>
            <li class="breadcrumb-item active">Trip to <?php echo $trip['destination_voy'] ?>   </li>
          </ol>
          <div class="text-block">
            <p class="subtitle">Monday Apr 17 - Tuesday Apr 18</p>
            <h1 class="hero-heading mb-3"> <?php echo $trip['nom_voy'] ?>  </h1>
          </div>
          <div class="text-block">
            <h6 class="mb-4"> <?php echo $trip['duree_voy'] ?> days in  <?php echo $trip['destination_voy'] ?>  </h6>
            <div class="row mb-3">
                <div class="col-md-6 d-flex align-items-center mb-3 mb-md-0">
                  <div class="date-tile mr-3">
                    <div class="text-uppercase"> <span class="text-sm">
                      <?php $yrdata = strtotime($trip['date_voy']); ?>
                      <span class="month-and-time"><?php echo date('M', $yrdata); ?>
                        </br>
                        <strong class="text-lg"><span class="day"><?php echo date('d', $yrdata); ?></span></strong>
                      </span>
                    </div> 
                  </div>
                  <p class="text-sm mb-0"><?php echo date('D', $yrdata); ?> check-in <br>3PM - 7PM</p>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                  <div class="date-tile mr-3">
                    <div class="text-uppercase"> <span class="text-sm">
                      <?php $yrdata2 = strtotime($trip['date_voy']. ' + '. $trip['duree_voy'] .' days');?>
                      <span class="month-and-time"><?php echo date('M', $yrdata2); ?>
                        </br>
                        <strong class="text-lg"><span class="day"><?php echo date('d', $yrdata2); ?></span></strong>
                      </span>
                    </div>
                  </div>
                  <p class="text-sm mb-0"><?php echo date('D', $yrdata2); ?> check-out<br>11AM</p>
                </div>
              </div>
          </div>
          <div class="text-block">
            <div class="row">
              <div class="col-sm">
                <h6>Address</h6>
                <p class="text-muted">Ap #867, 859 Sit Rd., <?php echo $trip['destination_voy'] ?></p>
              </div>
              <div class="col-sm">
                <h6>Phone</h6>
                <p class="text-muted">+421 454 897 545</p>
              </div>
            </div>
          </div>
          <div class="text-block">
              <?php
                  $influenceur=new InfluC();
                  $i=$influenceur->chercherid($trip['id_inf']);
              ?>
            <div class="media align-items-center mb-3">
              <div class="media-body">
                <h6><?php echo $trip['nom_type'] ?></h6>
                <p class="text-muted mb-0">Hosted by <a href="user-profile.html" class="text-reset"><?php echo $i['nom_inf'] .' '. $i['prenom_inf'] ?></a></p>
              </div><a href="user-profile.html"><img class="avatar avatar-lg avatar-border-white ml-4" src="<?php echo $i['img_inf'] ?>" ></a>
            </div>
          </div>
          <div class="text-block">
            <h6 class="mb-3">Who's coming</h6>
            <div class="row mb-3">
              <div class="col-auto text-center text-sm"><img class="avatar avatar-border-white mb-1" src="img/avatar/avatar-0.jpg" alt="Ondrej"><br>Ondrej</div>
              <div class="col-auto text-center text-sm"><img class="avatar avatar-border-white mb-1" src="img/avatar/avatar-1.jpg" alt="Julie"><br>Julie</div>
              <div class="col-auto text-center text-sm"><img class="avatar avatar-border-white mb-1" src="img/avatar/avatar-2.jpg" alt="Barbora"><br>Barbora</div>
            </div>
          </div>
          <div class="text-block">
            <div class="row">
              <div class="col">
                <h6> Total cost</h6>
                <p class="text-muted"><?php echo $trip['prix_voy'] ?> DT</p>
              </div>
            </div>
          </div>
          <div class="text-block">
            <h6 class="mb-4">Things to keep in mind</h6>
            <ul class="list-unstyled">
              <li class="mb-2"> 
                <div class="media align-items-center mb-3">
                  <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fas fa-child text-secondary fa-fw text-center"></i></div>
                  <div class="media-body"><span class="text-sm">Not suitable for children and infants - The entrance staircase doesn't have handrails</span></div>
                </div>
              </li>
              <li class="mb-2"> 
                <div class="media align-items-center mb-3">
                  <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fas fa-glass-cheers text-secondary fa-fw text-center"></i></div>
                  <div class="media-body"><span class="text-sm">No parties or events</span></div>
                </div>
              </li>
              <li class="mb-2"> 
                <div class="media align-items-center mb-3">
                  <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fa-smoking-ban text-secondary fa-fw text-center"></i></div>
                  <div class="media-body"><span class="text-sm">No smoking</span></div>
                </div>
              </li>
              <li class="mb-2"> 
                <div class="media align-items-center mb-3">
                  <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fa-cat text-secondary fa-fw text-center"></i></div>
                  <div class="media-body"><span class="text-sm">No pets</span></div>
                </div>
              </li>
            </ul>
            <div class="collapse" id="moreRules">
              <ul class="list-unstyled">
                <li class="mb-2"> 
                  <div class="media align-items-center mb-3">
                    <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fas fa-child text-secondary fa-fw text-center"></i></div>
                    <div class="media-body"><span class="text-sm">Not suitable for children and infants - The entrance staircase doesn't have handrails</span></div>
                  </div>
                </li>
                <li class="mb-2"> 
                  <div class="media align-items-center mb-3">
                    <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fas fa-glass-cheers text-secondary fa-fw text-center"></i></div>
                    <div class="media-body"><span class="text-sm">No parties or events</span></div>
                  </div>
                </li>
                <li class="mb-2"> 
                  <div class="media align-items-center mb-3">
                    <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fa-smoking-ban text-secondary fa-fw text-center"></i></div>
                    <div class="media-body"><span class="text-sm">No smoking</span></div>
                  </div>
                </li>
                <li class="mb-2"> 
                  <div class="media align-items-center mb-3">
                    <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fa-cat text-secondary fa-fw text-center"></i></div>
                    <div class="media-body"><span class="text-sm">No pets</span></div>
                  </div>
                </li>
              </ul>
            </div>
            <button class="btn btn-link btn-collapse pl-0 text-muted" type="button" data-toggle="collapse" data-target="#moreRules" aria-expanded="false" aria-controls="moreRules" data-expanded-text="Show less" data-collapsed-text="Show more">Show more</button>
          </div>
          <div class="text-block d-print-none">
            <button class="btn btn-link pl-0" onclick="window.print()"><i class="fa fa-print mr-2"></i>Print </button>
          </div>
          <div class="text-block ">
            <a class="btn btn-primary px-3" href="user-grid.php" > View reservations </a>
          </div>
        </div>
        <div class="col-lg-5 col-xl-7 map-side-lg px-lg-0">
          <div class="map-full shadow-left" id="detailSideMap"></div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
    <!-- Footer-->
    <footer class="position-relative z-index-10 d-print-none">
        <!-- Main block - menus, subscribe form-->
        <div class="py-6 bg-gray-200 text-muted"> 
          <div class="container">
            <div class="row">
              <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="font-weight-bold text-uppercase text-dark mb-3">Directory</div>
                <p>Welcome to our page Vagary</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="pinterest"><i class="fab fa-pinterest"></i></a></li>
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="vimeo"><i class="fab fa-vimeo"></i></a></li>
                </ul>
              </div>
              
              <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                <h6 class="text-uppercase text-dark mb-3">Pages</h6>
                <ul class="list-unstyled">
                  
                  <li><a class="text-muted" href="contact.php">Team                                   </a></li>
                  <li><a class="text-muted" href="contact.php">Contact                                   </a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <!-- Copyright section of the footer-->
        <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 text-center text-md-left">
                <p class="text-sm mb-md-0">&copy; 2020, Your company.  All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                  <li class="list-inline-item"><img class="w-2rem" src="img/visa.svg" alt="..."></li>
                  <li class="list-inline-item"><img class="w-2rem" src="img/mastercard.svg" alt="..."></li>
                  <li class="list-inline-item"><img class="w-2rem" src="img/paypal.svg" alt="..."></li>
                  <li class="list-inline-item"><img class="w-2rem" src="img/western-union.svg" alt="..."></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }    
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('${path}icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="js/theme.js"></script>
    <!-- Map-->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <!-- Available tile layers-->
    <script src="js/map-layers.js"> </script>
    <script src="js/map-detail.js">                               </script>
    <script>
      createDetailMap({
          mapId: 'detailSideMap',
          mapZoom: 18,
          mapCenter: [40.732346, -74.0014247],
          markerShow: true,
          markerPosition: [40.732346, -74.0014247],
          markerPath: 'img/marker.svg',
      })
    </script>
  </body>
</html>