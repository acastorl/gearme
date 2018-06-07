<!DOCTYPE html>
<?php
error_reporting (E_ALL ^ E_NOTICE);//my original php element hides type of error on error report
session_start();
 include("db_connectgms.php");



   /*$sql = "SELECT * FROM products WHERE username='".$username."' AND password='".$password."' LIMIT 1";
 $result = mysqli_query($connection, $sql);
 if (mysqli_num_rows($result) == 1){
   $row = mysqli_fetch_row($result);
   $_SESSION['logged_in'] = true;
   $_SESSION['logged_in_user'] = $username;

   echo "You are now logged in " . $_SESSION['logged_in_user'] . ". You will be redirected to the homepage.";
 }*/
 $sql = "SELECT * FROM GMS_Products";
 /*$sql= "SELECT * FROM products ORDER BY id ASC";*/
$result = mysqli_query($connection, $sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ". $row["product name"] . $row["stock"]. " " . $row["sku"] . "<br>";
    }
} else {
    echo "0 results";
}*/




 if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_quantity'          =>     $_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
           }
           else
           {
                echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="catalog.php"</script>';
           }
      }
      else
      {
           $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["shopping_cart"][$keys]);
                     echo '<script>alert("Item Removed")</script>';
                     echo '<script>window.location="catalog.php"</script>';
                }
           }
      }
 }
 ?>
<html >
    <head>
		<meta charset="UTF-8">
        <title>Gear Me Sports | Football</title>
        <!--THESE ARE THE STYLESHEETS AND THE GOOGLE FONT-->
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
  <img src="http://sulley.cah.ucf.edu/~dig4530c_group11/A/img/location.png" alt="Location Icon"  style="width: 30px; height: 30px;" >

  </a>
  <?php

  if (isset($_SESSION['user_admin']) || isset($_SESSION['user_member']) ) {

    echo "<a target=\"_blank\" class=\"signin\" href=\"http://sulley.cah.ucf.edu/~dig4530c_group11/A/loginform2gms.php\">
    log out\" </a>";

  echo "logged in as " . $_SESSION['logged_in_user'];
  }


  else{
echo "<a target=\"_blank\" class=\"signin\" href=\"http://sulley.cah.ucf.edu/~dig4530c_group11/A/loginform2gms.php\">
Sign In </a>";
    //donothing
  }
  ?>

  <a  href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/storeprofile.php">
  <img src="http://sulley.cah.ucf.edu/~dig4530c_group11/A/img/profile-icon.png" alt="Profile Icon" class="profileicon" >
  </a>
  <hr>

  <div class="section group">

    <div class="col span_1_of_3">
      <a  href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/storefront.php">
      <img src="http://sulley.cah.ucf.edu/~dig4530c_group11/A/img/GearME_logo.png"  class= "logo" alt="logo" >
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

        echo "<a  href=\"http://sulley.cah.ucf.edu/~dig4530c_group11/A/cart.php\">
        <img src=\"http://sulley.cah.ucf.edu/~dig4530c_group11/A/img/cart-icon.png\" alt=\"Cart Icon\" class=\"carticon\" >
      </a>";

      echo "logged in as " . $_SESSION['logged_in_user'];
      }


      else{
    echo "<a  href=\"http://sulley.cah.ucf.edu/~dig4530c_group11/A/cartguest.php\">
    <img src=\"http://sulley.cah.ucf.edu/~dig4530c_group11/A/img/cart-icon.png\" alt=\"Cart Icon\" class=\"carticon\" >
  </a>";
        //donothing
      }
      ?>

    </div>

  </div>

  <!--END OF THE HEADER (ICONS, SEARCH BAR AND LOGO)-->

<!--NAVIGATION BAR-->


<ul class="nav">

  <li class="nav"><a  href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/storefront.php">Home</a></li>
    <li class="dropdown"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/catalog.php" class="dropbtn">Catalog<img src="http://sulley.cah.ucf.edu/~dig4530c_group11/A/img/arrow.png" alt="Arrow" style="height: 20px; width: 20px; margin-left: 10px;"></a>
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
  <li class="nav"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/register2gms.php">Sign Up</a></li>
  <li class="nav"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/aboutus.php">About Us</a></li>
  <li class="nav"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/contact.php">Contact</a></li>

</ul>
</div>

