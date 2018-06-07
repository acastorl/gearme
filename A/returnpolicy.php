<!DOCTYPE html>

<html >
    <head>
  		<meta charset="UTF-8">
      <title>Gear Me Sports | Return Policy</title>
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
  Return Policy
</h2>
<br/><br/><br/>


Gear Me Sports is committed to customer satisfaction and keeping our prices low every day, and our return policy reflects this commitment.
<br/>
<br/>



Gear Me issues refunds based on the original form of payment: All refunds issued by Gear Me for returned merchandise must match the original form of payment. Customers will receive cash refunds for cash and check purchases, credit to the appropriate card for debit and credit card purchases, credit to the appropriate account for Apple Pay, PayPal, and other purchases using authorized payment systems, and merchandise credit for gift card or merchandise credit card purchases or any return without a receipt or packing slip. Cash refunds require an original purchase receipt.
<br/><br/>

A. Our commitment to fast and easy returns on Gear Me store purchases. You can return merchandise purchased at an Gear Me store to any Gear Me store for refund, credit or exchange as follows:<br/><br/>

1) Return with a purchase receipt: If you have a valid purchase receipt, Gear Me will give you a refund of the purchase price in the original form of payment, or an even exchange of the merchandise.<br/><br/>

2) Return with a gift receipt: If you have a valid gift receipt, Gear Me will give you a refund of the purchase price in the form of a merchandise credit, or an even exchange of the merchandise.<br/><br/>

3) Return without a receipt: If you do not have a valid receipt, Gear Me will attempt to verify the purchase if it was made with a credit or debit card. If Gear Me verifies the purchase, we will give you a refund of the purchase price in the original form of payment, or an even exchange of the merchandise. If Gear Me cannot verify the purchase, we will give you a merchandise credit equal to the item's lowest price sold within the past 90 days, or an even exchange of the merchandise. Customers must present valid government-issued photo identification (ID) to make a return without a receipt.<br/><br/>

B. Our commitment to fast and easy returns on Gear Me.com purchases. You can return merchandise purchased at Gear Me.com to any Gear Me store for refund, merchandise credit or exchange, or by parcel carrier/mail for refund, as follows:<br/><br/>

1) Return to store with a packing slip: If you purchased merchandise from Gear Me.com, your packing slip is your receipt. You can obtain a copy of your packing slip at Gear Me.com using Order Status or by contacting Customer Care for assistance. If you have a valid packing slip, Gear Me will give you a refund of the purchase price, less any applicable shipping or other Gear Me.com charges (unless you are eligible to receive a refund of such charges - see below for more information), in the original form of payment, or an even exchange of the merchandise.

2) Return to store without a packing slip: If you do not have a valid packing slip, Gear Me will attempt to help you obtain a copy. If Gear Me verifies the purchase, we will give you a refund of the purchase price, less any shipping or other Gear Me.com charges (unless you are eligible to receive a refund of such charges - see below for more information), in the original form of payment, or an even exchange of the merchandise. If Gear Me cannot verify the purchase, we will give you a merchandise credit equal to the item's lowest price sold within the past 90 days, or an even exchange of the merchandise. Customers must present valid government-issued photo identification (ID) to make a return without a packing slip.<br/><br/>

3) Return by parcel carrier/mail with a packing slip: If you have a valid packing slip, you may return the merchandise to Gear Me by parcel carrier/mail at the address below for a refund of the purchase price, less any applicable shipping or other Gear Me.com charges (unless you are eligible to receive a refund of such charges - see below for more information), in the original form of payment:<br/><br/>



12443 Research Pkwy.<br/>
Orlando, FL 32826.<br/><br/><br/>


Please fill in any requested information on the packing slip, and include the packing slip in the return box. Gear Me will issue refunds after it has received and inspected the returned merchandise. If you wish to return a purchase requiring special or bulk shipping, please contact Customer Care for assistance.<br/><br/>

4) Free return shipping on footwear and apparel purchases on Gear Me.com: If you purchased footwear or apparel from Gear Me.com, your packing slip will include a prepaid shipping voucher to return the merchandise to Gear Me.<br/><br/>

