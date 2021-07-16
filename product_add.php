<?php  
     $connect = mysqli_connect("localhost", "root", "", "market");  
      if(isset($_POST["insert"]))  
     {  
      $pname = $_POST['pname'];
	  $price =$_POST['price'];
	  $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     
	  if (empty($_POST['pname']) || empty($_POST['price']) || ($_FILES['image']['tmp_name'] == "")){
		  echo '<script>alert("Please fill in all the detail.")</script>';  
		  echo '<script>window.location="Profile.php"</script>';
	  }else{ 
      $query = "INSERT INTO product(pname, image, price)VALUES (\"$pname\", '$image', $price)";
	  }
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Product Inserted into Database")</script>';  
		   echo '<script>window.location="Profile.php"</script>';
      }  
     }  
 ?>  