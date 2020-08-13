<?php 
	include("connection.php");
	session_start();
	$id= $_SESSION['tourist_id'];
	$sql ="select * from customer where tourist_id ='$id'";
	$query =mysqli_query($link,$sql);

	$result =mysqli_fetch_array($query);
		  	if(isset($_POST['update']))
	{
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone_no'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		$user_id = $_POST['username'];
		$pass = $_POST['Cpassword'];
	
	$sql1 = "update customer set  First_Name='$fname', Last_Name='$lname', Email='$email', Phone_no='$phone', dob='$dob', Address='$address', User_ID='$user_id', Password='$pass' where tourist_id ='$id'";
	//echo $sql; die;
	$update = mysqli_query($link,$sql1);
		if($update>0)
		{
			header('location:user.php');
		}
	else {
		alert("Not Submitted");
	}
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content ="width=device-width, initial-scale=1.0">
<title>edit</title>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/bootstrap.css">
    
  <link href="font\fontawesome-free-5.3.1-web\css\all.css" rel="stylesheet"> <!--load all styles -->
      <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   	<script src="js/bootstrap.min.js"></script>
    
   	<link rel="stylesheet" type="text/css" href="index.css">
    
   	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Lobster|Patua+One|Domine" rel="stylesheet"> 
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }

    if(form.password.value != "" && form.password.value == form.Cpassword.value) {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }

    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }

    return true;
  }

</script>
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
		  <div class="container transparentform">
		  <div class="form">
        		<div id="signup">   
          			<h1><center><b>Sign Up</b></center></h1>
          
         			 <form action="" method="post" name="register" onsubmit="return checkForm(this);">
          
            			<div class="field-wrap">
             			 	<h3 class="lable">First Name</h3>
              			<input type="text" required autocomplete="off" name="first_name" value="<?php echo $result['First_Name']; ?>"/>
           				</div>
        
            			<div class="field-wrap">
              				<h3 class="lable">Last Name</h3>
              			<input type="text"required autocomplete="off" name="last_name" value="<?php echo $result['Last_Name']; ?>"/>
           			 	</div>
          			</div>

          				<div class="field-wrap">
            				<h3 class="lable">Email Address</h3>
             	
            				<input type="email"required autocomplete="off" name="email" value="<?php echo $result['Email']; ?>"/>
          				</div>

		   				<div class="field-wrap">
            				<h3 class="lable">Phone no</h3>
       
            				<input type="tel" required autocomplete="off" name="phone_no" value="<?php echo $result['Phone_no']; ?>"	/>
          				</div>
		   				<div class="field-wrap">
            				<h3 class="lable">Date of Birth</h3>
            
            				<input type="date"required autocomplete="off" name="dob" value="<?php echo $result['dob']; ?>"/>
          				</div>
		   				<div class="field-wrap">
            				<h3 class="lable">Address</h3>
              				
            				<input type="text"required autocomplete="off" name="address" value="<?php echo $result['Address']; ?>"/>
          				</div>
                     	<div class="field-wrap">
            				<h3 class="lable">Username</h3>
             
            					<input type="text"required autocomplete="off" name="username" value="<?php echo $result['User_ID']; ?>"/>
         				 </div>
          				<div class="field-wrap">
            				<h3 class="lable">Set A Password</h3>
            				<input type="password"required autocomplete="off" name="password" value="<?php echo $result['Password']; ?>"/>
         				 </div>
						 <div class="field-wrap">
            				<h3 class="lable">Confirm Password</h3>
			 <input type="password"required autocomplete="off" name="Cpassword" value="<?php echo $result['Password']; ?>"/>
         				 </div>
          <button type="submit" class="button button-block" name="update"/>Save</button>

		<h3><a href="user.php">Back</a></h3>
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