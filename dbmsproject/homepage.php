<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfnjbBIqMVUJWAZ5HoFH8aNftrSbn2egk &callback=initMap"
  type="text/javascript"></script>
    <style>
    	*{
    		margin: 0;
    		padding: 0;
    		font-family: 'Josefin Sans',sans-serif; 
    	}


    	.carousel-inner img{
    		width: 100%;
    		height: 20%; 
    	}
    </style>

    
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Paraclete</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Web Technology</a>
          <a class="dropdown-item" href="#">Data Science</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Services</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <a href="https://www.google.com/" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</a>
    </form>
    <form class="form-inline my-2 my-lg-0">
      <a href="login.php">
      <a href="login.php" class="btn bg-dark text-white">log out</a>
    </a>
    </form>

  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="shanghai.jpg" alt="Los Angeles" width="500" height="450">
    </div>
    <div class="carousel-item">
      <img src="montains.jpg" alt="Chicago" width="500" height="450">
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" width="500" height="450">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<section>
	<div class="container-fluid">
		<h1 class="text-center text-capitalize pt-5">about us</h1>
		<hr class="w-25 mx-auto pt-5">
	</div>

	<div class="row mb-5">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="channel.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h1>Who Are We?</h1>
			<hr>
			<p>We at Paraclete help the others to find out thier needs and Serve them in many possible we could do. Our Motto is serve for genorsity.Our team Constantly works to serve the person in technology and how they can new things can be developed with the help of ideas that are coming in the market.Currently we have limited resources but we are trying broaden our reach and sooner we will be in e-market with many ideas.</p>
			<button class="btn bg-primary text-white">Wanna Know About Us</button>

		</div>
	</div>


	
</section>

<section>
	

    <div class="container-fluid">
		<h1 class="text-center text-capitalize pt-5">Services</h1>
		<hr class="w-25 mx-auto pt-5">
	</div>
     <div class="row text-center">
		<div class="col-lg-4 col-md-4 col-12">
	        <div class="card" style="width:400px">
              <img class="card-img-top" src="oyo.png" alt="Card image" width="300" height="225">
             <div class="card-body">
               <h4 class="card-title">Hotels</h4>
                 <p class="card-text">Lodging available here</p>
                    <a href="https://www.oyorooms.com/" class="btn btn-primary">Click!!!</a>
            </div>
              </div>
              </div>
		<div class="col-lg-4 col-md-4 col-12">
	        <div class="card">
              <img class="card-img-top" src="uber-logo.jpg" alt="Card image" width="300" height="225">
             <div class="card-body">
               <h4 class="card-title">Travelling</h4>
                 <p class="card-text">Book your cab now!!!</p>
                    <a href="https://www.uber.com/in/en/" class="btn btn-primary">Click!!!</a>
  </div>
</div>
</div>
		<div class="col-lg-4 col-md-4 col-12">
	        <div class="card">
              <img class="card-img-top" src="flipkart.png" alt="Card image" width="300" height="225">
             <div class="card-body">
               <h4 class="card-title">Shopping</h4>
                 <p class="card-text">Buy your stuff here!!!</p>
                    <a href="https://www.flipkart.com/" class="btn btn-primary">Click!!!</a>
  </div>
</div>
</div>
</div>



</section>

<section>
  




  
</section>

<section class="bg-primary">
	<article class="py-5 text-center text-white">
		<div>
			<h3 class="display-4">+91 8434695316</h3>
			<p> Contact for services</p>
			<button class="btn btn-warning">Contact</button>
		</div>
	</article>
</section>

<section>
	<div class="container-fluid">
		<h1 class="text-center text-capitalize pt-5">Developers</h1>
		<hr class="w-25 mx-auto pt-5">
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-2">
			<img src="nitish.jpg" class="img-fluid rounded-circle mx-auto d-block" width="200" height="300">
      <h1><strong>Nitish Kumar</strong></h1>
      <hr>
      <p><strong>Currently pursuing B.Tech in Information Technology from BIT Sindri</strong> </p>
      <p><strong>A aspiring coder and web developer who wants to excel in software field to shows his radiance and capabilities in IT sector
      </strong></p>
      <a href="https://www.linkedin.com/in/nitish-kumar-b2b931197" class="btn bg-primary text-white">Know Him</a>
   </div>
    <div class="col-lg-6 col-md-2">
      <img src="nitish.jpg" class="img-fluid rounded-circle mx-auto d-block" width="200" height="300">
      <h1><strong>Nitish Kumar</strong></h1>
      <hr>
      <p><strong>Currently pursuing B.Tech in Information Technology from BIT Sindri</strong> </p>
      <p><strong>A aspiring coder and web developer who wants to excel in software field to shows his radiance and capabilities in IT sector
      </strong></p>
      <a href="https://www.linkedin.com/in/nitish-kumar-b2b931197" class="btn bg-primary text-white">Know Him</a>
   </div>
    <div class="col-lg-6 col-md-2">
      <img src="nitish.jpg" class="img-fluid rounded-circle mx-auto d-block" width="200" height="300">
      <h1><strong>Nitish Kumar</strong></h1>
      <hr>
      <p><strong>Currently pursuing B.Tech in Information Technology from BIT Sindri</strong> </p>
      <p><strong>A aspiring coder and web developer who wants to excel in software field to shows his radiance and capabilities in IT sector
      </strong></p>
      <a href="https://www.linkedin.com/in/nitish-kumar-b2b931197" class="btn bg-primary text-white">Know Him</a>
   </div>
		<div class="col-lg-6 col-md-2">
      <img src="nitish.jpg" class="img-fluid rounded-circle mx-auto d-block" width="200" height="300">
      <h1><strong>Nitish Kumar</strong></h1>
      <hr>
      <p><strong>Currently pursuing B.Tech in Information Technology from BIT Sindri</strong> </p>
      <p><strong>A aspiring coder and web developer who wants to excel in software field to shows his radiance and capabilities in IT sector
      </strong></p>
      <a href="https://www.linkedin.com/in/nitish-kumar-b2b931197" class="btn bg-primary text-white">Know Him</a>
   </div>
 </div>
	</div>
</section>
<footer>
	<p class="text-center bg-dark text-white">@copyright RoshansProject</p>

</footer>

	</header>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>