



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content ="width=device-width, initial-scale=1.0">
<title>Hotel</title>
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
	<style>
	#action_box99 {

    background-color: #28824C;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}





.action_box {

    color: #fff;

}
	</style>
	<link rel="stylesheet" type="text/css" href="hotels.css">
</head>
<body>
<nav class="navbar navbar responsive">
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
            	<li><a href="transport_booking.php">Transport Booking</a></li>
            	<li class="active"><a href="#">Hotels Booking</a></li>
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
      				<img src="photos/hotels/crest.jpg" alt="Crest Hotel" width="100%">
    			</div>

    			<div class="item">
      				<img src="photos/hotels/crest2.jpg" alt="Crest" width="100%">
    			</div>

    			<div class="item">
      				<img src="photos/hotels/crest3.jpg" alt="lake" width="100%">
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

<div id="action_box99" data-arrowpos="center" class="action_box ">
	<div class="container">
			<div class="span8">
				<h4 class="text">Want Rooms to Stay?</h4>
			<div class="span4 align-center">
				<a href="#login"><button type="submit" name="submit" class="btn-info" >Book Now</button></a>
			</div>
		</div>
	</div>
</div>

		
		<center><h2 class="heading"><font face="cooper">Search Hotels</font></h2></center>
<center>	<form action="" id="search" method ="post">

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
	<button type="submit" class ="btn-info btn-lg" name ="search">Search</button>
	<br>
	<br>
	</form>
</center>


<center>
<div style="overflow-x:auto;">
<table class="table">
<?php
	  include('connection.php');

		error_reporting(0);
		
	if(isset($_POST['search'])){
		$loc = $_POST['loc'];
		$sql = "select hotel_id,hotel_name,address,area,price_per_day,contact_no from hotel_record where address='$loc'";
		$query=mysqli_query($link,$sql);
		$count=0;
			echo "<tr>

<th>HOTEL ID</th>
<th>HOTEL NAME</th>
<th>LOCATION</th>
<th>AREA</th>
<th>PER DAY PRICE</th>
<th>CONTACT NO</th>
</tr>"; 
		while($result =mysqli_fetch_array($query))
	{
		$hotel_id =$result['hotel_id'];
		$hotel_name =$result['hotel_name'];
		$address =$result['address'];
		$area =$result['area'];
		$price_per_day =$result['price_per_day'];
		$contact_no =$result['contact_no'];
	?>
	<tr>
<td class="table1"> <?php echo $hotel_id; ?> </td>
<td class="table1"> <?php echo $hotel_name; ?> </td>
<td class="table1"> <?php echo $address; ?> </td>
<td class="table1"><?php echo $area ;?></td>

<td class="table1"> <?php echo $price_per_day; ?> </td>
<td class="table1"> <?php echo $contact_no; ?></td>

</tr>
	<?php $count++;} 
	
	if($count<1)
	{
		echo "NO HOTEL Found";
	}
	}
	?>
</table>
</div>
</center>
<!-- Shimla -->
    
    <div class="container screen style1">

         <h2 heading><font face="cooper">SHIMLA</font></h2>

<div class="row">
  <div class="column">
    <div class="content">
      <img src="photos/hotels/hotel falcon crest.jpg" alt="Mountains" style="width:100%">
      <h3>Hotel Falcon Crest</h3>
	  <center><h5>Hotel ID = 501</h5></center>
      <p>Hotel Falcon Crest offers complimentary breakfast and free Wi-Fi to all its guests. There is a banquet hall and a conference room along with business meeting room for small get together. Here you can find ample of parking space for your vehicles, laundry/dry cleaning service, fire safety, first aid and payment through card among many other amenities.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/Marina hotel shimla.jfif" alt="Lights" style="width:100%">
      <h3>Marina Hotel Shimla</h3>
	  <center><h5>Hotel ID = 502</h5></center>
      <p>Hotel Marina is a boutique hotel with the panoramic view of the snow clad mountain ranges in the background. The hotel is close to modes of connectivity such as Shimla Old Railway station, Shimla bus stop and Shimla Airport. Major tourist attractions nearby are Christ Church, Lakkar Bazaar, The Mall, Jakhu Temple, State Museum and Summer Hill.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/radison shimla.jpg" alt="Nature" style="width:100%">
      <h3>Radisson Jass Hotel</h3>
	  <center><h5>Hotel ID = 503</h5></center>
      <p> Nestled among the Himalayas, the Radisson Jass Hotel on Lower Bharari Road, Shimla is the perfect place to enjoy the cold climate and snow of Himachal Pradesh. Many popular tourist attractions are only a few kilometres away including Mall Road, Jakhu Temple, Gaiety Heritage Cultural Complex and Christ Church. The Shimla Airport (SLV) is 26 km away.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/landmark shimla.jfif" alt="Mountains" style="width:100%">
      <h3>Hotel Landmark Shimla</h3>
	  <center><h5>Hotel ID = 504</h5></center>
      <p>Hotel Landmark Shimla is ideally located to maximize your drive in convenience and provide you easy access to most of Shimlas celebrated walks, views and architectural heritage .Being among the magnificent architecture of British era creates grand style of colonial legacy and Overlooking the pretty Annandale meadow in addition to majestic view of great Himalayas.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

	<!-- manali -->
    
      <h2 heading><font face="cooper">MANALI</font></h2>

