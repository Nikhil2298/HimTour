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
    
   	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Lobster|Patua+One|Domine" rel="stylesheet"> 

	<style>
	.msg {
		color:red;
	}
	</style>
	
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
        		<li><a href="index.php">Home</a></li>
        		<li class="dropdown ">
          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
          			<ul class="dropdown-menu ">
            			<li><a href="#">Transportation Booking</a></li>
            			<li><a href="#">Hotels Booking</a></li>
            			<li><a href="#">Guide</a></li>			
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
					
                  <li><a href="#" class="font"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                  <li><a href="#" class="font"><i class="fab fa-instagram fa-2x"></i></a></li>
                </ul>
    	</div>
  </div>
</nav>

      <div class="container transparentform">
		  <div class="form">
   
        <div id="login">   
       
          
          <form action="" method="post">
          
           <div class="field-wrap">
			<h3 class="lable">Username</h3>
            <input type="text" required placeholder="Enter Touriest Id" autocomplete="off" name="username"/>
           </div>
          
          <div class="field-wrap">
		  <h3 class="lable">Password</h3>
            <input type="password" required placeholder="Enter Password" autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
         <?php
		 include("connection.php");
		session_start();
		error_reporting(0);
		if(isset($_POST['Login']))		 
		{
			 $user_id=$_POST['username'];
			 $pass=$_POST['password'];
			 $sql= "select tourist_id from customer where User_ID='$user_id' and Password='$pass'";
			 //echo $sql; die;
		$query =mysqli_query($link,$sql);
		$count =mysqli_num_rows($query);
		$result =mysqli_fetch_array($query);
			 if($count>0)
			 {
				 $_SESSION[tourist_id]=$result['tourist_id'];
				 header('location:user.php');
			 }
			 else {
				 echo "<div class='msg'><h4>Invalid Username/Password</h4></div>";
			 }
		 }
		 ?>
          <button type="submit" class="button button-block" name="Login">Log In</button>
		  
		  <a href="signup.php">New Tourist</a><br>
		  <a href="admin_login.php">Admin Login</a>
          
          </form>

        </div>
        
      </div>
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