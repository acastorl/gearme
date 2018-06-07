<!DOCTYPE html>

<html >
    <head>
		<meta charset="UTF-8">
        <title>Gear Me Sports | Cart</title>
        <style type="text/css">@import url('css/resetcss.css');</style>
        <style type="text/css">@import url('css/styles.css');</style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
		<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109733750-1');
</script>
    </head>

<body>
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
<a  href="storeprofile.php">
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

<div class="cnt">
  <br/>
  <br/>
  <h2 class="titles">
    Shopping cart:
    </h2>
  <br/>
  <br/>
    <br/>
  <table class="table">
       <tr class="table">
            <th class="table">Item Name</th>
            <th class="table">Quantity</th>
            <th class="table">Price</th>
            <th class="table">Total</th>
            <th class="table">Action</th>
       </tr>
       <?php
       session_start();
       if(!empty($_SESSION["shopping_cart"]))
       {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
       ?>
       <tr class="table">
            <td class="table"><?php echo $values["item_name"]; ?></td>
            <td class="table"><?php echo $values["item_quantity"]; ?></td>
            <td class="table">$ <?php echo $values["item_price"]; ?></td>
            <td class="table">$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
            <td class="table"><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
       </tr>
       <?php
                 $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
       ?>
       <tr class="table">
            <td class="table">Total</td>
            <td class="table">$ <?php echo number_format($total, 2); ?></td>

       </tr>
       <?php
       }
       ?>
  </table>
    <br/>
    <bt/>
    <br/>
  <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr>
  <td align="center"></td></tr><tr><td align="center">
    <a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
      <img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_now_accepting_pp_2line_w.png" border="0" alt="Now Accepting PayPal">
    </a>
    <div style="text-align:center">
      <a href="https://www.paypal.com/webapps/mpp/how-paypal-works">
        <font size="2" face="Arial" color="#0079CD">How PayPal Works</font>
      </a>
      <script>
        paypal.Button.render({

            env: 'production', // Or 'sandbox',

            commit: true, // Show a 'Pay Now' button

            style: {
                color: 'gold',
                size: 'small'
            },

            payment: function(data, actions) {
                /*
                 * Set up the payment here
                 */
            },

            onAuthorize: function(data, actions) {
                /*
                 * Execute the payment here
                 */
            },

            onCancel: function(data, actions) {
                /*
                 * Buyer cancelled the payment
                 */
            },

            onError: function(err) {
                /*
                 * An error occurred during the transaction
                 */
            }

        }, '#paypal-button');
    </script>
    </div>
    </td>
  </tr>
</table><!-- PayPal Logo -->
<div id="paypal-button"></div>

<script>
    paypal.Button.render({

        env: 'sandbox', // sandbox | production

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
        client: {
            sandbox:    'AZsVIZzeuIGiPKfLQGili_voYkk1pr7Y2hGBLWU7ZUMNG2JZ1auTo6e4o1nuVYKbBassD5ND-LnxNKSR',
            production: '<AZsVIZzeuIGiPKfLQGili_voYkk1pr7Y2hGBLWU7ZUMNG2JZ1auTo6e4o1nuVYKbBassD5ND-LnxNKSR>'
        },

        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,

        // payment() is called when the button is clicked
        payment: function(data, actions) {

            // Make a call to the REST api to create the payment
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '0.01', currency: 'USD' }
                        }
                    ]
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

            // Make a call to the REST api to execute the payment
            return actions.payment.execute().then(function() {
                window.alert('Payment Complete!');
            });
        }

    }, '#paypal-button-container');

</script>
<h2>Guest checkout</h2>
<form action="" method="POST">

               Username:<input type="text" class="forms" id = "username" name="username" value="" size="30" maxlength="30">
               <br/>Password:<input type="password" class="forms" id = "password" name="password" value="" size="30" maxlength="30">
               <br/>Phone Number:<input type="text" class="forms" name="phone" value="" size="20" maxlength="20">
               <br/>E-mail Address:<input type="text" class="forms" id = "email" name="email" value="" size="15" maxlength="100">
               <br/>Street:<input type="text" class="forms" name="street" value="" size="15" maxlength="100">
               <br/>City:<input type="text" class="forms" name="city" value="" size="15" maxlength="100">
                <br/>State:<input type="text" class="forms" name="state" value="" size="15" maxlength="2">
               <br/>Zip Code:<input type="text" class="forms" name="zip" value="" size="15" maxlength="15">
               <br/><br/><input type="submit" class="forms" value="submit" name="submit">
          </form>
</div>
  <br/>
  <br/>
  <p>
    Headquarters located at 12443 Research Pkwy, Orlando, FL 32826.
  </p>


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
            </div>




</div>




</body>

</html>
