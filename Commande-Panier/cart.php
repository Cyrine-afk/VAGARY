<?php
include 'productsC.php' ; 
include 'panier.class.php' ; 
require_once 'db.class.php' ;
$prod= new productsC;

    if (isset($_GET['search'])) {
        $listP = $prod->rechercheproducts($_GET['search']);
    } else {
        $listP = $prod->afficherproducts();
    }
    $panier  = new Panier () ; 
    //var_dump($_SESSION) ; 
    ?>
    <?php
    if(isset($_GET['del'])) 
    {
          $panier->del($_GET['del']) ; 


    }

    $date = date("Y/m/d"); 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vagary </title>
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
          <div class="d-flex align-items-center"><a class="navbar-brand py-1" href="index.html"><img src="img/Vagary1.png" alt="Directory logo"></a>
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
              <li class="nav-item dropdown"><a class="nav-link" id="homeDropdownMenuLink" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="influ.html">Travel with influencers <span class="badge badge-info-light ml-1">New</span>  </a></li>
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
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="index.php"> Products   </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="cart.php"> Cart   </a></li>
                            <li class="megamenu-list-item"><a class="megamenu-list-link" href="books.php"> Your orders   </a></li>
                          
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
             
              <li class="nav-item dropdown ml-lg-3"><a id="userDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="avatar avatar-sm avatar-border-white mr-2" src="img/avatar/avatar-10.jpg" alt="Ghassen"></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdownMenuLink"><a class="dropdown-item" href="user-booking-1.html">Your profile </a><a class="dropdown-item" href="user-grid.html">Your cart &mdash; grid view </a><a class="dropdown-item" href="user-booking-detail.html">Your history  </a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="fas fa-sign-out-alt mr-2 text-muted"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
       <!-- /Navbar -->
    </header>
    <?php 

            $DB = new DB() ;
           $ids =  array_keys ($_SESSION['panier'] )  ; 
           if (empty($ids))
          {
              $products = array() ; 
          }
          else
           {
           $products = $DB->query ('SELECT  * FROM produit WHERE id_prod IN ('.implode(',',$ids) .')')  ; 
          }
           
          //echo '<pre>'; print_r($products['id']); echo '</pre>';

          
            
        
         ?>
         
        
    <div class="progress rounded-0 sticky-top" style="height: 8px; top: 71px;">
      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <section class="py-5">
    <form action="insertcart.php" method="POST">
    <?php 
              foreach($products as $product)  : 
      ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-5 pl-xl-5">
            <div class="card border-0 shadow">
              <div class="card-body p-4">
                <div class="text-block pb-3">
                  <div class="media align-items-center">
                    <div class="media-body">
                    <h6> <a class="text-reset" href="#" ><?PHP echo $product->nom_prod; ?></a></h6> 
                      
                      
                      
                      <p class="text-muted text-sm mb-0"></p>
                      <div class="mt-n1"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                      </div>
                    </div><a href="detail-rooms.html"><img class="ml-3 rounded" src="img/photo/photo-1512917774080-9991f1c4c750.jpg" alt="" width="100"></a>
                  </div>
                </div>
                <div class="text-block py-3">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-3"><i class="fas fa-users fa-fw text-muted mr-2"></i>Product's category : </li>
                    <li class="mb-0"><i class="far fa-calendar fa-fw text-muted mr-2" ></i><?PHP echo $product->categorie_prod; ?> </li>
                  </ul>
                </div>
                <div class="text-block pt-3 pb-0">
                  <table class="w-100">
                    <tbody>
                      <tr>
                        <th class="font-weight-normal py-2">Product's price: </th>  
                       
                          <td class="text-right py-2"><?PHP echo number_format($product->prix_prod,2,',',' '); ?> DT</td>
                        
                      </tr>
                      <tr>
                        <th class="font-weight-normal pt-2 pb-3">Service fee</th>
                        <td class="text-right pt-2 pb-3"><?PHP echo number_format($product->prix_prod *  0.22,2,',',' '); ?> TD</td>
                      </tr>
                    </tbody>
                    
                    <tfoot>
                      <tr class="border-top">
                        <th class="pt-3">Total</th>
                        <td class="font-weight-bold text-right pt-3"><?PHP echo number_format($product->prix_prod *  1.22,2,',',' '); ?> TD</td>
                         </tr> 
                    </tfoot>
                  </table>
                </div>
              </div>
              <a href="cart.php?del=<?= $product->id_prod ; ?> "  class="btn btn-primary px-3">Remove from cart </a> 
              <br> </br>
              <a href="addcommande.php?id_prod= <?= $product->id_prod ; ?> "  class="btn btn-primary px-3">Order this product </a> 
              
              
              <div class="card-footer bg-primary-light py-4 border-0">
                <div class="media align-items-center">
                  <div class="media-body">
                    <h6 class="text-primary">Flexible – free cancellation</h6>
                    <p class="text-sm text-primary opacity-8 mb-0">Cancel within 48 hours of booking to get a full refund. <a href="#" class="text-reset ml-3">More details</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
   
      </form>
      
    </section>
    <?php endforeach   ?>
    
    <?php
            /*  $sql = "insert into commande (nameprod) values (:nameprod)" ;
               try{
               $db = config::getConnexion();
               $query = $db->prepare($sql);
               $query->execute([
                   'nameprod'=> $product->nom_prod,
                   'date_achat_comd'=>$date,
                   
                   
                   
                   
               ]);
               }
               catch (PDOException $e) {
                   $e->getMessage();
               }
               */

      ?>
    
    
    
     <!-- payment step-->
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
                
                <li><a class="text-muted" href="contact.html">Team                                   </a></li>
                <li><a class="text-muted" href="contact.html">Contact                                   </a></li>
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
              <p class="text-sm mb-md-0">&copy; 2020, Vagary.  All rights reserved.</p>
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
  </body>
</html>