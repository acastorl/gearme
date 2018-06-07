<!DOCTYPE html>

<html >
    <head>
  		<meta charset="UTF-8">
      <title>Gear Me Sports | Shipping Policy</title>
      <link rel="icon" type="image/png" href="http://sulley.cah.ucf.edu/~al174346/group11/A/img/favicon.png">

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

  <a target="blank" class= "top" href="Map.html">
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



  <!--NAVIGATION BAR-->

  <ul class="nav">

     <li class="nav"><a  href="http://sulley.cah.ucf.edu/~al174346/group11/A/storefront.php">Home</a></li>
    <li class="dropdown"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/catalog.php" class="dropbtn">Catolog<img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/arrow.png" alt="Arrow" style="height: 20px; width: 20px; margin-left: 10px;"></a>
      <div class="dropdown-content">
         <div class="dropdown-content">
       <a href="football.php">Football</a>
        <a href="basketball.php">Basketball</a>
        <a href="baseball.php">Baseball</a>
        <a href="golf.php">Golf</a>
        <a href="soccer.php">Soccer</a>
       </li>

    <?php
  session_start();
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

<!--END OF NAVIGATION BAR-->

<!--I WOULD GUESS THIS IS WHERE THE CATEGORIES WOULD GO-->
  <br/>
  <br/>


 <h2 class="titles">
  Shipping Policy and Charges
</h2>
<br/><br/><br/>

<p>
Shipping costs are determined by your item's size and weight, your selected shipping method, and your delivery address.<br/><br/>

In your shopping cart, we show your estimated shipping cost, based on the lowest price shipping method available. If you select a different shipping method or live outside of the contiguous United States, your actual shipping cost may be higher.<br/><br/>

Where Does Gear me Sports Ship?<br/><br/>

The 48 continental states<br/>
Alaska and Hawaii are eligible for Expedited shipping<br/>
APO/FPO addresses are eligible for package delivery by the US Postal Service<br/>

When Will My Order Ship?<br/><br/>

Each product on GearMeSports.com has an estimated processing time, which is given in business days and provided on the product's page. Processing times vary based on how your item is being shipped and where it is being fulfilled. Your full delivery timeframe includes both processing time and the time your item is in transit.<br/><br/>

Business days are Monday to Friday and do not include federal holidays within the United States.<br/><br/>


What Shipping Methods Are Available?<br/><br/>

Gear Me Sports offers many fast and convenient shipping methods for items purchased online, including small-item shipping methods, large-item shipping methods and gift cards.<br/><br/>

Gift Card Shipping Methods and Transit Time:<br/><br/>

Standard USPS first class shipping, 7-10 business days<br/>
Third-Day shipping, 3 business days<br/>
Two-Day shipping, 2 business day<br/>
Small Item Shipping Methods and Transit Time:<br/><br/>

Small items include products like apparel and footwear. Three shipping methods are available:<br/><br/>

Standard shipping, 2-5 business days<br/>
Expedited shipping, 2 business days<br/>
Express shipping, 1 business day<br/>
Please Note: If you select Express or Expedited shipping, your order must be received and credit must be approved by 12:30 p.m. EST, or it may not be processed until the next business day. Expedited shipping is available for select products. You can view complete shipping options for your product in your shopping cart.<br/> The estimated delivery date for your order will be provided on the order review page prior to completing the order.<br/>

Large Item Shipping Methods:<br/><br/>

Large items include products like treadmills, gun safes and basketball hoops. These large and heavy products cannot be sent by traditional package delivery and must be shipped via a large-item carrier.<br/><br/>

After the carrier receives your order, they will contact you to schedule a delivery time. Typically, carriers require a minimum four-hour window for delivery. An adult older than age 18 must be present and available to sign for the delivery. Large-item shipping methods may include:<br/><br/>

Curbside Delivery Your item will be delivered curbside via standard freight. Drivers do not assist in the assembly of your product, and if you select this method, we recommend you have someone to help you bring your item indoors.<br/>
Threshold Delivery Your item will be delivered just over the first threshold of your building. If stairs are required to access this threshold, you should select Room-Of-Choice delivery.<br/>
Room-of-Choice Delivery Your item will be delivered into the room of your choice, including one flight of stairs up or down.<br/>
Room-of-Choice Delivery and Assembly Your item will be delivered into the room of your choice, including one flight of stairs up or down. Your item will then be unpacked and fully assembled. All packaging will be removed after the assembly is complete. Please see below for details pertaining to portable basketball hoops.
Specialized delivery and/or installation options are provided for the following select products.<br/><br/>

Portable Basketball Hoops:<br/><br/>

Select between Curbside Delivery and Room-of-Choice Delivery and Assembly options.<br/><br/>

Curbside Delivery Your product will be delivered via standard ground shipment, through UPS or FedEx.<br/>
Room-of-Choice Delivery and Assembly Your product will be delivered via standard ground shipment, through UPS or FedEx. The assembly process will then be scheduled and completed by an assembly provider, who will contact you by phone within 24-48 hours after your purchase.<br/>
Gun Safes:<br/><br/>

Select Curbside Delivery, Threshold Delivery and Room-Of-Choice Delivery options.<br/><br/>

Curbside Delivery Your gun safe will be delivered just over your garage opening. If stairs are required to access your garage, you should choose Room-Of-Choice delivery.<br/>
Threshold Delivery Your gun safe will be delivered just over your garage opening. If stairs are required to access your garage, you should choose Room-Of-Choice delivery.<br/>
Room-of-Choice Delivery Your safe will be delivered into the room of your choice, including one flight of stairs up or down.<br/><br/>

How Can I Track My Shipment?<br/><br/>

You can view the status of your shipment by visiting our Track Your Order page.<br/><br/>

Tracking availability varies based on the types of items you purchased, your selected shipping method, and the carrier of your item. Please note, it may take up to 48 hours for a carrier to scan your order into its tracking system. This means your tracking number may not provide updates for up to 48 hours.<br/><br/>

What If I Never Received My Order?<br/><br/>

Occasionally packages may become lost in transit, delivered to an incorrect address, arrive in separate packages or left in a different location at your home. Log in to My Account and select Order Status.<br/><br/>

If your order is past the estimated delivery date or has been marked as delivered but cannot be located, please contact Customer Service for assistance<br/><br/>
</p>

<!--START OF FOOTER-->

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
<!--END OF FOOTER-->




</body>

</html>
