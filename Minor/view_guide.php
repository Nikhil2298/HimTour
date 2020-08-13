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
        		<li><a href="#">Tourist</a></li>
            	<li><a href="transport_booking.php">Transport Booking</a></li>
            	<li><a href="hotels.php">Hotels Booking</a></li>
            	<li class="active"><a href="#">Guide</a></li>			
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
<center><h2 class="heading"><font face="cooper">Guide</font></h2></center>
<center>	<form action="" method ="post">

<br>
	<h3>Select Location</h3>
	<select name="loc">
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
	<br>
	<br>
	<button class ="btn-info btn-lg" name ="search">Search</button>
	<br>
	<br>
	</form>
</center>
<center>
<div style="overflow-x:auto;">
<table class="table">
<?php
	include("connection.php");
	if(isset($_POST['search'])){
		$loc = $_POST['loc'];
		$sql = "select Guide_name,Email,mobile_no,age,language,image from guide where location='$loc'";
		$query=mysqli_query($link,$sql);
		$count=0;
			echo "<tr>

<th>GUIDE NAME</th>
<th>EMAIL ID</th>
<th>MOBILE NO</th>
<th>IMAGE</th>
<th>AGE</th>
<th>LANGUAGES</th>
</tr>";
		while($result =mysqli_fetch_array($query))
	{
		$Guide_name =$result['Guide_name'];
		$Email_id =$result['Email'];
		$Phone_no =$result['mobile_no'];
		$age =$result['age'];
		$language =$result['language'];
 ?>
	<tr>
<td> <?php echo $Guide_name; ?> </td>
<td> <?php echo $Email_id; ?> </td>
<td> <?php echo $Phone_no; ?> </td>
<td><img src="uploads/<?php echo $result['image'];?>" height="200px" width="200px"></td>
<td> <?php echo $age; ?></td>
<td> <?php echo $language; ?> </td>
</tr>
	<?php $count++;} 
	
	if($count<1)
	{
		echo "NO Guide Found";
	}
	}
	?>
</table>	
</div>
</center>

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