<!DOCTYPE html>
<?php
include("db_connectgms.php");
if(isset($_POST['submit'])){

  $Productname = $_POST['Productname'];
  $Description =  $_POST['Description'];
  $Category = $_POST['Category'];
  $SKU   = $_POST['SKU'];
  $Stock   = $_POST['Stock'];
  $Cost = $_POST['Cost'];
  $Price = $_POST['Price'];
  $ProductImage = $_POST['ProductImage'];

  $Weight = $_POST['Weight'];
  $Size   = $_POST['Size'];



  $sql = "SELECT * FROM GMS_Products WHERE SKU= '".$SKU."' LIMIT 1";
  		$result = mysqli_query($connection, $sql);

      if (mysqli_num_rows($result) == 1){
    			echo "Item already exists. Please try a new SKU.";

    		}

        else{
    			$sql = "INSERT INTO `GMS_Products`(`Product_Name`, `Description`, `Category`, `SKU`, `Stock`, `Cost`, `Price`, `Product_Image`, `Weight`, `Size`)
    			VALUES('$Productname','$Description','$Category','$SKU','$Stock','$Cost','$Price','$ProductImage','$Weight','$Size')";
    			mysqli_query($connection, $sql);
    			echo "Item successfully added. get started! You will be redirected to the login page in 5 seconds.";
    			header("Refresh: 3;");
    		}
}
  	 else {
  		// do nothing
  	}
    if(isset($_POST['submit1'])){

      $Productname   = $_POST['SKU'];



      $sql = "SELECT * FROM GMS_Products WHERE SKU= '".$Productname."' LIMIT 1";
      		$result = mysqli_query($connection, $sql);

          if (mysqli_num_rows($result) == 1){
        			$sql = "DELETE FROM `GMS_Products` WHERE Product_Name = '".$Productname."'";
              $result = mysqli_query($connection, $sql);
              echo "you deleted the cat from the database";
        		}

      }
      else {
     // do nothing
     //echo "error";
   }



?>
<html >
    <head>
		<meta charset="UTF-8">
        <title>Gear Me Sports | Admin</title>
        <link rel="icon" type="image/png" href="http://sulley.cah.ucf.edu/~al174346/group11/A/img/favicon.png">
        <style type="text/css">@import url('css/resetcss.css');</style>
        <style type="text/css">@import url('css/styles.css');</style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109733750-1');
</script>
  </head>

<body>
  <!--THESE ARE THE ICONS, SEARCH BAR AND LOGO-->

  <a target="_blank" class= "top" href="Map.html">
    Find a store
  <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/location.png" alt="Location Icon"  style="width: 30px; height: 30px;" >

  </a>
  <?php

  if (isset($_SESSION['user_admin']) || isset($_SESSION['user_member']) ) {

    echo "<a target=\"_blank\" class=\"signin\" href=\"http://sulley.cah.ucf.edu/~al174346/group11/A/loginform2gms.php\">
    log out\" </a>";

  echo "logged in as " . $_SESSION['logged_in_user'];
  }


  else{
 echo "<a target=\"_blank\" class=\"signin\" href=\"http://sulley.cah.ucf.edu/~al174346/group11/A/loginform2gms.php\">
 Sign In </a>";
    //donothing
  }
  ?>

  <a  href="http://sulley.cah.ucf.edu/~al174346/group11/A/storeprofile.php">
  <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/profile-icon.png" alt="Profile Icon" class="profileicon" >
  </a>
  <hr>

  <div class="section group">

    <div class="col span_1_of_3">
      <a  href="http://sulley.cah.ucf.edu/~al174346/group11/A/storefront.php">
      <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/GearME_logo.png"  class= "logo" alt="logo" >
      </a>
    </div>

    <div class="col span_1_of_3">


      <form class="search">
      <input type="text" class="search" name="search" placeholder="Search...">
      </form>
    </div>

    <div class="col span_1_of_3">
      <?php

      if (isset($_SESSION['user_admin']) || isset($_SESSION['user_member']) ) {

        echo "<a  href=\"http://sulley.cah.ucf.edu/~al174346/group11/A/cart.php\">
        <img src=\"http://sulley.cah.ucf.edu/~al174346/group11/A/img/cart-icon.png\" alt=\"Cart Icon\" class=\"carticon\" >
      </a>";

      echo "logged in as " . $_SESSION['logged_in_user'];
      }


      else{
    echo "<a  href=\"http://sulley.cah.ucf.edu/~al174346/group11/A/cartguest.php\">
    <img src=\"http://sulley.cah.ucf.edu/~al174346/group11/A/img/cart-icon.png\" alt=\"Cart Icon\" class=\"carticon\" >
  </a>";
        //donothing
      }
      ?>

    </div>

  </div>

  <!--END OF THE HEADER (ICONS, SEARCH BAR AND LOGO)-->