<div class="row">
  <div class="column">
    <div class="content">
      <img src="photos/hotels/Sun Park Resort manali.jpg" alt="Mountains" style="width:100%">
      <h3>Sun Park Resort</h3>
	  <center><h5>Hotel ID = 201</h5></center>
      <p> With breathtaking scenery, Sun Park Resort Manali has lush green pinewood forests, majestic Himalayan Mountains, and the winding Beas River as a visual feast. The hotel is located less than 5 km from the Kullu Manali Circuit and Hidimba Devi Temple, and only 14 km from Solang Valley Ski. The hotel is 20 km from Naggar Bus Station, and 52 km from Kullu Manali Domestic Airport.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/Solang Valley Resort manali.jpg" alt="Lights" style="width:100%">
      <h3>Solang Valley Resort</h3>
	  <center><h5>Hotel ID = 202</h5></center>
      <p>Soak in views of Himalayan glaciers and enjoy trekking at Solang Valley Resort. Snow-capped mountains and the meandering Beas River await you at the Solang Valley Resort. This hotel is located in the tranquil Solang Valley. Many stunning attractions are nearby, including Rihala Falls, Vashist, and Hadkimbi Temple. The hotel is 306 km from Chandigarh Railway Station.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/Club Mahindra White Meadows Manali.jpg" alt="Nature" style="width:100%">
      <h3>Club Mahindra White Meadows</h3>
	  <center><h5>Hotel ID = 203</h5></center>
      <p>White Meadows Manali, By Mahindra Holidays is 6.7 kms from Manali Bus Depot and 8.2 kms from Hadimba Temple. Situated in the beautiful and pristine location of Prini, this property is one of the finest hotels in Manali that lies in proximity to the famous Hadimba Temple.The hotel offers various restaurants like Green Roof.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/Thomas Villa manali.jpg" alt="Mountains" style="width:100%">
      <h3>Thomas Villa</h3>
	  <center><h5>Hotel ID = 204</h5></center>
      <p>Hotel Thomas Villa is a splendid property located on Kanyal Road in Manali, strategically hidden by the lush green landscapes and the majestic mountains. Guests wake up to the wafting scent of apple from the nearby orchards. Hotel Thomas Villa is known for its traditional Manali hospitality with excellent service. The tourist hot spots are at a reasonable distance from the property.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

	<!-- kullu -->
    
      <h2 heading><font face="cooper">KULLU</font></h2>

<div class="row">
  <div class="column">
    <div class="content">
      <img src="photos/hotels/Himalyan Kothi Kais kullu.jfif" alt="Mountains" style="width:100%">
      <h3>Himalyan Kothi Kais</h3>
	  <center><h5>Hotel ID = 301</h5></center>
      <p>Hotel Himalyan Kothi Kais is situated in beautiful scenic surroundings of Kullu. The property is strategically located in such a way that guests can easily reach up to the hotel via nearest Airport, Railway Station and Bus Stand. Places to visit in Kullu while at the stay at property are Hadimba Temple, Naggar, Manikarn, Solang Valley, Van Vihar, Nashala, Jana Water Fall and much more.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/Shobla Kaathkuni Royale kullu.jpg" alt="Lights" style="width:100%">
      <h3>Shobla Kaathkuni Royale</h3>
	  <center><h5>Hotel ID = 302</h5></center>
      <p>Shobla Royale Kullu Homestay is well-connected to Airport, Railway Station and Bus Stand. The property offers serene location and closeness to local tourist attractions like Tirthan Valley,Prashar Lake, Bijli Mahadev Temple, Great Himalayan National Park and Hot Springs at Manikaran make this property an ideal getaway for holidaymakers.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/Nature's Lap Resort kullu.jfif" alt="Nature" style="width:100%">
      <h3>Nature's Lap Resort</h3>
	  <center><h5>Hotel ID = 303</h5></center>
      <p>Nested in the Himalayas at 2500 mts. above sea level, is blessed with some of the most spectacular and beautiful landscapes. Surrounded by a very thick deodar forest, with almost nil habitation around and a continuous melody of an Ice-fed stream. The rooms of the hotel are spacious airy and well maintained which makes staying here an absolute joy.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/J.J. Resorts kullu.jpg" alt="Mountains" style="width:100%">
      <h3>J.J. Resorts</h3>
	  <center><h5>Hotel ID = 304</h5></center>
      <p>Located just 2km away from the Bhuntar Airport, JJ Resort is a three-star property in Kullu, Himachal Pradesh. This hotel is an ideal stop for those who are arriving by air and heading to other nearby destinations like Naggar Castle, Manikaran Sahib, Manali town, Solang Valley, and Rohtang Pass.  With its great service and professional staff, the property has become the first choice of several travellers coming to this beautiful valley.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- kangra -->
    
      <h2 heading><font face="cooper">KANGRA</font></h2>

