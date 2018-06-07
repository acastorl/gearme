<!DOCTYPE html>

<html>
    <head>
		<meta charset="UTF-8">
        <title>Gear me sports</title>
        <link rel="stylesheet" href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/css/">
    <link href="https://fonts.googleapis.com/css?family=Anton%7CDiplomata+SC%7CNunito" rel="stylesheet">    </head>

<body>
  <a target="_blank" class= "top" href="https://www.w3schools.com">
<img src="http://sulley.cah.ucf.edu/~al174346/dig4530c/assignments/ia02/img/facebook.png" alt="Go to W3Schools!" width="42" height="42" >
</a>
<a target="_blank" class= "top" href="https://twentyfourblazin.tumblr.com">
<img src="http://sulley.cah.ucf.edu/~al174346/dig4530c/assignments/ia02/img/Tumblr_icon.png" alt="Go to W3Schools!" width="42" height="42" >
</a>
<a target="_blank" class= "top" href="https://twentyfourblazin.tumblr.com/">
<img src="http://sulley.cah.ucf.edu/~al174346/dig4530c/assignments/ia02/img/insta.jpg" alt="Go to W3Schools!" width="42" height="42" >
</a>


<div class="container">

<header>
  <div class = "lavy">
	 <img src="http://sulley.cah.ucf.edu/~al174346/dig4530c/assignments/ia02/img/brunch.png"  class= "lav" alt="some_text" >
	 </div>
	 <div class = "crap">
     <p class="formbackground">Search our store:</p>

<form class="formbackground">
  <input type="text" name="search" placeholder="Search..">
</form>
<ul class="nav">
   <li id="burger" > <img src="http://sulley.cah.ucf.edu/~al174346/dig3716c/labs/lab_05/imgs/menu-alt-512.png" alt="Mountain View" > </li>

   <li class="nav1"><a  href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/storefront.php">Home</a></li>
  <li class="nav1"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/catalog.php">Catolog</a></li>
  <li class="nav1"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/admin.php">Admin</a></li>
  <li class="nav1"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/contact.php">contact</a></li>


        <li class="navicon"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/shopingcart.php">  <img class ="dog" src="https://maxcdn.icons8.com/Share/icon/p1em/Very_Basic//search1600.png" alt="game">

        </a></li>
        <li class="navicon"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/storeprofile.php">  <img class ="dog" src="https://d30y9cdsu7xlg0.cloudfront.net/png/363633-200.png" alt="game">

        </a></li>
        <li class="navicon"><a href="http://sulley.cah.ucf.edu/~dig4530c_group11/A/shopingcart.php">  <img class ="dog" src="https://image.flaticon.com/icons/png/512/2/2772.png" alt="game">

        </a></li>

</ul>
</div>

</header>
<div class = "crap">
</div>

<div class="col span_1_of_2">





<div class="section group">
	<div class="col span_2_of_2 second">

	 <div class ="shart">

  <h4> Ball sports </h4>

       <div class= "pool">
 <div class = "items">
   <a  target="_blank" class= "top" href="https://twentyfourblazin.tumblr.com/">
<img class ="dogie" src="https://img07.deviantart.net/17b0/i/2012/174/1/2/balon_de_futbol_soccer_jpg_by_gianferdinand-d54m6lu.jpg" alt="item">
</a>
<p class = "price"> soccer</p>
</div>
<div class = "items">
  <a  target="_blank" class= "top" href="https://twentyfourblazin.tumblr.com/">
<img class ="dogie" src="https://img07.deviantart.net/17b0/i/2012/174/1/2/balon_de_futbol_soccer_jpg_by_gianferdinand-d54m6lu.jpg" alt="item">
</a>
<p class = "price"> baseball</p>
</div>
<div class = "items">
  <a  target="_blank" class= "top" href="https://twentyfourblazin.tumblr.com/">
<img class ="dogie" src="https://img07.deviantart.net/17b0/i/2012/174/1/2/balon_de_futbol_soccer_jpg_by_gianferdinand-d54m6lu.jpg" alt="item">
</a>
<p class = "price"> hockey</p>
</div>

  </div>
  <p> Welcome to gear me sports the number one sports shop in the world.
  </p>
  <br> <br> <br> <br>
<hr>
	 <div class ="shart">
<h4> Featured Products</h4>

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
     if($result->num_rows > 0)
     	{
     		while($row = mysqli_fetch_array($result))
     		{
     			?>

     		  <div class = "items">
     		    <a  target="_blank" class= "top" href="https://twentyfourblazin.tumblr.com/">
     		  <img class ="dogie" src="<?php echo $row["Product Image"]; ?>" alt="item">
     		  </a>
     		  <p class = "productname"> <?php echo $row["Product Name"]; ?></p>
     		  <p class = "price"> <?php echo $row["Cost"]; ?></p>
          <p class = "price"> <?php echo $row["SKU"]; ?></p>
          <p>★★★★★</p>
            <input type="submit" name="add" style="margin-top:5px;" class="button" value="Add to Bag">
     		  </div>

                 <?php
     		}

     	}
     	?>


  </div>
  <p>
    this will be were the product goes.
  </p>
  <br> <br> <br> <br>
<hr>
	 <div class ="shart">


  <br> <br> <br> <br>
<hr>
</div>
</div>
	</div>


<hr>
</div>
</div>


<footer>
      <div class= "farto">
      <h4> Links </h4>
<ul class= "fartss">
  <li><a href="http://sulley.cah.ucf.edu/~al174346/dig3716c/assignment2/page_index.html">sports</a></li>
    <li><a href="http://sulley.cah.ucf.edu/~al174346/dig3716c/assignment2/art.html">Admin</a></li>
    <li><a href="http://sulley.cah.ucf.edu/~al174346/dig3716c/assignment2/portfolio.html">Home</a></li>
</ul>
 </div>
 <div class= "farto">
<h4 class="farto"> External links </h4>

<ul class= "fartss">
  <li><a target="_blank" class= "top" href="https://www.w3schools.com">
  <img src="http://sulley.cah.ucf.edu/~al174346/dig4530c/assignments/ia02/img/facebook.png" alt="Go to W3Schools!" width="42" height="42" >
  </a>


  <a  target="_blank" class= "top" href="https://twentyfourblazin.tumblr.com/">
  <img src="http://sulley.cah.ucf.edu/~al174346/dig4530c/assignments/ia02/img/Tumblr_icon.png" alt="Go to W3Schools!" width="42" height="42" >
  </a>

  <a  target="_blank" class= "top" href="https://twentyfourblazin.tumblr.com/">
  <img src="http://sulley.cah.ucf.edu/~al174346/dig4530c/assignments/ia02/img/insta.jpg" alt="Go to W3Schools!" width="42" height="42" >
  </a>
  </li>
</ul>
<p><span style="color:black">Gear me sports ©  october 2017</span></p>
<p><span style="color:black">“This site is not official and is an assignment for a UCF Digital Media course”, as well as “designed by Alex Castaneda”</span></p>


      </footer>
            </div>




</div>
</html>




</body>

</html>
