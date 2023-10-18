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
    <title>Sri Lanka</title>
	<link href="css/MyNewStyle.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  	<div class="container-fluid">
  	  <div class="container">
  	    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" width="51" height="50" class="rounded-circle"/></a>
  	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
  	      <div class="collapse navbar-collapse" id="navbarSupportedContent1"><a class="nav-link" href="Contactus.php">Contact us</a><a class="nav-link" href="Restaurant.php">Restaurants&nbsp;</a><a class="nav-link" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1896263.3539935248!2d80.04083258209516!3d7.863314273071834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1669158529263!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Location</a>
  	        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> </li>
  	          <li class="nav-item"> <a class="nav-link" href="Account.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Account</a> </li>
  	    
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
  	    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
  	      <ol class="carousel-indicators">
  	        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
  	        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
  	        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
          </ol>
  	      <div class="carousel-inner" role="listbox">
  	        <div class="carousel-item active"> <img src="images/5 (1).jpg" alt="First slide" width="1110" height="500" class="d-block mx-auto">
  	          <div class="carousel-caption">
  	            <h5></h5>
  	            <p></p>
              </div>
            </div>
  	        <div class="carousel-item"> <img src="images/6.jpg" alt="Second slide" width="1150" height="600" class="d-block mx-auto">
  	          <div class="carousel-caption">
  	            <h5></h5>
  	            <p></p>
              </div>
            </div>
  	        <div class="carousel-item"> <img src="images/5 (3).jpg" alt="Third slide" width="1150" height="700" class="d-block mx-auto">
  	          <div class="carousel-caption">
  	            <h5></h5>
  	            <p></p>
              </div>
            </div>
  	        <div class="carousel-item"> <img src="images/8.jpg" alt="Third slide" width="1150" height="700" class="d-block mx-auto">
  	          <div class="carousel-caption">
  	            <h5></h5>
  	            <p></p>
              </div>
            </div>
          </div>
  	      <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  	    <h1 class="text-center">&nbsp;</h1>
  	    <h1 class="text-center" style="color: darkblue">WELCOME TO SRILANKA</h1>
        <p class="text-center">Sri Lanka is an island country located off the southern coast of India. Sri Lanka is surrounded by the Indian Ocean, Gulf of Mannar, the Palk Strait, and lies in the vicinity of India and the Maldives. The geography of Sri Lanka includes coastal plains in the north and hills and mountains in the interior.</p>
        <p class="text-center">&nbsp;</p>
<div class="row">
      <div class="col-lg-4">
            <div class="card col-md-4 col-lg-12"> <img src="images/4.jpg" alt="Card image cap" height="280" class="card-img-top rounded-circle">
              <div class="card-body">
                <h5 class="card-title text-center" style="color: darkblue">RESTAURANTS&nbsp;</h5>
                <p class="card-text">The central feature of Sri Lankan cuisine is boiled or steamed rice, served with a curry of fish or meat, along with other curries made with vegetables, lentils, or fruits. Dishes are accompanied by pickled fruits or vegetables, chutneys, and sambols. Among them, 401 (80%) restaurants are Grade A, while 102 (20%) are grade B restaurants.</p>
</div>
              <button type="button" class="btn btn-lg"><a href="FoodCart.php">More</a></button>
				<br>
        </div>
      </div>
          <div class="col-lg-4">
            <div class="card col-md-4 col-lg-12"> <img src="images/2.jpg" alt="Card image cap" width="500" height="281" class="card-img-top rounded-circle">
              <div class="card-body">
                <h5 class="card-title text-center" style="color: darkblue">GUIDES&nbsp;</h5>
                <p class="card-text">Tourist guides provides the visitor with in depth knowledge in their mother tongue, smoothing  and wrinkles that is bound to occur while touring a foreign country for the first time. The National Tourist Guides caters to a large group of tourists traveling in luxury coaches driven by reserved drivers while Chauffeur Tourist Guides would be guiding small groups conveyed in cars.</p>
</div>
              <button type="button" class="btn btn-lg" ><a href="AllGuides.php">More</a></button>
				<br>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-0">
            <div class="card col-md-4 col-lg-12 offset-lg-0"> <img src="images/3.jpg" alt="Card image cap" height="280" class="card-img-top rounded-circle">
              <div class="card-body">
                <h5 class="card-title text-center" style="color: darkblue">LOCATIONS</h5>
                <p class="card-text">Full of romantic landscapes, stirring mountains, lush green tea gardens and golden beaches. From soulful Buddhist monasteries and temples to exotic and impeccable spots rarely explored, Sri Lanka offers everything that makes your escape a memorable one! Whether traveling with your significant other or planning a vacay with your family, Sri Lanka won’t disappoint you!</p>
</div>
              <button type="button" class="btn btn-lg"><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1896263.3539935248!2d80.04083258209516!3d7.863314273071834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1669158529263!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">More</a></button>
				<br>
            </div>
          </div>
	<br>
	<br>
</div>
<br>
<br>
		  
<div id="accordion1" role="tablist"> <br>
  <div class="card">
    <div class="card-header" role="tab" id="headingOne1">
      <h5 class="mb-0"> <a data-toggle="collapse" href="#collapseOne1" role="button" aria-expanded="true" aria-controls="collapseOne1"> Who We Are </a> </h5>
    </div>
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion1">
      <div class="card-body">Your company history should feature the most compelling highlights of your entrepreneurial journey, along with significant achievements, such as patents and major wins. You should include your history in your business plan and employee handbook, and on your website's “about us” page.</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo1">
      <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo1" role="button" aria-expanded="false" aria-controls="collapseTwo1"> Why Us </a> </h5>
    </div>
    <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordion1">
      <div class="card-body">Support and development for artists is central to our strategy, and we have designed a number of initiatives aiming to encourage connections between artists, audiences and communities throughout Clare. Through our programme of cultural/arts events for younger audiences, we work closely with local schools to ignite the imaginations of our children.
glór is a key regional arts centre which offers a broad and diverse performing and visual arts programme of upwards of 500 events attended by over 45,000 people each year</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree1">
      <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree1" role="button" aria-expanded="false" aria-controls="collapseThree1"> Get In Touch </a> </h5>
    </div>
    <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree1" data-parent="#accordion1">
      <div class="card-body">* What you can expect during your visit.
* Face masks required for staff in public areas.
* Hand sanitizer available to guests & staff.
* Daily temperature and symptom checks for staff.
* Socially distanced dining tables.
* Staff required to regularly wash hands.
* Tables disinfected between guests.</div>
    </div>
  </div>
</div>
		  <br>
		  <br>
<footer> </footer>
<div class="row">
  <div class="col-lg-1 offset-lg-0"></div>
  <img src="images/logo.png" alt="" width="70" height="69" class="rounded-circle"/>
  <div class="col-lg-6 offset-lg-0">
    <p>&nbsp;</p>
    <blockquote>
      <blockquote>
        <p class="" style="color: white">Copyright C 2022 All rights reserved</p>
      </blockquote>
    </blockquote>
</div>
</div>
		  <br>
		  <br>
  	  </div>
  	</div>
  	<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>