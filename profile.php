<!doctype html>
<html lang="en">
<style>
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}
</style>
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
echo "     <div class=\"hero inner-page\" style=\"background-image: url('images/profile_background.png');\">\n";
echo "       \n";
echo "       <div class=\"container\">\n";
echo "         <div class=\"row align-items-end \">\n";
echo "           <div class=\"col-lg-5\">\n";
echo "              <div class=\"intro\">\n";
echo "               <h1><strong>About</strong></h1>\n";
echo "               <div class=\"custom-breadcrumbs\"><a href=\"index.html\">Home</a> <span class=\"mx-2\">/</span> <strong>About</strong></div>\n";
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
<?php $dbc = mysqli_connect('localhost', 'root', '', 'market');?>
<div class="container" style="width: 75%;">
                              
        <h2 style="margin-left: 40%;">Profile</h2>
        <br><br><br><br>
        <div class="tab">
            <button class="tablinks" style="width: 33%" onclick="openCity(event, 'Personel Details')">Personal Details</button>
			<button class="tablinks" style="width: 33%" onclick="openCity(event, 'Purchase History')">Purchase History</button>
            <button class="tablinks" style="width: 33%"  onclick="openCity(event, 'Edit Details')">Edit Details</button>
			</br>
			<?php 
			if ($_SESSION['s_email'] == "marvinlimyumin@hotmail.com"){ ?>
			<button class="tablinks" style="width: 33%"  onclick="openCity(event, 'Add Product')">Add Product</button>
			<?php } ?>
        </div>
		
		<br><br><br>
 

        <div id="Personel Details" class="tabcontent">
		<h3>Personal Details</h3>
           <!-- <?php echo $_SESSION['s_id'];?> -->
          <br>
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

            <table class="table table-striped" style="width: 50%">
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
              </tbody>
            </table>

          <?php } ?>
        </div>
		
		
		<div id="Purchase History" class="tabcontent">
          <h3>Purchase History</h3>
          <?php

          $query = "SELECT * FROM orders where orders.id = $curr_user_id";

          $select_user_orders = mysqli_query($dbc, $query);

          while ($row = mysqli_fetch_assoc($select_user_orders)) {
            $date = $row['date'];
            $order_id = $row['order_id'];
			$total = $row['total'];
            
            
            ?>
            <br>
            <table class="table table-striped" style="width: 50%">
              <tbody>
                <tr>
                  <td><b>Order ID</b> </td>
                  <td><?php echo $order_id; ?></td>
                </tr>
                <tr>
                  <td><b>Total Amount: </b> </td>
                  <td>RM <?php echo $total; ?></td>
                </tr>
                <tr>
                  <td><b>Date of Purchase: </b></td>
                  <td><?php echo $date; ?></td>
                </tr>
              </tbody>
            </table>

          <?php  } ?>

        

          
		  
		  <br><br><br>

          
            
		  
		  </div>
		  
		  <br>

        <div id="Edit Details" class="tabcontent">
          <h3>Edit Details</h3>
          <br>
          <?php
            

            $curr_user_id = $_SESSION['s_id'];
            $query = "SELECT * FROM users WHERE id = $curr_user_id ";
            $select_users = mysqli_query($dbc,$query);

            while($row = mysqli_fetch_assoc($select_users)) {
                $Username = $row['Username'];
				$Password = $row['Password'];
                $First_name = $row['First_name'];
                $Last_name = $row['Last_name'];
                $Email = $row['Email'];
				$Address = $row['Address'];
                $Phone_no = $row['Phone_no'];
            }

            if (isset($_POST['update-user'])) {
                $Username = $_POST['Username'];
				$Password = $_POST['Password'];
                $First_name = $_POST['First_name'];
                $Last_name = $_POST['Last_name'];
                $Email = $_POST['Email'];
				$Address = $_POST['Address'];
                $Phone_no = $_POST['Phone_no'];


              

              $query = "UPDATE users SET Username='{$Username}', Password='{$Password}', First_name='{$First_name}', Last_name='{$Last_name}', Phone_no='{$Phone_no}', Email='{$Email}', Address='{$Address}' WHERE id=$curr_user_id";
              
              
              
              $update_detail = mysqli_query($dbc,$query);

              if (!$update_detail) {
                die("Query Failed" . mysqli_error($dbc));
              }
       
            }

            ?>
			
			<form action="" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="Username">Username</label>
                <input value="<?php echo $Username; ?>" type="text" class="form-control" name="Username">
              </div>

              <div class="form-group">
                <label for="First_name">Firstname</label>
                <input value="<?php echo $First_name; ?>" type="text" class="form-control" name="First_name">
              </div>

              <div class="form-group">
                <label for="Last_name">Lastname</label>
                <input value="<?php echo $Last_name; ?>" type="text" class="form-control" name="Last_name">
              </div>

              <div class="form-group">
                <label for="Email">Email</label>
                <input value="<?php echo $Email; ?>" type="email" class="form-control" name="Email">
              </div>
			  
			  <div class="form-group">
                <label for="Address">Address</label>
                <input value="<?php echo $Address; ?>" type="address" class="form-control" name="Address">
              </div>

              <div class="form-group">
                <label for="Phone_No">PhoneNo</label>
                <input value="<?php echo $Phone_no; ?>" type="tel" pattern="[0-9]*" class="form-control" name="Phone_no" >
              </div>

              <div class="form-group">
                <label for="Password">Password</label>
                <input value="<?php echo $Password; ?>" id="myInput" type="password" class="form-control" name="Password">
              </div>

              <div class="form-group">
                <input type="checkbox" onclick="myFunction()">Show Password
              </div>

              

              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="update-user" value="Update">
              </div>
            </form>


        </div>
		
		<?php if ($_SESSION['s_email'] == "marvinlimyumin@hotmail.com"){?>
		<div id="Add Product" class="tabcontent">
		
		
          <h3>Add Product</h3>
          <br>
          
			
			<form action="product_add.php" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="Product Name">Product Name</label>
                <input type="text" class="form-control" name="pname">
              </div>

              <div class="form-group">
                <label for="Price">Price(RM)</label>
                <input type="number" class="form-control" step="any" name="price">
              </div>
			  
			   <input type="file" name="image" id="image" />  

              

              </br></br>

              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="insert">
              </div>
            </form>

    </div>
		<?php } ?>
        <hr>
		
		<script>
		
		

    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }


    function openCity(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>
	
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
	</html>