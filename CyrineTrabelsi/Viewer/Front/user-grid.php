<?php
include 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/TripInfUserC.php';
include 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/TripInfUser.php';
session_start();





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
    <section class="py-5">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0  justify-content-start">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Your trips   </li>
        </ol>
        <h1 class="hero-heading mb-4">Your nearest bookings</h1>

        <div class="row">
          <?php
          if  (isset($_SESSION['l']) && isset($_SESSION['p']) ) {

            //echo ' '.$_SESSION['e'];

            $Res1C=new TripInfUserC();

            $liste=$Res1C->afficherTripInfUserClient($_SESSION['e']);
            
            foreach($liste as $row){
          ?>
          <!-- place item-->
          <div class="col-xl-3 col-md-4 col-sm-6 mb-5" data-marker-id="59c0c8e33b1527bfe2abaf92">
            <div class="card h-100 border-0 shadow">
              <div class="card-img-top overflow-hidden"><a href="Up_trip_profile.php?id_voy=<?php echo $row['id_voy'] ?>"><img class="img-fluid" src="<?php echo $row['img_voy']; ?>" /></a></div>
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <?php $yrdata2 = strtotime($row['date_voy']. ' + '. $row['duree_voy'] .' days');?>
                  <p class="subtitle font-weight-normal text-sm mb-2"><?php echo date('M', $yrdata2).' '.date('yy', $yrdata2); ?> </p>
                     
                  <h6 class="card-title"><a class="text-decoration-none text-dark" href="Up_trip_profile.php?id_voy=<?php echo $row['id_voy'] ?>"><?php echo $row['nom_voy']?></a></h6>
                  <h6 class="card-title"><i class="fa fa-plane w3-small"></i><?php  echo ' '.' '.$row['destination_voy']?></h6>
                  <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm"> With  <a href="profile_influ.php?id_inf=<?php echo $row['id_inf']?> "> <?php echo $row['nom_inf'].' '.$row['prenom_inf'] ?> </a> </p>
                    </p>
                  </div>
                  <div class="w-100">
                    <p class="card-text text-muted"><span class="h4 text-primary"><?php  echo $row['prix_voy'].' '.'DT'?></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
            }
          }
          else 
            echo "error";
          ?>
          
        </div>


        
        <h2 class="mb-5">Your past bookings</h2>
        <div class="row">
          <!-- place item-->
          <div class="col-xl-3 col-md-4 col-sm-6 mb-5" data-marker-id="59c0c8e33b1527bfe2abaf92">
            <div class="card h-100 border-0 shadow">
              <div class="card-img-top overflow-hidden"><a href="user-booking-detail.html"><img class="img-fluid" src="img/photo/photo-1484154218962-a197022b5858.jpg" alt="Modern, Well-Appointed Room"/></a></div>
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <p class="subtitle font-weight-normal text-sm mb-2">March 2019</p>
                  <h6 class="card-title"><a class="text-decoration-none text-dark" href="user-booking-detail.html">Modern, Well-Appointed Room</a></h6>
                  <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm">Private room</p>
                    <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- place item-->
          <div class="col-xl-3 col-md-4 col-sm-6 mb-5" data-marker-id="59c0c8e322f3375db4d89128">
            <div class="card h-100 border-0 shadow">
              <div class="card-img-top overflow-hidden"><a href="user-booking-detail.html"><img class="img-fluid" src="img/photo/photo-1426122402199-be02db90eb90.jpg" alt="Cute Quirky Garden apt, NYC adjacent"/></a></div>
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <p class="subtitle font-weight-normal text-sm mb-2">March 2019</p>
                  <h6 class="card-title"><a class="text-decoration-none text-dark" href="user-booking-detail.html">Cute Quirky Garden apt, NYC adjacent</a></h6>
                  <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm">Entire apartment</p>
                    <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- place item-->
          <div class="col-xl-3 col-md-4 col-sm-6 mb-5" data-marker-id="59c0c8e3a31e62979bf147c9">
            <div class="card h-100 border-0 shadow">
              <div class="card-img-top overflow-hidden"><a href="user-booking-detail.html"><img class="img-fluid" src="img/photo/photo-1512917774080-9991f1c4c750.jpg" alt="Modern Apt - Vibrant Neighborhood!"/></a></div>
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <p class="subtitle font-weight-normal text-sm mb-2">March 2019</p>
                  <h6 class="card-title"><a class="text-decoration-none text-dark" href="user-booking-detail.html">Modern Apt - Vibrant Neighborhood!</a></h6>
                  <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm">Entire apartment</p>
                    <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i><i class="fa fa-star text-gray-300">                                  </i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- place item-->
          <div class="col-xl-3 col-md-4 col-sm-6 mb-5" data-marker-id="59c0c8e3503eb77d487e8082">
            <div class="card h-100 border-0 shadow">
              <div class="card-img-top overflow-hidden"><a href="user-booking-detail.html"><img class="img-fluid" src="img/photo/photo-1494526585095-c41746248156.jpg" alt="Sunny Private Studio-Apartment"/></a></div>
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <p class="subtitle font-weight-normal text-sm mb-2">March 2019</p>
                  <h6 class="card-title"><a class="text-decoration-none text-dark" href="user-booking-detail.html">Sunny Private Studio-Apartment</a></h6>
                  <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm">Shared room</p>
                    <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
    <script>var basePath = '';</script>
    <!-- Main Theme JS file    -->
    <script src="js/theme.js"></script>
  </body>
</html>