<header>


  <ul class="nav">

    <li class="nav"><a  href="http://sulley.cah.ucf.edu/~al174346/group11/A/storefront.php">Home</a></li>
    <li class="dropdown"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/catalog.php" class="dropbtn">Catalog<img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/arrow.png" alt="Arrow" style="height: 20px; width: 20px; margin-left: 10px;"></a>
      <div class="dropdown-content">
        <a href="football.php">Football</a>
        <a href="basketball.php">Basketball</a>
        <a href="baseball.php">Baseball</a>
        <a href="golf.php">Golf</a>
        <a href="soccer.php">Soccer</a>
       </li>

    <?php

    if (isset($_SESSION['user_admin'])) {

    echo "<li class=\"nav\"><a href=\"admin\">Admin</a></li>";

    echo "logged in as " . $_SESSION['logged_in_user'];
    }
    if (isset($_SESSION['user_member'])) {

    echo "<li class=\"nav\"><a href=\"storeprofile.php\">profile</a></li>";

    echo "logged in as " . $_SESSION['logged_in_user'];
    }

    else{

      //donothing
    }
    ?>
    <li class="nav"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/register2gms.php">Sign Up</a></li>
    <li class="nav"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/aboutus.php">About Us</a></li>
    <li class="nav"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/contact.php">Contact</a></li>

  </ul>

</header>

<div class="col span_1_of_2">





<div class="section group">
	<div class="col span_2_of_2 second">



  <h4> admin  </h4>

         <div class = "items">
<form action="" method="POST">

      <br>  Product name <input type="textbox"  name="Productname" value="" size="30" maxlength="30">
      <br>  Description <input type="textbox"  name="Description" value="" size="30" maxlength="30">
      <br>  Category <input type="textbox"  name="Category" value="" size="30" maxlength="30">

        <br>  sku: <input type="textbox"  name="SKU" value="" size="30" maxlength="30">
        <br>  stock <input type="textbox" name="Stock" value="" size="30" maxlength="30">
        <br>  Cost <input type="textbox" name="Cost" value="" size="30" maxlength="30">

        <br>price<input type="textbox"  name="Price" value="" size="" maxlength="30">
        <br>image<input type="textbox"  name="ProductImage" value="" size="" maxlength="30">

        <br>  weight: <input type="textbox"  name="Weight" value="" size="30" maxlength="30">
        <br> size: <input type="textbox"  name="Size" value="" size="30" maxlength="30">
        <br><br><input type="submit" value="Enter Product" name="submit">
         </div>
</form>
<div class = "items">
  <h2> Remove Product </h2>
<form action="" method="POST">


<br>  sku: <input type="textbox"  name="SKU" value="" size="30" maxlength="30">

<br><br><input type="submit" value="Remove Product" name="submit1">

</form>


</div>


<footer>
      <div class="section group">

    <div class="col span_1_of_3">
      Follow Us On Social Media
      <br/>
      <br/>
      <a href="https://www.twitter.com" target="blank"</a><img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/twitter.png" alt="Twitter Icon"  style="width: 37px; height: 37px;"> <p class="social">@GearMeSports</p>
      <br/>
      <a href="https://www.facebook.com" target="blank"</a><img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/facebook.png" alt="Facebook Icon"  style="width: 30px; height: 30px; margin-left: 3px;"> <p class="social">Gear Me Sports</p>
      <br/>
      <a href="https://www.instagram.com" target="blank"</a><img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/instagram.png" alt="Instagram Icon"  style="width: 36px; height: 36px;"> <p class="social">GearMeSport</p>

    </div>

    <div class="col span_1_of_3">
      <p class="policies">
        <a href="taxpolicy.php" class="policies">
        Tax Policy
      </a>
      </p>
      <br/>
      <br/>
      <p class="policies">
        <a href="returnpolicy.php" class="policies">
          Return Policy
        </a>
      </p>
      <br/>
      <br/>
      <p class="policies">
        <a href="privacypolicy.php" class="policies">
          Privacy Policy
        </a>
      </p>
      <br/>
      <br/>
      <p class="policies">
        <a href="shippingpolicy.php" class="policies">
          Shipping Policy and Charges
        </a>
      </p>
      <br/>
      <br/>
      <p class="policies">
        <a href="securitystatement.php" class="policies">
          Security Statement
        </a>
      </p>
    </div>

    <div class="col span_1_of_3">
      <div class="rights">

<p>Gear Me Sports ©  October 2017</p>
<br/>
<br/>
<p>“This site is not an offical site, it's an assignment for a UCF Digital Media course”</p>
<br/>
<br/>
<p>Designed by Group 11</p>
</div>
    </div>
  </div>

      </footer>




</body>

</html>
