<!DOCTYPE html>

<html >
    <head>
  		<meta charset="UTF-8">
      <title>Gear Me Sports | About Us</title>
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



  <!--NAVIGATION BAR-->

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

<!--END OF CATEGORIES BEGINNING OF FEATURED PRODUCT-->

<h2 class="titles">
  About the Company
</h2>
<br/>
<br/>
<br/>
<p>
  Gear Me Sports is a local, Florida based commercial stablishment known for selling equipment from your favorite brands. Featuring Adidas, Nike, Asics, and many more; Gear Me is Florida's go-to place for sports and outdoors equipment. Headquarters located at 12443 Research Pkwy, Orlando, FL 32826.
</p>
<br/>
<br/>

<h2 class="titles">
  About the Founders
</h2>
<br/>
<br/>

<div class="section group">
  <div class="col span_1_of_3">
    <p>
      <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAIA_wDGAAAAAQAAAAAAAAs6AAAAJGVhOWE2MjM1LTc2MzYtNDJjMi1iMTU4LTViMDlhNzVjZjdjNQ.jpg" alt="Kelly Carr" class="profilepicture" >
      Alex Castaneda:<br/><br/>
      Senior at the University of Central Florida. Majoring in Digital Media. In charge of server side logic.
    </p>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <p>
      <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/Kellyimage.png" alt="Kelly Carr" class="profilepicture" >
      Kelly Carr:<br/><br/>
      Senior at the University of Central Florida. Majoring in Graphic Design with a minor in marketing. In charge of branding and styling of company website.
    </p>
  </div>
  <div class="col span_1_of_3">
    <p>
      <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/cameron.jpeg" alt="Cameron Harrison" class="profilepicture" >
      Cameron Harrison:<br/><br/>
      Senior at the University of Central Florida. Digital Media Web Design Major. In charge of the company policies and search functionality.
    </p>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <p>
      <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/evan.png" alt="Evan Birriel" class="profilepicture" >
      Evan Birriel:<br/><br/>
      Senior at the University of Central Florida. Digital Media - Web Design Major. In charge of server-side and database organization and SEO.
    </p>
  </div>
  <div class="col span_1_of_3">
    <p>
      <img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/daniel.jpeg" alt="Daniel Cabrera" class="profilepicture" >
      Daniel Cabrera:
      <br/>
      <br/>
      International Student from Caracas, Venezuela.
      Senior at the University of Central Florida.
      Web Design Major.
      In charge of branding and styling of company website.
    </p>
  </div>
</div>



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
