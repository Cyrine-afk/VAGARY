<?php
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/TripInfC.php';
require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/TripInf.php';


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
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="comm.php">Travel in communities  <span class="badge badge-info-light ml-1">New</span> </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="influ.php">Travel with influencers <span class="badge badge-info-light ml-1">New</span>  </a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Trips</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="AfficherHotel.php">Hotels  </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="AfficherVol.php">Flights </a></li>
                            
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Shop</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="shop.php"> Products   </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="cart.html"> Cart   </a></li>
                          
                          </ul>
                          
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">User</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="user-account.php">Profile   </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="login.html">Sign in   </a></li>
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
    <section>
      <!-- Slider main container-->
      <div class="swiper-container detail-slider slider-gallery">
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper">
          <!-- Slides-->
          <div class="swiper-slide"><a href="img/photo/photo-1426122402199-be02db90eb90.jpg" data-toggle="gallery-top" title="Our street"><img class="img-fluid" src="img/photo/photo-1426122402199-be02db90eb90.jpg" alt="Our street"></a></div>
          <div class="swiper-slide"><a href="img/photo/photo-1512917774080-9991f1c4c750.jpg" data-toggle="gallery-top" title="Outside"><img class="img-fluid" src="img/photo/photo-1512917774080-9991f1c4c750.jpg" alt="Outside"></a></div>
          <div class="swiper-slide"><a href="img/photo/photo-1494526585095-c41746248156.jpg" data-toggle="gallery-top" title="Rear entrance"><img class="img-fluid" src="img/photo/photo-1494526585095-c41746248156.jpg" alt="Rear entrance"></a></div>
          <div class="swiper-slide"><a href="img/photo/photo-1484154218962-a197022b5858.jpg" data-toggle="gallery-top" title="Kitchen"><img class="img-fluid" src="img/photo/photo-1484154218962-a197022b5858.jpg" alt="Kitchen"></a></div>
          <div class="swiper-slide"><a href="img/photo/photo-1522771739844-6a9f6d5f14af.jpg" data-toggle="gallery-top" title="Bedroom"><img class="img-fluid" src="img/photo/photo-1522771739844-6a9f6d5f14af.jpg" alt="Bedroom"></a></div>
          <div class="swiper-slide"><a href="img/photo/photo-1488805990569-3c9e1d76d51c.jpg" data-toggle="gallery-top" title="Bedroom"><img class="img-fluid" src="img/photo/photo-1488805990569-3c9e1d76d51c.jpg" alt="Bedroom"></a></div>
        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
      </div>
    </section>
    <?php
          if (isset($_GET['id_inf'])) {
            $tripinf=new TripInfC();
            $i=$tripinf->chercherid($_GET['id_inf']); // récupère l'influenceur à afficher de la base
            //foreach($liste as $i) {
        ?>
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8"> 
          <div class="text-block">
            <p class="text-primary"><i class="fa-map-marker-alt fa mr-1"></i> Thailand </p>
            <h1>Upcoming trip to Thailand</h1>
            <p class="text-muted text-uppercase mb-4">With Meredith </p>
            <ul class="list-inline text-sm mb-4">
              <li class="list-inline-item mr-3"><i class="fa fa-users mr-1 text-secondary"></i> 4 guests</li>
              <li class="list-inline-item mr-3"><i class="fa fa-door-open mr-1 text-secondary"></i> 1 bedroom</li>
              <li class="list-inline-item mr-3"><i class="fa fa-bed mr-1 text-secondary"></i> 3 beds</li>
              <li class="list-inline-item mr-3"><i class="fa fa-bath mr-1 text-secondary"></i> 1 bath</li>
            </ul>
            <p class="text-muted font-weight-light">Our garden basement apartment is fully equipped with everything you need to enjoy your stay. Very comfortable for a couple but plenty of space for a small family. Close to many wonderful Brooklyn attractions and quick trip to Manhattan. </p>
            
            <h6 class="mb-3">Interaction with guests</h6>
            <p class="text-muted font-weight-light">We live in the two floors above the garden apartment so we are usually available to answer questions. The garden apartment is separate from our living space. We are happy to provide advice on local attractions, restaurants and transportation around the city. If there's anything you need please don't hesitate to ask!</p>
          </div>
          <div class="text-block">
            <h4 class="mb-4">Amenities</h4>
            <div class="row"> 
              <div class="col-md-6">
                <ul class="list-unstyled text-muted">
                  <li class="mb-2"> <i class="fa fa-wifi text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Wifi</span></li>
                  <li class="mb-2"> <i class="fa fa-tv text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Cable TV</span></li>
                  <li class="mb-2"> <i class="fa fa-snowflake text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Air conditioning</span></li>
                  <li class="mb-2"> <i class="fa fa-thermometer-three-quarters text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Heating</span></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled text-muted">
                  <li class="mb-2"> <i class="fa fa-bath text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Toiletteries</span></li>
                  <li class="mb-2"> <i class="fa fa-utensils text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Equipped Kitchen</span></li>
                  <li class="mb-2"> <i class="fa fa-laptop text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Desk for work</span></li>
                  <li class="mb-2"> <i class="fa fa-tshirt text-secondary w-1rem mr-3 text-center"></i><span class="text-sm">Washing machine</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="text-block">
            <h4 class="mb-0">Related Themes</h4>
            <p class="subtitle text-sm text-primary mb-4">You might also like...</p>
            <ul class="list-inline">
              <li class="list-inline-item mb-2"><span class="badge badge-pill badge-light p-3 text-muted font-weight-normal">Wifi</span></li>
              <li class="list-inline-item mb-2"><span class="badge badge-pill badge-light p-3 text-muted font-weight-normal">Cable TV</span></li>
              <li class="list-inline-item mb-2"><span class="badge badge-pill badge-light p-3 text-muted font-weight-normal">Air conditioning</span></li>
              <li class="list-inline-item mb-2"><span class="badge badge-pill badge-light p-3 text-muted font-weight-normal">Heating</span></li>
              <li class="list-inline-item mb-2"><span class="badge badge-pill badge-light p-3 text-muted font-weight-normal">Toiletteries</span></li>
              <li class="list-inline-item mb-2"><span class="badge badge-pill badge-light p-3 text-muted font-weight-normal">Equipped Kitchen</span></li>
              <li class="list-inline-item mb-2"><span class="badge badge-pill badge-light p-3 text-muted font-weight-normal">Desk for work</span></li>
              <li class="list-inline-item mb-2"><span class="badge badge-pill badge-light p-3 text-muted font-weight-normal">Washing machine</span></li>
            </ul>
          </div>
          
          <div class="text-block">
            <h5 class="mb-4">Listing location</h5>
            <div class="map-wrapper-300 mb-3">
              <div class="h-100" id="detailMap"></div>
            </div>
          </div>
          
          
        </div>
        <div class="col-lg-4">
          <div class="p-4 shadow ml-lg-4 rounded sticky-top" style="top: 100px;">
            <p class="text-muted"><span class="text-primary h2">$120</span></p>
            <hr class="my-4">
            <form class="form" id="booking-form" method="get" action="#" autocomplete="off">
              <div class="form-group">
                <label class="form-label" for="bookingDate">Your email adress *</label>
                <div class="datepicker-container datepicker-container-right">
                  <input class="form-control" type="email" name="email" id="email" placeholder="user.name@email.com" required="required">
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="form-label" for="guests">Guests *</label>
                <select class="form-control" name="guests" id="guests">
                  <option value="1">1 Guest</option>
                  <option value="2">2 Guests</option>
                  <option value="3">3 Guests</option>
                </select>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Book your stay</button>
              </div>
            </form>
            <p class="text-muted text-sm text-center">Enjoy your trip !</p>
            <hr class="my-4">
            <div class="text-center">
              <p> <a class="text-secondary text-sm" href="#"> <i class="fa fa-heart"></i> Bookmark This Trip</a></p>
              <p class="text-muted text-sm"> ... spots </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer-->
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
    <script src="js/map-detail.js"></script>
    <script>
      createDetailMap({
          mapId: 'detailMap',
          mapZoom: 14,
          mapCenter: [40.732346, -74.0014247],
          circleShow: true,
          circlePosition: [40.732346, -74.0014247]
      })
      
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.19.0/jquery.daterangepicker.min.js"> </script>
    <script src="js/datepicker-detail.js">   </script>
  </body>
</html>