5) Gear Me will refund shipping and other Gear Me.com charges for defective merchandise, merchandise damaged in transit, or errors to your order made by Gear Me: If merchandise you purchased at Gear Me.com is defective, arrives damaged, or is not the product that you ordered, please contact Customer Care so that you may return the merchandise to an Gear Me store or by parcel carrier/mail for a refund, including all shipping costs and any other Gear Me.com charges.<br/><br/>

C. Our commitment to keeping our prices low every day. Gear Me strives to keep its prices low every day by monitoring returns for fraud and abuse and reserving the right to limit or refuse returns as follows:<br/><br/>

1) Returned merchandise must be resalable: Except if there is a product defect, in-transit product damage, or a valid product performance issue, returned merchandise must be resalable (no visible wear or usage), in original packaging, and with all paperwork, parts, and accessories.<br/><br/>

2) Returns to a store without a receipt or packing slip require valid identification: Gear Me requires valid government-issued photo identification (ID) for all returns without a valid receipt or packing slip. Examples of valid ID include, but may not be limited to: U.S., Canada or Mexico Driver License, Passport, U.S. Military ID, State-issued ID card, U.S. Permanent Resident Card, U.S. Laser Visa, Matricula Consular, Canadian Province identification. Gear Me may review and retain your ID information and return history solely for purposes of authorizing returns and preventing return fraud and abuse.<br/><br/>

3) Gear Me may limit or refuse returns, deactivate merchandise credits and gift cards. Gear Me may take reasonable action to prevent fraud and abuse and to otherwise enforce this Policy and all other policies, laws, rules, and regulations governing Gear Me, its customers, and their shopping experience.<br/><br/>

D. Our commitment to meeting vendor and governmental requirements. Select vendors, suppliers, and/or governmental entities may require different return policies. Please see an Gear Me team member or contact Customer Care for assistance.<br/><br/>

1) Firearms: With the exception of brands sold exclusively by Gear Me, all firearm sales are final, and customers must return any damaged or defective firearm to the manufacturer for warranty repair or claims.<br/><br/>

2) Ammunition: With the exception of brands sold exclusively by Gear Me, all ammunition sales are final, and customers must return any damaged or defective ammunition to the manufacturer for warranty repair or claims.<br/><br/>

3) Shooting Accessories: All sales of explosive binary targets, smokeless powder, and smokeless propellant are final, and customers must return any damaged or defective merchandise to the manufacturer for warranty repair or claims.<br/><br/>

4) Bows and Cross-Bows: All bow and cross-bow sales are final, and customers must return any damaged or defective bow or cross-bow to the manufacturer for warranty repair or claims.<br/><br/>

5) Boats, Canoes, Kayaks, and Trailers that require a Manufacturer's Statement of Origin (MSO): If you purchased a boat, canoe, kayak, or trailer and received an MSO for the item, and you have registered title to the item, you may not return the item. If you have received an MSO for the item, but you have not registered title to the item, you may return the item with the MSO.<br/><br/>

6) Outboard Motors: All sales of outboard motors are final, and customers must return any damaged or defective outboard motor to the manufacturer for warranty repair or claims.<br/><br/>

7) Baseball and Softball Bats: If you purchased a baseball or softball bat and have not removed the bat from its original packaging, you may return the bat to Gear Me for a refund or exchange. If you have removed the bat from its original packaging and found damage or a defect, you must return the bat to the manufacturer for warranty repair or claims.<br/><br/>



8) Software: If you purchased software and you have not opened the original packaging, you may return it for a refund of the purchase price or an even exchange of the merchandise. If you have opened the original packaging and found damage or a defect, you may exchange the software for the same merchandise only.<br/><br/>



9) Gift Cards: Gift cards are redeemable for merchandise and in-store services at any Gear Me store or for merchandise at Gear Me.com. Customers cannot redeem Gear Me gift cards for cash or credit unless required by state law, and Gear Me cannot replace lost, stolen, or altered cards. In certain states, gift card balances of less than a certain amount may be redeemable for cash. Check the law of your state for more information. Customers may return unused gift cards for a refund of the gift card's purchase price with a valid receipt or packing slip and valid government-issued photo identification (ID).<br/><br/>




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
