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
	a {
		color:blue;
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
        		<li class="active"><a href="#">Tourist</a></li>
            	<li><a href="transport_booking.php">Transport Booking</a></li>
            	<li><a href="hotels.php">Hotels Booking</a></li>
            	<li><a href="view_guide.php">Guide</a></li>			
        		<li><a href="My_bookings.php">My Bookings</a></li>
				
      		</ul>
				<ul class="nav navbar-nav left">
					<li><a href="logout.php">Log out</a></li>
                  <li><a href="#" class="font"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                  <li><a href="#" class="font"><i class="fab fa-instagram fa-2x"></i></a></li>
                </ul>
    	</div>
  </div>
</nav>
	<div class="container">
		<center>
		<?php
			include("connection.php");
			session_start();
			$id = $_SESSION['tourist_id'];
			$sql ="select First_Name,Last_Name,Email,Phone_no,User_ID,Address from customer where tourist_id='$id'";
			//echo $sql; die;
			$query = mysqli_query($link,$sql);
			$count=mysqli_num_rows($query);
			$result = mysqli_fetch_array($query);
			if($count>0)
			{
			
			
		?>
		<h2 class="heading"><font face="cooper">Tourist Profile</font></h2>
			<table class="table">
				<tr>
				<th>Tourist Name :</th>
				<td><?php echo $result['First_Name']." ".$result['Last_Name']; ?></td>
				</tr>
				<tr>
				<th>Email :</th>
				<td><?php echo $result['Email']; ?></td>
				</tr>
				<tr>
				<th>Phone No :</th>
				<td><?php echo $result['Phone_no']; ?></td>
				</tr>
				<tr>
				<th>Address :</th>
				<td><?php echo $result['Address']; ?></td>
				</tr>
				<tr>
				<th>User name:</th>
				<td><?php echo $result['User_ID']; ?></td>
				</tr>
			</table>
			<?php } ?>
		</center>
		
		<a href="edit.php"><button class="btn-primary btn-sm">Edit</button></a>
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