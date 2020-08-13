		<?php
			include("connection.php");
			session_start();
			$id = $_SESSION['admin_id'];
			$sql ="select * from admin where admin_id=$id";
			//echo $sql; die;
			$query = mysqli_query($link,$sql);
			
			$result = mysqli_fetch_array($query);

			if(isset($_POST['update']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];

		$user_id = $_POST['user_id'];
		$pass = $_POST['cpassword'];
	
	$sql1 = "update admin set  Name='$name', Email='$email', User_ID='$user_id', Password='$pass' where admin_id ='$id'";
	//echo $sql; die;
	$update = mysqli_query($link,$sql1);
		if($update>0)
		{
			header('location:admin.php');
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
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.user_id.value == "") {
      alert("Error: Username cannot be blank!");
      form.user_id.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.user_id.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.user_id.focus();
      return false;
    }

    if(form.password.value != "" && form.password.value == form.cpassword.value) {
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
        		<li class="active"><a href="#">Admin</a></li>
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
       
          
          <form action="" method="post" name= "update" onsubmit="return checkForm(this);">
          
           <div class="field-wrap">
			<h3 class="lable">Name</h3>
            <input type="text" required autocomplete="off"/ name="name" value="<?php echo $result['Name'];?>">
           </div>
              <div class="field-wrap">
		  <h3 class="lable">Email</h3>
            <input type="text" required  autocomplete="off"/ name="email" value="<?php echo $result['Email'];?>">
          </div>
		  <div class="field-wrap">
			<h3 class="lable">User Id</h3>
            <input type="text" required autocomplete="off"/ name="user_id" value="<?php echo $result['User_ID'];?>">
           </div>
          <div class="field-wrap">
		  <h3 class="lable">Password</h3>
            <input type="password" required  autocomplete="off"/ name="password" value="<?php echo $result['password'];?>">
          </div>
		      <div class="field-wrap">
		  <h3 class="lable">Confirm Password</h3>
            <input type="password" required  autocomplete="off"/ name="cpassword" value="<?php echo $result['password'];?>">
          </div>
          
          
          
           <button type="submit" class="button button-block" name="update">Save</button>
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