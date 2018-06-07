<!DOCTYPE html>

<html >
    <head>
  		<meta charset="UTF-8">
      <title>Gear Me Sports | Security Statement</title>
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
    <li class="dropdown"><a href="http://sulley.cah.ucf.edu/~al174346/group11/A/catalog.php" class="dropbtn">Catalog<img src="http://sulley.cah.ucf.edu/~al174346/group11/A/img/arrow.png" alt="Arrow" style="height: 20px; width: 20px; margin-left: 10px;"></a>
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
  Security Statement
</h2>
<br/><br/><br/>

<p>
  Thank you for visiting the Gear Me Sports website and reviewing our privacy and security statement. Gear me Sports is committed to maintaining the privacy of your personal information and the security of our computer systems. With respect to the collection, use and disclosure of personally identifiable information. Gear Me Sports makes every effort to ensure compliance with applicable federal law, including, but not limited to, The Privacy Act of 1974, The Paperwork Reduction Act of 1995, and The Freedom of Information Act.<br/><br/>

As a general rule, the Department does not collect personally identifiable information when you visit our site unless you choose to provide such information. The information we collect varies based on what you do when visiting our site.<br/><br/>

If you respond to an online request for personal information:<br/><br/>

The information requested by the Department will be used to respond to your inquiry or to provide you with the service associated with the request. When this information is requested, a customized "Privacy Notice" will describe fully the reasons for collecting it and will provide a description of the Department's intended use of the information. This Privacy Notice will appear in one of two places. It will either be on the webpage where the information is collected or it will be accessible through a link prominently displayed immediately preceding the information request.<br/><br/>

If you visit our site to read or download information, we collect and store the following information:<br/><br/>

The name of the domain from which you access the Internet (for example, dol.gov, if you are connecting from the Department of Labor's computer account).
The date and time you access our site.<br/>
The Internet address of the website from which you directly linked to our site.<br/>
This information is used by software programs on our website to collect summary statistics that allow us to assess the number of visitors to the different sections of our site, identify what information is of most and least interest, determine technical design specifications, monitor system performance, and help us make our site more useful to visitors.<br/><br/>

If you identify yourself by sending an e-mail containing personal information:<br/><br/>

You may send us personally identifiable information in an electronic mail message - for example you may send us your mailing address when requesting that information be mailed to you. This information is used solely for responding to your requests for information or records. We may forward your e-mail to other government employees who are better able to fulfill your requests. <br/><br/>

If you link to other sites outside Gear me Sports:<br/><br/>

Our website has other links to other sites. When you link to any of these sites, you are no longer on our site and are subject to the privacy policy of the new site.<br/><br/>

Social Media and Third Party Sites:<br/><br/>

In addition to the Department's official websites, the Department uses social media and third party sites to provide Gear Me Sports content in a different format that may be useful or interesting to you. When we use these sites, the information we provide is consistent with the intended purpose of the Gear Me Sports website. No PII may be requested from or collected by Gear me Sports on social media sites. The privacy protection provided on social media and third party sites that are not a part of Gear Me sports websites may not be the same as the privacy protection given by the Gear Me Sports and described here.<br/><br/>

Cookie Use Notice:<br/><br/>

Cookies are small files that Web servers place on a user's hard drive. They can serve several functions, depending upon how they are designed:<br/><br/>

they allow the website to identify you as a previous visitor each time you access a site;<br/>
they track what information you view at a site (important to commercial sites trying to determine your buying preferences);<br/>
in the more advanced cases they track your movements through many websites but not the whole Web;<br/>
businesses use them for customer convenience to allow them to produce a list of items to buy and pay for them all at one time and to garner information about what individuals are buying at their sites;<br/>
advertisers use them to determine the effectiveness of their marketing and offer insights into consumer preferences and tastes by collecting data from many websites; and<br/>
they can be used to help a website tailor screens for each customer's preference.<br/>
Some Gear Me Sports pages have "session cookies," to facilitate use of that particular page. These disappear when the Web user terminates a Web session and closes the browser. Gear Me Sports also permits the use of persistent cookies for the collection of Web metrics; however, Gear Me Sports does not collect any personally identifiable information about visitors to our Web pages. Please see our Gear Me Sports Persistent Cookie Notice that details the types of information collected and how to opt-out by changing the cookie settings in your browsers.<br/><br/>

If you are concerned about the potential use of the information gathered from your computer by cookies, you can set your browser to prompt you before it accepts a cookie. Most Internet browsers have settings that let you identify and/or reject cookies.<br/><br/>

For security purposes and to ensure that this service remains available to all users, our Web site also employs software programs to monitor network traffic to identify unauthorized attempts to upload or change information, or otherwise cause damage.<br/><br/>

Unauthorized attempts to upload information or change information on this service are strictly prohibited and may be punishable under the Computer Fraud and Abuse Act of 1986 and The National Information Infrastructure Protection Act of 1996.<br/><br/>

This statement is about your privacy when using this website. For information about the Department’s privacy program and our Senior Agency Official for Privacy (SAOP), visit our Department of Labor Privacy Program page.<br/><br/>
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
