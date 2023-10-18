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
    <title>Profile</title>
    
	<link href="css/MyNewStyle.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet" type="text/css">
  </head>
    <body>
        <div class="container-fluid">
  	        <div class="container">
  	            <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" width="51" height="50" class="rounded-circle"/></a>
  	      
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
  	      
                <div class="collapse navbar-collapse" id="navbarSupportedContent1"><a class="nav-link" href="Contactus.php">Contact us</a><a class="nav-link" href="FoodCart.php">Foods</a><a class="nav-link" href="https://goo.gl/maps/pLhALiJ3vcgV2Zm76">Location</a>
  	            <ul class="navbar-nav mr-auto">
          
                <li class="nav-item active"> </li>
  	            <li class="nav-item"> <a class="nav-link" href="AllGuides.php">Guides</a> </li>

  	            <li class="nav-item dropdown">

                <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
              
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> </div>
              
                </li>

  	            <li class="nav-item"> </li>
              </ul>

  	        <form class="form-inline my-2 my-lg-0"></form>
          </div>
</nav>
  	    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
<div class="carousel-inner" role="listbox">
        <div class="carousel-item active col-lg-12"> <img src="images/11.jpg" alt="First slide" width="1083" height="512" class="d-block mx-auto rounded">            </div>
</div>
</div>
  	    <h1 class="text-center">&nbsp;</h1>
  	    <h1 class="text-center" style="color: blue"><?php echo "Hi ".$_SESSION["username"]?></h1>
        <p class="text-center">Best Service , Best Product , Best Price</p>
        <p class="text-center"> Please fill up the forms and do what you want&nbsp;</p>
        
        
        <table width="908" height="225" align="center">
          <tbody>
            <tr>
              <td width="900"><div class="main-section">
              
              <div class="dashbord">
                <div class="icon-section"> <br />
                  <img src="images/addFood.jpg" alt="" width="87" height="90" class="rounded-circle" />
                  <p>&nbsp;</p>
                </div>
                <div class="detail-section"> <a href="FoodForm.php">Add Foods    <br> </a> </div>
              </div>

              <div class="dashbord dashbord-green">
                <div class="icon-section"> <br />
                  <img src="images/guide.png" width="87" height="90" class="rounded-circle" />
                  <p>&nbsp;</p>
                </div>
                <div class="detail-section"> <a href="GuideForm.php">Add Guide </a> </div>
              </div>

              <div class="dashbord dashbord-blue">
                <div class="icon-section"> <br />
                  <img src="images/viewFood.jpg" alt="" width="87" height="90" class="rounded-circle" />
                  <p>&nbsp;</p>
                </div>
                <div class="detail-section"> <a href="ViewMyFoodAdvertisement.php">View My Food Advertisement</a> </div>
              </div>
              
              <div class="dashbord dashbord-skyblue">
                <div class="icon-section"> <br />
                  <img src="images/viewGuide.jpg" alt="" width="87" height="90" class="rounded-circle" />
                  <p>&nbsp;</p>
                </div>
                <div class="detail-section"><a href="ViewMyGuideAdvertisement.php">View My Guide Advertisement</a> </div>
              </div>

              <div class="dashbord dashbord-red">
                <div class="icon-section"> <br />
                  <img src="images/editFood.jpg" alt="" width="87" height="90" class="rounded-circle" />
                  <p>&nbsp;</p>
                </div>
                <div class="detail-section"> <a href="ViewMyFoodAdvertisement.php">Edit Food Advertisements </a> </div>
              </div>

              <div class="dashbord dashbord-orange">
                <div class="icon-section"> <br />
                  <img src="images/editGuide.jpg" alt="" width="87" height="90" class="rounded-circle" />
                  <p>&nbsp;</p>
                </div>
                <div class="detail-section"> <a href="ViewMyGuideAdvertisement.php">Edit Guide Advertisement</a> </div>
              </div>

              <br>
            </div>
            </td>
          </tr>
        </tbody>
      </table>
</div>
		  
<br>
<br>
<br>
<button type="button" class="btn btn-lg"></button>
<footer> </footer>
<div class="row">
  <div class="col-lg-1 offset-lg-2"><img src="images/logo.png" alt="" width="51" height="50" class="rounded-circle"/></div>
  <div class="col-lg-6 offset-lg-0">Copyright C 2022 All rights reserved</div>
</div>
		  <br>
		  <br>
  	  </div>
  	
  
  <script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>
