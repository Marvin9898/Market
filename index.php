<!doctype html>
<html lang="en">

  <head>
    <title>Journey Market</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">

  </head>

  <body>

    
<?php
session_start();
echo "<div class=\"site-wrap\" id=\"home-section\">\n";
echo "      <div class=\"site-mobile-menu site-navbar-target\">\n";
echo "       <div class=\"site-mobile-menu-header\">\n";
echo "         <div class=\"site-mobile-menu-close mt-3\">\n";
echo "           <span class=\"icon-close2 js-menu-toggle\"></span>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "       <div class=\"site-mobile-menu-body\"></div>\n";
echo "     </div>\n";
echo "\n";
echo "      <header class=\"site-navbar site-navbar-target\" role=\"banner\">\n";
echo "        <div class=\"container\">\n";
echo "         <div class=\"row align-items-center position-relative\">\n";
echo "            <div class=\"col-3\">\n";
echo "             <div class=\"site-logo\">\n";
echo "               <a href=\"index.php\"><strong>Journey Market</strong></a>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "            <div class=\"col-9  text-right\">\n";
echo "             \n";
echo "             <span class=\"d-inline-block d-lg-none\"><a href=\"#\" class=\" site-menu-toggle js-menu-toggle py-5 \"><span class=\"icon-menu h3 text-black\"></span></a></span>\n";
echo "              <nav class=\"site-navigation text-right ml-auto d-none d-lg-block\" role=\"navigation\">\n";
echo "               <ul class=\"site-menu main-menu js-clone-nav ml-auto \">\n";
echo "                 <li style=\"font-weight: bold;\"  class=\"active\"><a href=\"index.php\"  class=\"nav-link\">Home</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"listing.php\"  class=\"nav-link\">Product</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"signup.php\"  class=\"nav-link\">Sign Up</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"contact.php\"  class=\"nav-link\">Contact</a></li>\n";
if (!isset($_SESSION['s_username'])) {
echo "                  <form action=\"signin.php\" method=\"post\">";
echo "                  <input type=\"text\" placeholder=\"Email\" name=\"email\">";
echo "                  <input type=\"password\" placeholder=\"Password\" name=\"password\">";
echo "                  <button type=\"submit\" name=\"login\">Login</button>";
echo "                </form>";
}
echo "               </ul>\n";
if(isset($_SESSION['s_username'])){
echo "                 <li class=\"dropdown\">\n";
echo "                 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> \n";
                        if(isset($_SESSION['s_username'])){
                          echo ucfirst($_SESSION['s_username']);
echo "						<b class=\"caret\"></b></a>\n";
echo "                      <ul class=\"dropdown-menu\">\n";
echo "                       <li>\n";
echo "                           <a href=\"profile.php\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>\n";
echo "                        </li>\n";
echo "                           <li class=\"divider\"></li>\n";
echo "                           <li>\n";
echo "                             <a href=\"logout.php\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>\n";
echo "                           </li>\n";
echo "                               </ul>\n";
echo "                           </li>\n";
echo "                 <a href=\"cart.php\"><img src=\"images/cart.png\" alt=\"cart\" style=\"width:50px;height:50px;\"/></a>";
}
}
echo "             </nav>\n";
echo "           </div>\n";
echo "            \n";
echo "         </div>\n";
echo "       </div>\n";
echo "      </header>\n";
echo "      \n";
echo "<div class=\"masthead\">";
echo "     <div class=\"hero\" style=\"background-image: url('images/banner.png');\">\n";
echo "       \n";
echo "             \n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo " \n";
echo "\n";
echo "     <div class=\"site-section\">\n";
echo "       <div class=\"container\">\n";
echo "         <h2 class=\"section-heading\"><strong>How it works?</strong></h2>\n";
echo "         <p class=\"mb-5\">Easy steps to get you started</p>    \n";
echo "          <div class=\"row mb-5\">\n";
echo "           <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "             <div class=\"step\">\n";
echo "               <span>1</span>\n";
echo "               <div class=\"step-inner\">\n";
echo "                 <span class=\"number text-primary\">01.</span>\n";
echo "                 <h3>Register Account</h3>\n";
echo "                 <p>Create a account in just a few seconds.</p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "           <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "             <div class=\"step\">\n";
echo "               <span>2</span>\n";
echo "               <div class=\"step-inner\">\n";
echo "                 <span class=\"number text-primary\">02.</span>\n";
echo "                 <h3>Add item to the item cart</h3>\n";
echo "                 <p>Select the type of product you want.</p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "           <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "             <div class=\"step\">\n";
echo "               <span>3</span>\n";
echo "               <div class=\"step-inner\">\n";
echo "                 <span class=\"number text-primary\">03.</span>\n";
echo "                 <h3>Checkout</h3>\n";
echo "                 <p>Check detail and make payment via online.</p>\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     \n";
echo " \n";
echo "    <div class=\"site-section bg-light\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-7\">\n";
echo "           <h2 class=\"section-heading\"><strong>Why shop with us?</strong></h2> \n";
echo "         </div>\n";
echo "       </div>\n";
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "           <div class=\"customer-feedback\">\n";
echo "             <blockquote class=\"mb-4\">\n";
echo "             </blockquote>\n";
echo "             <div class=\"d-flex v-card align-items-center\">\n";
echo "               <img src=\"images/banner_1.png\" height=\"320\" width=\"320\" alt=\"Image\" class=\"img-fluid mr-3\">\n";
echo "               <div class=\"author-name\">\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "         <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "           <div class=\"customer-feedback\">\n";
echo "             <blockquote class=\"mb-4\">\n";
echo "             </blockquote>\n";
echo "             <div class=\"d-flex v-card align-items-center\">\n";
echo "               <img src=\"images/banner_2.png\" height=\"320\" width=\"320\" alt=\"Image\" class=\"img-fluid mr-3\">\n";
echo "               <div class=\"author-name\">\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "         <div class=\"col-lg-4 mb-4 mb-lg-0\">\n";
echo "           <div class=\"customer-feedback\">\n";
echo "             <blockquote class=\"mb-4\">\n";
echo "             </blockquote>\n";
echo "             <div class=\"d-flex v-card align-items-center\">\n";
echo "               <img src=\"images/banner_3.png\" height=\"320\" width=\"320\" alt=\"Image\" class=\"img-fluid mr-3\">\n";
echo "               <div class=\"author-name\">\n";
echo "               </div>\n";
echo "             </div>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "   </div>\n";
echo "    <div class=\"site-section bg-primary py-5\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row align-items-center\">\n";
echo "         <div class=\"col-lg-7 mb-4 mb-md-0\">\n";
echo "           <h2 class=\"mb-0 text-white\">What are you waiting for?</h2>\n";
echo "           <p class=\"mb-0 opa-7\">Journey Market offers the largest selection of product. We do the shopping for you and delivery to your house as fast as we can. We provide the best service to the customer.</p>\n";
echo "         </div>\n";
echo "         <div class=\"col-lg-5 text-md-right\">\n";
echo "           <a href=\"listing.php\" class=\"btn btn-primary btn-white\">Shop Now</a>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "   </div>\n";
echo "      \n";
echo "     \n";
echo "    </div>\n";
?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

