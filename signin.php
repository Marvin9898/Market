<!doctype html>
<html lang="en">



  <head>
    <title> Journey Market </title>
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
error_reporting(0);
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
echo "                 <li style=\"font-weight: bold;\"><a href=\"index.php\" class=\"nav-link\">Home</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"listing.php\" class=\"nav-link\">Product</a></li>\n";
echo "                 <li style=\"font-weight: bold;\" class=\"active\"><a href=\"signup.php\" class=\"nav-link\">Sign Up</a></li>\n";
echo "                 <li style=\"font-weight: bold;\"><a href=\"contact.php\" class=\"nav-link\">Contact</a></li>\n";
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
echo "     <div class=\"hero inner-page\" style=\"background-image: url('images/sign_up_background.png');\">\n";
echo "       \n";
echo "       <div class=\"container\">\n";
echo "         <div class=\"row align-items-end \">\n";
echo "           <div class=\"col-lg-5\">\n";
echo "              <div class=\"intro\">\n";
echo "               <h1><strong>Sign Up</strong></h1>\n";
echo "               <div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Sign Up</strong></div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "    \n";
echo "    <div class=\"site-section bg-light\">\n";
echo "     <div class=\"container\">\n";
echo"<p align='middle'>Wrong email address or password. Please try again.</p>";
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-7\">\n";
echo "            \n";
echo "         </div>\n";
echo "       </div>\n";
    if(isset($_POST['login'])){
    $email = $_POST['email'];
	$password = $_POST['password'];
	
	if(empty($_POST['email']) && empty($_POST['password'])){
		echo "<p align='middle'> Please fill in the username and password field.</p>";
	}else if(!empty($_POST['email']) && !empty($_POST['password'])){
	
	$dbc = mysqli_connect('localhost','root','','market');
	session_start();
	
	
	$query = "SELECT * FROM users WHERE Email = '$email'";
	$select_user = mysqli_query($dbc,$query);
	
	if (!$select_user) {
		die("Query Failed" . mysqli_error($dbc));
	}  

    while ($row = mysqli_fetch_assoc($select_user)) {
		$db_id = $row['id'];
		$db_Username = $row['Username'];
		$db_Password = $row['Password'];
		$db_First_name = $row['First_name'];
		$db_Last_name = $row['Last_name'];
		$db_Email = $row['Email'];

		if($email === $db_Email && $password === $db_Password) {
			
            $_SESSION['s_email'] = $db_Email;
			$_SESSION['s_username'] = $db_Username;
			$_SESSION['s_firstname'] = $db_First_name;
			$_SESSION['s_lastname'] = $db_Last_name;
			$_SESSION['s_id'] = $db_id;

			header("Location: index.php");
		    exit();
		}
		else {
			header("Location: signin.php");
			exit();
		    
		}
	}	
	
	}
	}
echo "         <div class=\"col-lg-4 ml-auto\">\n";
echo "           <div class=\"bg-white p-3 p-md-5\">\n";
echo "             <h3 class=\"text-black mb-4\">Contact Info</h3>\n";
echo "             <ul class=\"list-unstyled footer-link\">\n";
echo "               <li class=\"d-block mb-3\">\n";
echo "                 <span class=\"d-block text-black\">Address:</span>\n";
echo "                 <span>VO3-11-19, Designer Office (VO3), Lingkaran SV, Sunway Velocity, 55100 Kuala Lumpur.</span></li>\n";
echo "               <li class=\"d-block mb-3\"><span class=\"d-block text-black\">Phone:</span><span>+ 603 2027 4626</span></li>\n";
echo "               <li class=\"d-block mb-3\"><span class=\"d-block text-black\">Email:</span><span>journeymarket@gmail.com</span></li>\n";
echo "             </ul>\n";
echo "           </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "   </div>\n";
echo "\n";

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