<!--END OF NAVIGATION BAR-->
    
    <br/>
    <br/>
    <h2 class="titles">Football</h2>
    <br/>
    <br/>


<div class="col span_1_of_2">





<div class="section group">
	<div class="col span_2_of_2 second">

     <?php
     error_reporting (E_ALL ^ E_NOTICE);//my original php element hides type of error on error report

     	include("db_connectgms.php");

     		/*$sql = "SELECT * FROM products WHERE username='".$username."' AND password='".$password."' LIMIT 1";
     	$result = mysqli_query($connection, $sql);
     	if (mysqli_num_rows($result) == 1){
     		$row = mysqli_fetch_row($result);
     		$_SESSION['logged_in'] = true;
     		$_SESSION['logged_in_user'] = $username;

     		echo "You are now logged in " . $_SESSION['logged_in_user'] . ". You will be redirected to the homepage.";
     	}*/
     	$sql = "SELECT * FROM productsh";
     	/*$sql= "SELECT * FROM products ORDER BY id ASC";*/
     $result = mysqli_query($connection, $sql);

     /*if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<br> ". $row["product name"] . $row["stock"]. " " . $row["sku"] . "<br>";
         }
     } else {
         echo "0 results";
     }*/
     if($result->num_rows > 0)
     	{
     		while($row = mysqli_fetch_array($result))
     		{
     			?>

     		  <div class = "items">
     		    <a  target="_blank" class= "top" href="">
     		  <img class ="dogie" src="<?php echo $row["Product_Image"]; ?>" alt="item">
     		  </a>
     		  <p class = "productname"> <?php echo $row["Product_Name"]; ?></p>
     		  <p class = "price"> <?php echo $row["Price"]; ?></p>
          <p class = "price"> <?php echo $row["SKU"]; ?></p>
          <p>★★★★★</p>
            <input type="submit" name="add" style="margin-top:5px;" class="button" value="Add to Bag">
     		  </div>

                 <?php
     		}

     	}


      $sql = "SELECT * FROM GMS_Products_Football";
      /*$sql= "SELECT * FROM products ORDER BY id ASC";*/
     $result = mysqli_query($connection, $sql);

     /*if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<br> ". $row["product name"] . $row["stock"]. " " . $row["sku"] . "<br>";
         }
     } else {
         echo "0 results";
     }*/
     if($result->num_rows > 0)
      {
        while($row = mysqli_fetch_array($result))
        {
          ?>


          <div class = "items">
              <form method="post" action="catalog.php?action=add&id=<?php echo $row["id"]; ?>">
            <a  target="_blank" class= "top" href="<?php echo $row["Product_Image"]; ?>">
          <img class ="product" src="<?php echo $row["Product_Image"]; ?>" alt="item">
          </a>
          <p class = "productname"> <?php echo $row["Product_Name"]; ?></p>
          <p class = "price"> <?php echo $row["Cost"]; ?></p>
          <p class = "price"> <?php echo $row["SKU"]; ?></p>
          <p>★★★★★</p>
          <input type="text" name="quantity" class="forms" value="1" />
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Product_Name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

          </form>
          </div>

                 <?php
        }

      }
      ?>

<!--START OF FOOTER-->

<footer>
        <div class="section group">

    <div class="col span_1_of_3">
      Follow Us On Social Media
      <br/>
      <br/>
      <a href="https://www.twitter.com" target="blank"</a><img src="http://sulley.cah.ucf.edu/~dig4530c_group11/A/img/twitter.png" alt="Twitter Icon"  style="width: 37px; height: 37px;"> <p class="social">@GearMeSports</p>
      <br/>
      <a href="https://www.facebook.com" target="blank"</a><img src="http://sulley.cah.ucf.edu/~dig4530c_group11/A/img/facebook.png" alt="Facebook Icon"  style="width: 30px; height: 30px; margin-left: 3px;"> <p class="social">Gear Me Sports</p>
      <br/>
      <a href="https://www.instagram.com" target="blank"</a><img src="http://sulley.cah.ucf.edu/~dig4530c_group11/A/img/instagram.png" alt="Instagram Icon"  style="width: 36px; height: 36px;"> <p class="social">GearMeSport</p>

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
        <a href="shippingpolicy.php" class="policies">
          Shipping Policy and Charges
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

<!--END OF FOOTER-->

</body>

</html>
