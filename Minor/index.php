<!doctype html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content ="width=device-width, initial-scale=1.0">
<title>HimTour</title>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/bootstrap.css">
    
  <link href="font\fontawesome-free-5.3.1-web\css\all.css" rel="stylesheet"> <!--load all styles -->
      <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   	<script src="js/bootstrap.min.js"></script>
    
   	<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="admin.css">
   	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Lobster|Patua+One|Domine" rel="stylesheet"> 
</head>
<body>
<nav class="navbar navbar">
  <div class="container-fluid header">
  	<marquee style = "background-color:#d5fbf9;"><img src="photos/logo2.png" alt="Government Polytechinc Hamirpur"></marquee>
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="dark-blue-text"><i class="fa fa-bars fa-1x"></i></span>             
      		</button>
      		<a class="navbar-brand" href="#"><h2 class="logo"><font face="cooper">HimTour</font></h2></a>
    	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
      		<ul class="nav navbar-nav">
        		<li class="active"><a href="#">Home</a></li>
        		<li class="dropdown ">
          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
          			<ul class="dropdown-menu ">
            			<li><a href="login.php">Transportation Booking</a></li>
            			<li><a href="login.php">Hotels Booking</a></li>
            			<li><a href="login.php">Guide</a></li>			
          			</ul>
        		</li>
        		<li><a href="gallery.php">Gallery</a></li>
        		<li class="dropdown ">
          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Himachal<span class="caret"></span></a>
          			<ul class="dropdown-menu ">
            			<li><a href="History.php">History</a></li>
            			<li><a href="Topography.php">Topography</a></li>
            			<li><a href="culture.php">Culture</a></li>			
          			</ul>
        		</li>
				
				<li><a href="about.php">About</a></li>
      		</ul>
				<ul class="nav navbar-nav left">
					<li><a href="login.php">Log in</a></li>
                  <li><a href="#" class="font"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                  <li><a href="#" class="font"><i class="fab fa-instagram fa-2x"></i></a></li>
                </ul>
    	</div>
  </div>
</nav>
<div class="container slider">
	<div class="col-md-12 banner">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  			<ol class="carousel-indicators">
    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    			<li data-target="#myCarousel" data-slide-to="1"></li>
    			<li data-target="#myCarousel" data-slide-to="2"></li>
  			</ol>


  			<div class="carousel-inner">
    			<div class="item active">
      				<img src="photos//himalaya1.jpg" alt="himalaya " width="100%">
    			</div>

    			<div class="item">
      				<img src="photos//classic.jpg" alt="mountains" width="100%">
    			</div>

    			<div class="item">
      				<img src="photos//boat.jpg" alt="lake" width="100%">
    			</div>
  			</div>


  			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="right carousel-control" href="#myCarousel" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	</div>