<div class="row">
  <div class="column">
    <div class="content">
	
      <img src="photos/hotels/WelcomHeritage kangra.jpg" alt="Mountains" style="width:100%">
      <h3>WelcomHeritage</h3>
	  <center><h5>Hotel ID = 401</h5></center>
      <p>Spread over 12 acres of plantations, WelcomHeritage Judge's Court is a 300-year-old Country Manor situated in Pragpur. It is over 20 km from Jawalaji Bus Stand, 56 km from the Gagal Airport and 65 km from Kangra Mandir Railway Station. The Village Museum of Pragpur is located within the property while the popular Pong Dam is less than 29 km away.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/White Ridge Hotel.jpg" alt="Lights" style="width:100%">
      <h3>White Ridge Hotel</h3>
	  <center><h5>Hotel ID = 402</h5></center>
      <p> A 5-minute walk from Sheela Chowk Bus Stop, White Ridge Hotel is a new 4 star boutique property in Dharamshala. Located in Dari area, the hotel is less than 5 km from Kotwali Bazaar and 10 km from McLeod Ganj and Bhagsunag Falls. Kangra Airport is 12 km from here while Pathankot Railway Station is 85 km away.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/HOTEL DHARAMSHALA PARADISE kangra.jpg" alt="Nature" style="width:100%">
      <h3>HOTEL DHARAMSHALA PARADISE</h3>
	  <center><h5>Hotel ID = 403</h5></center>
      <p>Nested in the Himalayas at 2500 mts. above sea level, is blessed with some of the most spectacular and beautiful landscapes. Surrounded by a very thick deodar forest, with almost nil habitation around and a continuous melody of an Ice-fed stream. The rooms of the hotel are spacious airy and well maintained.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos/hotels/J.J. Resorts kullu.jpg" alt="Mountains" style="width:100%">
      <h3>The Quartz</h3>
	  <center><h5>Hotel ID = 404</h5></center>
      <p> In the lap of Himalayan Mountains, Hotel The Quartz, Dharamshala, provides a relaxing, comfortable and an inviting atmosphere with good service to suit guests budget. The Pathankot Railway Station and Gaggal Airport are the nearest airport and railway station to the property. Close to the nature, with a magnificent view of divine Dhauladhar mountain range, the hotel will give guests all the luxurious comfort.</p>
    </div>
  </div>
<!-- END GRID -->
</div>


<div class="container transparentform">
		  <div class="form">
   
        <div id="login">   
       
          
          <form action="" id="book" method="post">
          <?php

		error_reporting(0);
		session_start();
		$id= $_SESSION['tourist_id'];
			 $sql= "select First_Name,Last_Name,Email,Phone_no from customer where tourist_id=$id";
			 //echo $sql; die;
		$query =mysqli_query($link,$sql);
		$count =mysqli_num_rows($query);
		$result =mysqli_fetch_array($query);
			 if($count>0)
			 {

?>
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
		  <h3 class="lable">Hotel ID</h3>
            <input type="text" required  name="hotel_id" placeholder="Enter Hotel ID" autocomplete="off" value="<?php echo $_GET['id'];?>"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Location</h3>
            <input type="text" required  name="location" placeholder="Enter Hotel Location" autocomplete="off"/>
          </div>
          
           <div class="field-wrap">
		  <h3 class="lable">Check In</h3>
            <input type="date" required  name="check_in" value=""/>
          </div>
          
           <div class="field-wrap">
		  <h3 class="lable">Check Out</h3>
            <input type="date" required  name="check_out" value=""/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Number of Rooms</h3>
            <input type="number" required  name="rooms" value=""/>
          </div>

          <button type="submit" class="button button-block" name="Submit">SUBMIT</button>
		  <p  style="color :white;">We'll contact you for confirmation</p>
         		  <?php
	if(isset($_POST['Submit']))
	{
		$customer_name = $_POST['Customer_name'];
		$Email = $_POST['Email_id'];
		$Phone = $_POST['Phone_no'];
		$hotel_id = $_POST['hotel_id'];
		$location= $_POST['location'];
		$no_of_room = $_POST['rooms'];
		$check_in =$_POST['check_in'];
		$check_out =$_POST['check_out'];
	$sql = "insert into hotel set tourist_id='$id',customer_name='$customer_name',Email ='$Email',Phone_no='$Phone',hotel_id=$hotel_id ,location='$location', check_in='$check_in', check_out='$check_out', No_of_room=$no_of_room";
	//echo $sql; die;
	$query = mysqli_query($link,$sql);
		if($query>0)
		{
		header('location:hotels.php');
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