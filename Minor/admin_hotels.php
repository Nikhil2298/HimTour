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
    <link rel="stylesheet" type="text/css" href="Crest.css">
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
        		<li><a href="admin.php">Admin</a></li>
            	<li><a href="admin_transport.php">Transport Booking</a></li>
            	<li class="active"><a href="#">Hotels Booking</a></li>
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
<center><h2 class="heading"><font face="cooper">Hotel Bookings</font></h2></center>
<br>
<?php include("connection.php");


?>
<center>
<div style="overflow-x:auto;">
<table class="table">
<tr>
<th class="table1">BOOK ID</th>
<th class="table1">CUSTOMER NAME</th>
<th class="table1">EMAIL ID</th>
<th class="table1">MOBILE NO</th>
<th class="table1">HOTEL ID</th>
<th class="table1">LOCATION</th>
<th class="table1">CHECK IN</th>
<th class="table1">CHECK OUT</th>
<th class="table1">ROOM</th>
</tr>
<?php
	$sql ="select * from hotel";
	$query =mysqli_query($link,$sql);
	
	while($result =mysqli_fetch_array($query))
	{
		$book_id =$result['booking_id'];
		$Customer_name =$result['customer_name'];
		$Email_id =$result['Email'];
		$Phone_no =$result['Phone_no'];
		$hotel_id =$result['hotel_id'];
		$location =$result['location'];
		$check_in =$result['check_in'];
		$check_out =$result['check_out'];
		$room =$result['no_of_room'];
		?>
<tr>
<td class="table1"> <?php echo $book_id; ?> </td>
<td class="table1"> <?php echo $Customer_name; ?> </td>
<td class="table1"> <?php echo $Email_id; ?> </td>
<td class="table1"> <?php echo $Phone_no; ?> </td>
<td class="table1"> <?php echo $hotel_id; ?></td>
<td class="table1"> <?php echo $location; ?> </td>
<td class="table1"> <?php echo $check_in; ?> </td>
<td class="table1"> <?php echo $check_out; ?> </td>
<td class="table1"> <?php echo $room; ?> </td>
 <td><a href="delete_hotel_record.php?id=<?php echo $book_id; ?>"><button class="btn-danger">Delete</button></a></td>
</tr>
	<?php } ?>
</table>
</div>
</center>
<br>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
</body>
</html>