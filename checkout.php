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
echo "                 <li style=\"font-weight: bold;\"><a href=\"index.php\"  class=\"nav-link\">Home</a></li>\n";
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
echo "     <div class=\"hero inner-page\" style=\"background-image: url('images/thank_you_banner.jpg');\">\n";
echo "       \n";
echo "       <div class=\"container\">\n";
echo "         <div class=\"row align-items-end \">\n";
echo "           <div class=\"col-lg-5\">\n";
echo "              <div class=\"intro\">\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "    \n";
echo "    <div class=\"site-section bg-light\" id=\"contact-section\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row justify-content-center text-center\">\n";
echo "       <div class=\"col-7 text-center mb-5\">\n";
echo "       </div>\n";
echo "     </div>\n";
?>

<?php	
    $database_name = "market";
    $con = mysqli_connect("localhost","root","",$database_name);
	if (isset($_SESSION['s_id']))
    {
		if (isset($_GET['checkout']))	
        {
			$user_id = $_SESSION['s_id'];
			$email = $_SESSION['s_email'];
			$total = $_GET['hidden_total'];
			
			$query = "INSERT INTO orders(id , email, total , date) VALUES($user_id, '$email', '$total', now())";
			
			
			$checkout_query = mysqli_query($con, $query);
			
			unset($_SESSION["cart"]);
			
			
                
				
		}
	}
?>

<table class="table table-bordered">
            <tr>
                <th class="text-center">Thank you for shopping with us.</th>
            </tr>
			
			
			<?php $dbc = mysqli_connect('localhost', 'root', '', 'market');?>
			<?php
          $curr_user_id = $_SESSION['s_id'];
          
          $query = "SELECT * FROM users where id = $curr_user_id";

          $select_user = mysqli_query($dbc, $query);

          while ($row = mysqli_fetch_assoc($select_user)) {
            $Username = $row['Username'];
            $First_name = $row['First_name'];
            $Last_name = $row['Last_name'];
            $Email = $row['Email'];
			$Address = $row['Address'];
            $Phone_no = $row['Phone_no'];
            ?>

            <table class="table table-striped" style="width: 100%">
              <tbody>
                <tr>
                  <td><b>Username:</b> </td>
                  <td><?php echo $Username; ?></td>
                </tr>
                <tr>
                  <td><b>FirstName:</b> </td>
                  <td><?php echo ucfirst($First_name); ?></td>
                </tr>
                <tr>
                  <td><b>Lastname: </b></td>
                  <td><?php echo ucfirst($Last_name); ?></td>
                </tr>
                <tr>
                  <td><b>Email: </b></td>
                  <td><?php echo $Email ; ?></td>
                </tr>
				<tr>
                  <td><b>Address: </b></td>
                  <td><?php echo $Address ; ?></td>
                </tr>
                <tr>
                  <td><b>Phone No: </b></td>
                  <td><?php echo $Phone_no; ?></td>
                </tr>
				<tr>
                  <td><b>Total: </b></td>
                  <td>RM <?php echo $total; ?></td>
                </tr>
              </tbody>
            </table>

          <?php } ?>
		  
		  <?php
echo"<footer class='footer spad'>";
        echo"<div class='container'>";
            echo"<div class='row'>";
                echo"<div class='col-lg-3 col-md-6 col-sm-6'>";
                    echo"<div class='footer__about'>";
                        echo"<div class='footer__about__logo'>";
                            echo"<a href='./index.php'><img src='images/Logo.png' alt=''></a>";
                        echo"</div>";
                        echo"<ul>";
                            echo"<li>Address:VO3-11-19, Designer Office (VO3), Lingkaran SV, Sunway Velocity, 55100 Kuala Lumpur.</li>";
                            echo"<li>Phone:+603 2027 4626</li>";
                            echo"<li>Email:journeymarket@gmail.com</li>";
                        echo"</ul>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";
            echo"<div class='row'>";
                echo"<div class='col-lg-12'>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";
        echo"</div>";
    echo"</footer>";
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
</html>
			