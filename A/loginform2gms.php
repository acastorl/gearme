<!DOCTYPE html>
<?php
error_reporting (E_ALL ^ E_NOTICE);//my original php element hides type of error on error report
session_start();
	include("db_connectgms.php");
// on the loggin page if the person isnt logged in it would say please loggin if not then it would say welcome back.
	if((isset($_POST['submit'])) && (!isset($_SESSION['logged_in']))) {
		$username = $_POST['username'];
		//$password = sha1($_POST['password']);
		$password = $_POST['password'];
		//$password = mysql_real_escape_string($password = sha1($_POST['password']));
		$sql = "SELECT * FROM profilesgms2 WHERE username ='".$username."' AND password='".$password."' LIMIT 1";
	$result = mysqli_query($connection, $sql);
	if ($result->num_rows == 1){
		$row = $result->fetch_assoc();
		$_SESSION['logged_in'] = true;
		$_SESSION['logged_in_user'] = $username;
		$_SESSION['logged_in_user_email'] = $email;
		echo "You are now logged in " . $_SESSION['logged_in_user'] . ". You will be redirected to the homepage.";
		print_r($row);
		echo $row['type'];
	}
	if ($row['type'] == 'admin'){
		session_regenerate_id(true);
		$_SESSION['user_admin'] = true;
		echo "welcome admin";
}
if ($row['type'] == 'member'){
	session_regenerate_id(true);
	$_SESSION['user_member'] = true;
	echo "welcome " . $_SESSION['logged_in_user'];
}

	else{
		echo "Invalid username and password";
	}
				}

				else {

}
if (isset($_SESSION['logged_in'])) {
		//header("Refresh: 5; ");
	}

  //if(!empty($_POST['username']) && !empty($_POST['password'])){
//if (!$_POST == ""){i was hoping this could work but i went with the latter approach.
		//$username = $_POST['username'];
		//$password = $_POST['password'];
		//if($username!=="dig3134user"){ //checks to see if anything other than dig3134user
		//	echo"Incorect username or password";
		//}
		//	elseif ($password!=="dig3134pass") {
		//	echo"Incorrect username or password";
		//	}
		//	else{ //if correct should loggin and create a cookie
//setcookie('username',$_POST['username']);			}

	//}
	if(!empty($_POST['submit1'])){

		$submit1= $_POST['submit1'];
if($_POST["submit1"]){ //when loggot is clicked should unset cookie but i have an error undefined index dont know how to fix
	//setcookie('username',$_POST['username'],time()-7200);
	//unset$_SESSION['logged_in'];
	//unset$_SESSION['logged_in_user'
	session_destroy();
	session_unset();


}
}

		  ?>



		  <?php



?>
<!DOCTYPE html>

<html >
    <head>
		<meta charset="UTF-8">
        <title>Gear Me Sports | Contact</title>
        <style type="text/css">@import url('css/resetcss.css');</style>
        <style type="text/css">@import url('css/styles.css');</style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109733750-1"></script>
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
<a href="storeprofile.php">
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
</header>

<div class="cnt">
    <br/>
    <br/>
	<h2 class="titles">Login</h2>
    <br/>
    <br/>
    <br/><br/>
				 <div class = "forms">
					 <form action="" method="POST">
					 <p>User Name:</p><input type="text" class="forms" name="username"><br/><br/>
					 <p>Password:</p><br/><input type="password" class="forms" name="password"><br/><br/>
						<input type="submit" class="forms" value="submit" name ="submit"> <br/><br/>
					 </form>
					 <form action="" method="POST">
						<input type="submit" class="forms" value="logout" name= "submit1"><br/>



				 </div>


    <br/>
    <hr>
    <br/>
    <br/>
	<h2 class="titles">Order History</h2>
    <br/>
    <br/>
	</div>
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
            </div>




</div>




</body>

</html>
