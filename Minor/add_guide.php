<?php 
	include("connection.php");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email= $_POST['email'];
		$target_dir="uploads/";
		$target_file = $target_dir . basename($_FILES["pic"]["name"]);
		$file_name=$_FILES["pic"]["name"];
		
		$mob= $_POST['phone_no'];
		$age= $_POST['age'];
		$language =$_POST['languages'];
		$location = $_POST['location'];
		$sql = "insert into guide set Guide_name='$name',Email='$email',image='$file_name',mobile_no='$mob',age='$age', language='$language',location='$location'";
		$query = mysqli_query($link,$sql);
		if($query>0){
				header('location:add_guide.php');
		}
	}
	
	
	?>
	
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
        		<li class="active"><a href="admin.php">Admin</a></li>
            	<li><a href="admin_transport.php">Transport Booking</a></li>
            	<li><a href="admin_hotels.php">Hotels Booking</a></li>
            	<li><a href="admin_customer.php">Customer</a></li>			
				<li><a href="guide.php">Guide</a></li>
				<li><a href="view_hotels.php">Hotels</a></li>
      		</ul>
				<ul class="nav navbar-nav left">
					<li><a href="logout.php">Log out</a></li>
                  <li><a href="#" class="font"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                  <li><a href="#" class="font"><i class="fab fa-instagram fa-2x"></i></a></li>
                </ul>
    	</div>
  </div>
</nav>
	 <div class="container transparentform">
  <div class="form">
    
        
        <div id="login">   
       
          
          <form action="" method="post" name= "update" enctype ="multipart/form-data">
          
           <div class="field-wrap">
			<h3 class="lable">Guide Name</h3>
            <input type="text" required autocomplete="off"/ name="name" placeholder="Enter Guide Name">
           </div>
		    <div class="field-wrap">
		  <h3 class="lable">Profile Image</h3>
            <input type="file"   name="pic" >
          </div>
              <div class="field-wrap">
		  <h3 class="lable">Email</h3>
            <input type="text"  autocomplete="off"/ name="email" placeholder="Enter Email">
          </div>
		  <div class="field-wrap">
			<h3 class="lable">Mobile No</h3>
            <input type="text" required autocomplete="off"/ name="phone_no" placeholder="Enter Guide Mobile No">
           </div>
          <div class="field-wrap">
		  <h3 class="lable">Age</h3>
            <input type="number" required  autocomplete="off"/ name="age" >
          </div>
		      <div class="field-wrap">
		  <h3 class="lable">Languages Known</h3>
            <input type="text" required  autocomplete="off"/ name="languages" placeholder="Enter Languages Known">
          </div>
          
          <div class="field-wrap">
		  <h3 class="lable">Current Location</h3>
            	<select name="location">
	<option>Shimla</option>
	<option>Kangra</option>
	<option>Chamba</option>
	<option>Kullu</option>
	<option>Manali</option>
	<option>Mandi</option>
	<option>Sirmaur</option>
	<option>Hamirpur</option>
	<option>Una</option>
	<option>Solan</option>
	<option>Kinnaur</option>
	<option>Bilaspur</option>
	<option>Lahau and Spiti</option>
	</select>
          </div>
          
           <button type="submit" class="button button-block" name="submit">ADD Guide</button>

		  <h3><a href="admin.php">Back</a></h3>
          
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