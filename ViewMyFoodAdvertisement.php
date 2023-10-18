<?php session_start();
if (!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Food Advertisements</title>

	<link href="css/new.css" rel="stylesheet">
	<link href="css/newstyles.css" rel="stylesheet" type="text/css">
  </head>
<body>
  	<div class="container-fluid">
  	  <div class="container">
  	    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" width="51" height="50" class="rounded-circle"/></a>
  	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
<a class="nav-link" href="Account.php" style="color: blue">Account <span class="sr-only">(current)</span></a>
  	      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
  	        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> </li>
  	         
  	          <li class="nav-item dropdown">
<div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> </div>
              </li>
  	          <li class="nav-item"> </li>
            </ul>
  	        <form class="form-inline my-2 my-lg-0">
            </form>
      </div>
</nav>
  	    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey"> </div>
  	    <h1 class="text-center">&nbsp;</h1>
  	    <h1 class="text-center">PERSONAL FOOD ADVERTISEMENT</h1>
<br>
<br>
		<?php
			$con = mysqli_connect("localhost","root","","finalproject");
			if (!$con)
			{
				die("Sorry!!! We are facing technical issue..");
			}
	
			$sql = "SELECT * FROM `tblfoodadvertisement` WHERE `email` = '".$_SESSION["username"]."';";
	
			$result = mysqli_query($con, $sql);
	
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
			{
		?>
  
		<div class="card" align="center">
		  <p></p>
		  <img src="<?php echo $row["imagePath"]?>" style="width:100%" >
		  <div class="container">
		    <h2><?php echo $row["productName"]?></h2>
		    <p><?php echo $row["item_price"]?></p>
		    <p>Contact number : <?php echo $row["contactNumber"]?></p>
		    <p>
		      <button style="background-color: dimgrey; border-color: chartreuse; color: white">
		      <a href="EditFoodAdvertisement.php?id=<?php echo $row["advertisementID"]; ?>">Edit</a>
		      </button>
		      <button style="background-color: dimgrey; border-color: chartreuse; color: white">
		      <a href="DeleteFoodAdvertisement.php?id=<?php echo $row["advertisementID"]; ?>">Delete</a>
		      </button>
	        </p>
	      </div>
	    </div>
		<div class="row">
  		<div class="column"> </div>
		<?php
	  			}
			}
			mysqli_close($con);
		?>
<br>
<br>

  	  </div>
  	</div>
 
	<script src="js/jquery-3.4.1.min.js"></script>


	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