</div>
<center><a href="signup.php"><button class="button1"><span>SIGN UP</span></button></a></center>
	<!-- DESTINATIONS -->
    
    
	<div class="container screen style1">
    	<h2 class="heading"><font face="cooper">DESTINATIONS</font></h2>
        <center>
		<div class="col-md-4 col-sm-12">
        
			<img class="img-thumbnail img-responsive" src="photos/karsog-valley.jpg" width="100%">
            <h3>Mandi</h3>
          </div>
		<div class="col-md-4 col-sm-12">
  			<img src="photos/Snow1.jpg" width="100%" class="img-thumbnail img-responsive">
            <h3>Shimla</h3>
  
		</div>
        <div class="col-md-4 col-sm-12">
  			<img src="photos/sanjauli1.jpg" width="100%" class="img-thumbnail img-responsive">
            <h3>Sanjauli</h3>
		</div>
        </center>
      </div>
		<div class="container screen style2">
        <center>
		<div class="col-md-4 col-sm-12">
                			<img class="img-thumbnail img-responsive" src="photos/kangra.jpeg" width="100%">
                    <h3>Kangra</h3>
                 </div>
		<div class="col-md-4 col-sm-12">
        			<img src="photos/Solan.jpg" width="100%" class="img-thumbnail img-responsive">
            <h3>Solan</h3>
        </div>
        <div class="col-md-4 col-sm-12">
        			<img src="photos/khajjiar_1.jpg" width="100%" class="img-thumbnail img-responsive">
            <h3>Khajjiar</h3>
       </div>
        </center>
      </div>


	<!-- HOTLES -->
    
    
	<div class="container screen style1">

    			<h2 class="heading"><font face="cooper">HOTLES</font></h2>

        <center>
		<div class="col-md-4 col-sm-12">
        
			<img class="img-rounded img-responsive" src="photos/manali hotel.jpeg" width="100%">
            <h3>Hotel Golden Tulip, Manali</h3>
          
         </div>
		<div class="col-md-4 col-sm-12">
        
			<img src="photos/the terrancs chamba.jpg" width="100%" class="img-rounded img-responsive">
            <h3>The Terrancs Chamba</h3>
            
		</div>
        <div class="col-md-4 col-sm-12">
        
			<img src="photos/hotel dharmshala.jpg" width="100%" class="img-rounded img-responsive">
            <h3>Hotel Dharmshala Kangra</h3>
            
		</div>
        </center>
       	</div>
        <div class="container screen style2">
        <center>
		<div class="col-md-4 col-sm-12">
        
        			<img class="img-rounded img-responsive" src="photos/highland village hotel.jpg" width="100%">
                    <h3>Highland Village Mcleodganj</h3>
                 
         </div>
		<div class="col-md-4 col-sm-12">
       
			<img src="photos/hotel peterhoff.jpg" width="100%" class="img-rounded img-responsive">
            <h3>Hotel Peterhoff Shimla</h3>
            
		</div>
        <div class="col-md-4 col-sm-12">

			<img src="photos/hotel mandi.jpg" width="100%" class="img-rounded img-responsive">
            <h3>Hotel mandi</h3>
            
		</div>
        </center>
      </div>
   
		<!-- TRANSPORTATION -->
        
		<div class="container screen style1">
    	<h2 class="heading"><font face="cooper">TRANSPORT</font></h2>
        <center>
		<div class="col-md-4 col-sm-12">
        
			<img class="img img-responsive" src="photos/bus 6.png" width="100%">

         
         </div>
		<div class="col-md-4 col-sm-12">
        
			<img src="photos/bus 5.png" width="100%" class="img img-responsive">
        
           
            <h3>Buses</h3>
		</div>
        
        <div class="col-md-4 col-sm-12">
       
			<img src="photos/traveler.png" width="100%" class="img img-responsive">
        
            
		</div>

        
        </center>
      </div>
		<div class="container screen style2">
        <center>
		<div class="col-md-4 col-sm-12">
      
        			<img class="img img-responsive" src="photos/thar.png" width="100%">
                    
         </div>
		<div class="col-md-4 col-sm-12">
        
			<img src="photos/toyota-fortuner.png" width="100%" class="img img-responsive">

           
		</div>
        <div class="col-md-4 col-sm-12">
        
			<img src="photos/car 0.png" width="100%" class="img img-responsive">

           
		</div>
        <h3>CARS</h3>
        </center>
      </div>
	
    	<!-- GUIDES -->

		<div class="container screen style3">
    	<h2 class="heading"><font face="cooper">GUIDES</font></h2>
        <center>
		<div class="col-md-3 col-sm-12">
        
			<img class="img-circle" src="photos/user-avatar-default.png" width="100%">
		<h3>Rohit</h3>
          
         </div>
		<div class="col-md-3 col-sm-12">
        
			<img src="photos/UserImage.jpg" width="100%" class="img-circle">
        <h3>Sumit</h3>
            
		</div>
        <div class="col-md-3 col-sm-12">
       
			<img src="photos/index.png" width="100%" class="img-circle">
        <h3>Arjun</h3>
           
		</div>
         <div class="col-md-3 col-sm-12">
     		<img src="photos/index.png" width="100%" class="img-circle">
        <h3>Gaurav</h3>
            
		</div>
        </center>
      </div>

        

		<!-- Map -->
		<div class="container style3">
			<h2 class="heading"><font face="cooper">View Map</font></h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3472279.549286713!2d75.05168106520073!3d31.800529756338427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390453c367f901f7%3A0x7cfe04c5564b7725!2sHimachal+Pradesh!5e0!3m2!1sen!2sin!4v1539520372962" width="100%" height="500px" allowfullscreen></iframe>
		</div>

		<!-- feedback-->
		<footer class="navbar foot">
<div class="container">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Hamirpur, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9557799742</p>
      <p><span class="glyphicon glyphicon-envelope"></span> himtour@gmail.com</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-info pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>
</footer>
</body>
</html>