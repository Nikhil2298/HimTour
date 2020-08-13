<?php
  include('connection.php');
  session_start();
		error_reporting(0);
		$id= $_SESSION[tourist_id];
			 $sql= "select First_Name,Last_Name,Email,Phone_no from customer where tourist_id=$id";
			 //echo $sql; die;
		$query =mysqli_query($link,$sql);
		$count =mysqli_num_rows($query);
		$result =mysqli_fetch_array($query);
			 if($count>0)
			 {

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content ="width=device-width, initial-scale=1.0">
<title>Transport Booking</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/bootstrap.css">
    
   	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Lobster|Patua+One|Domine" rel="stylesheet"> 
<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/bootstrap.css">
    
  <link href="font\fontawesome-free-5.3.1-web\css\all.css" rel="stylesheet"> <!--load all styles -->
      <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   	<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Crest.css">
   	<link rel="stylesheet" type="text/css" href="index.css">
    
   	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Lobster|Patua+One|Domine" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="transport.css">
		
    <style>
		
.transparentform {
  background:url(photos/formbg.jpeg);
  font-family: 'Titillium Web', sans-serif;
  background-size:cover;
  width: 100%;
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
        		<li><a href="user.php">Tourist</a></li>
            	<li class="active"><a href="#">Transport Booking</a></li>
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




    <div class="container screen style1">

         <h2 heading><font face="cooper">Buses</font></h2>
         <h4 heading><font face=""><b><u>WIth AC Facility</u></b></font></font></h4>

<div class="row">
  <div class="column">
    <div class="content">
     <img src="photos/bus 1.jpg" alt="" style="width:100%">
     <p><font face="algerian" size="+1"><center>
         ID - 101<br> AC  - Yes<br />Seats - 37<br />Rating - 4.5/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/bus 6.png" alt="" style="width:100%">
     <p><font face="algerian" size="+1"><center> 
         ID - 102<br> AC  - Yes<br />Seats - 44<br />Rating - 4.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
   <img src="photos/no 5.png" alt="" style="width:100%">
    <p><font face="algerian" size="+1"><center>
         ID - 103<br> AC  - Yes<br />Seats - 45<br />Rating - 4.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/bus 5.png" alt="" style="width:100%">
      <p><font face="algerian" size="+1"><center> 
         ID - 104<br> AC  - Yes<br />Seats - 40<br />Rating - 4.0/5.0 <center></font></p>
    </div>
  </div>
<!-- END GRID -->
</div>


    
      <h4 heading><font face=""><b><u>Without Ac Facility</u></b></font></h2>

<div class="row">
  <div class="column">
    <div class="content">
    <img src="photos/no 1.jpg" alt="" style="width:100%">
       <p><font face="algerian" size="+1"><center>
         ID - 201<br> AC  - No<br />Seats - 42<br />Rating - 3.5/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/no 2.jpg" alt="" style="width:100%">
      
   <p><font face="algerian" size="+1"><center>
          ID - 202<br>AC  - No<br />Seats - 35<br />Rating - 3.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/no 3.jpg" alt="" style="width:100%">
        <p><font face="algerian" size="+1"><center>
          ID - 203<br>AC  - No<br />Seats - 33<br />Rating - 4.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/no 4.jfif" alt="" style="width:100%">
     <p><font face="algerian" size="+1"><center>
        ID - 204<br>  AC  - No<br />Seats - 35<br />Rating - 3.0/5.0 <center></font></p>
    </div>
  </div>
<!-- END GRID -->
</div>

	<!-- Cars -->
    
      <h2 heading><font face="cooper">Cars</font></h2>
         <h4 heading><font face=""><b><u>WIth AC Facility</u></b></font></font></h4>

<div class="row">
  <div class="column">
    <div class="content">
      <img src="photos/car 0.png" alt="" style="width:100%">
     <p><font face="algerian" size="+1"><center>
         ID - 301<br> AC  - Yes<br />Seats - 2<br />Rating - 4.5/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/ca 1.jpg" alt="" style="width:100%">
     <p><font face="algerian" size="+1"><center>
          ID - 302<br>AC  - Yes<br />Seats - 4<br />Rating - 4.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/ca 2.jpg" alt="" style="width:100%">
    <p><font face="algerian" size="+1"><center>
          ID - 303<br>AC  - Yes<br />Seats - 4<br />Rating - 4.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/ca 3.jpg" alt="" style="width:100%">
      <p><font face="algerian" size="+1"><center>
         ID - 304<br> AC  - Yes<br />Seats - 2<br />Rating - 3.0/5.0 <center></font></p>
    </div>
  </div>
<!-- END GRID -->
</div>

	<!-- Without Ac Facility -->
    
      <h4 heading><font face=""><b><u>Without Ac Facility</u></b></font></h2>

<div class="row">
  <div class="column">
    <div class="content">
      <img src="photos/ca 4.jpg" alt="" style="width:100%">
       <p><font face="algerian" size="+1"><center>
         ID - 401<br> AC  - No<br />Seats - 2<br />Rating - 3.5/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/ca 5.jpg" alt="" style="width:100%">
      
   <p><font face="algerian" size="+1"><center>
         ID - 402<br> AC  - No<br />Seats - 4<br />Rating - 3.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/ca 6.jpg" alt="" style="width:100%">
        <p><font face="algerian" size="+1"><center>
         ID - 403<br> AC  - No<br />Seats - 2<br />Rating - 4.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/ca 7.jpg" alt="" style="width:100%">
     <p><font face="algerian" size="+1"><center>
         ID - 404<br> AC  - No<br />Seats - 2<br />Rating - 3.0/5.0 <center></font></p>
    </div>
  </div>
<!-- END GRID -->
</div>
   
<h2 heading><font face="cooper">Traveller</font></h2>
<div class="row">
  <div class="column">
    <div class="content">
      <img src="photos/t1.png" alt="" style="width:100%">
       <p><font face="algerian" size="+1"><center>
         ID - 501<br> AC  - No<br />Seats - 12<br />Rating - 3.5/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/t2.jpg" alt="" style="width:100%">
      
   <p><font face="algerian" size="+1"><center>
         ID - 502<br> AC  - No<br />Seats - 8<br />Rating - 3.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/t3.jpg" alt="" style="width:100%">
        <p><font face="algerian" size="+1"><center>
         ID - 503<br> AC  - No<br />Seats - 10<br />Rating - 4.0/5.0 <center></font></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/t5.jpg" alt="" style="width:100%">
     <p><font face="algerian" size="+1"><center>
         ID - 504<br> AC  - No<br />Seats - 8<br />Rating - 3.0/5.0 <center></font></p>
    </div>
  </div>
<!-- END GRID -->
</div>



<div class="container transparentform">
		  <div class="form">
   
        <div id="login">   
       
          
          <form action="" method="post">
          
           <div class="field-wrap">
			<h3 class="lable">Customer Name</h3>
            <input type="text" required value="<?php echo $result['First_Name'] ." ".$result['Last_Name'] ; ?>" name="Customer_name"/>
           </div>
          
          <div class="field-wrap">
		  <h3 class="lable">Email</h3>
            <input type="email" required  name="Email_id" value="<?php echo $result['Email'] ; ?>"/>
          </div>
          
           <div class="field-wrap">
		  <h3 class="lable">Phone NO.</h3>
            <input type="tel" required  name="Phone_no" value="<?php echo $result['Phone_no']; }?>"/>
          </div>
          
		  <div class="field-wrap">
		  <h3 class="lable" required>Vehicle</h3>
            <select name="vehicle">
			<option value="car">Car</option>
			<option value="traveller">Traveller</option>
			<option value="bus">Bus</option>
			</select>
          </div>
           <div class="field-wrap">
		  <h3 class="lable">Transport ID</h3>
            <input type="text" required  name="transport_id" placeholder="Enter Transport ID" autocomplete="off"/>
          </div>
          
           <div class="field-wrap">
		  <h3 class="lable">Location</h3>
            <input type="text" required  name="cab_location" autocomplete="off"/>
          </div>
          
           <div class="field-wrap">
		  <h3 class="lable">From Date</h3>
            <input type="date" required  name="from_date" autocomplete="off"/>
          </div>
          
           <div class="field-wrap">
		  <h3 class="lable">To Date</h3>
            <input type="date" required  name="to_date" autocomplete="off"/>
          </div>
          
           <div class="field-wrap">
		  <h3 class="lable">Time</h3>
            <input type="time" required  name="time" autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block" name="Submit">SUBMIT</button>
		  <p  style="color :white;">We'll contact you for confirmation</p>
         		  <?php
	if(isset($_POST['Submit']))
	{
		$customer_name= $_POST['Customer_name'];
		$email =$_POST['Email_id'];
		$phone = $_POST['Phone_no'];
		$veh= $_POST['vehicle'];
		$transport_id = $_POST['transport_id'];
		$location = $_POST['cab_location'];
		$time = $_POST['time'];
		$from_date =$_POST['from_date'];
		$to_date =$_POST['to_date'];
	$sql = "insert into transport set  tourist_id='$id',customer_name='$customer_name',Email='$email',Phone_no='$phone',vehicle='$veh', transport_id=$transport_id , from_date='$from_date', to_date='$to_date', time='$time' , location='$location'";
	//echo $sql; die;
	$query = mysqli_query($link,$sql);
		if($query>0)
		{
		header('location:transport_booking.php');
		}
	else {
		alert("Not Submitted");
	}
	}
		  ?>
		  </form>
		  </div>
		  </div>
		  </div>
		  </div>
		  
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