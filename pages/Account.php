<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Light Company>account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta id="my"  http-equiv="refresh">
	<link href="../assets/bootstrap.min.css" rel="stylesheet" type="text/css" >
	
	<script type="text/javascript" src="../assets/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/font/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/stylesheet.css">
	
<style type="text/css">
  

  #top-root {
    
  background-image: url("../images/top-bg-cut.jpg");
  background-position: top;
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: scroll;

  }


  #bottom-root {
    
  background-image: url("../images/top.jpg");
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: fixed;
  }

  #link {
    opacity: 0.8;
  }

  #link:hover{
    opacity: 1;
  }


  i:hover {
    opacity: 0.7;
  }

</style>  
</head>
<!--home page-->
<body>

	<!--The first page-->
	<div id="top-root" class="container-fluid  p-0"  ">

		<!--navbar-->
		<nav class="navbar navbar-expand-sm navbar-light bg-light">
  			<div class="container-fluid">
    			<a class="navbar-brand"  href="../index.php">LIGHT</a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      				<span class="navbar-toggler-icon"></span>
   			 	</button>
    			<div class="collapse navbar-collapse" id="mynavbar">
      				<ul class="navbar-nav me-auto">
        				<li class="nav-item">
          					<a class="nav-link active" href="About Us.php">Support</a>
        				</li>
        				<li class="nav-item">
          					<a class="nav-link" href="PCs.php">Products</a>
        				</li>
        				<li class="nav-item">
          					<a class="nav-link" href="../index.php">Home</a>
        				</li>
      				</ul>
      				<form class="d-flex">
        				<input class="form-control me-2" type="text" placeholder="Search">
        				<button class="btn btn-primary" type="button">Search</button>
      				</form>
    			</div>
  			</div>
		</nav>

    <div class="container-fluid">


      <div style="float: right;padding: 1% 1%">
        <a href="Account.php" style="float: right;"><i id="user" class="fa fa-user-o " style="font-size:200%;color:black; float: right;opacity: 0.7"></i></a>  
      </div>
      <div   style="float: right; padding: 1% 1%">
        <a id="test" href="Cart.php" style="float: right; margin: 3% 3%;"><i id="cart" class="fa fa-shopping-cart" style="font-size:200%;color:black; float: right;"></i></a>
      </div>

      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a id="link"  class="nav-link text-dark" href="About Us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark" href="Contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark "  href="Terms of Service.php">Terms of Service</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark " href="Privacy Policy.php">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a id="link" class="nav-link text-dark " href="FAQs.php">FAQs</a>
        </li>
      </ul>


      <div class="container-fluid p-3">
        <h1  class="text-dark ms-5" ;">My Account</h1>
        

        
      </div>
    </div>
    
    
	</div>


	<!--second page-->
	
	<div id="bottom-root" class="container-fluid shadow p-0">

	
		
      		 <!--Contuctt us-->
      	<div class="container-fluid shadow bg-white pt-5 pb-5 " >
          <div id="alert" style="display: none;" class='alert alert-success alert-dismissible fade show' >
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Success!</strong> Your account created successfull!
          </div>
      		<div class="row ps-4 pe-4 ">
      			<div class="ps-5 pe-5 mt-4 col-sm-6">
      				<h2 class="text-dark">Returning Customer</h2>
      				<p class="text-secondary">I am a returning customer </p>

      				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">	
  						<div class="mb-3">
   							<label for="email" class="form-label h6">Email:</label>
    						<input type="email" class="form-control p-2" id="email" placeholder="Enter email" name="pswd" required>
  						</div>

              <div class="mb-3">
                <label for="pswd" class="form-label h6">Password:</label>
                <input type="password" class="form-control p-2" id="pswd" placeholder="Enter password" name="pswd" required>
              </div>
  						
  						
  						<button type="submit" class="btn btn-outline-primary ps-3 pe-3 pt-1 pb-1">Login</button>
              
					   </form>

             <p class="mt-4"> <a style="color: gray;text-decoration: none;" href="">Forgot Your Password?</a></p>


      				
      			</div>
      			<div class=" p-4 mt-4 col-sm-6 " style="background-color: rgb(244,244,244);">
      				<h2 class="text-dark">New Customer </h2>
              <p class="text-secondary p-2">
                Register Account 
              </p>
      				<p class="text-secondary p-2">
      					By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made. 
      				</p>

              
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
              <div class="mb-3 mt-3">
                <label for="name" class="form-label h6 ">Name:</label><span id="nameErr" class="text-danger"> * </span>
                <input type="text" class="form-control p-2 " id="name" placeholder="Enter name" name="name" required>

              </div>
              <div class="mb-3">
                <label for="Lastname" class="form-label h6">Last Name</label><span id="lastnameErr" class="text-danger"> </span>
                <input type="text" class="form-control p-2 " id="Lastname" placeholder="Enter Last Name" name="Lastname">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label h6">Email:</label><span id="emailErrCr" class="text-danger"> * </span>
                <input type="email" class="form-control p-2" id="email" placeholder="Enter email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="pswdcreate" class="form-label h6">Password:</label><span id="passwordErrCr" class="text-danger"> * </span>
                <input type="password" class="form-control p-2" id="pswdcreate" placeholder="Enter password" name="pswd" required>
              </div>
              <button id="create" type="submit" class="btn btn-outline-primary ps-3 pe-3 pt-1 pb-1" onclick="">Create an Account</button>
              
             </form>

      			</div>
      		</div>
        	
        	
    	</div>


           


		<!--Sighn up page-->
		<div class="container-fluid" style="padding: 8% 0%; ">
			<h1 class=" h1 text-dark" style="padding:1% auto;text-align: center; ">
				Newsletter Sighnup
			</h1>
			
			<h5 class="text-dark" style="padding:1% 0%;text-align: center">
				Sign Up for exclusive updates, new arrivals & insider-only discounts 
			</h5>
			
			<div class="row" style="width: 100%;">
    			<div class="col" ></div>
				<div class="col-10 col-sm-8 col-lg-6">
       				<form action="Account.php" method="post">
    					<div class="input-group">     
      						<input type="email" class="form-control" style="text-align: center;" placeholder="Enter your email" name="usrname" required>
      						<span style="margin-left: 2%"><button type="submit" class="btn btn-primary"> Submit</button></span>
    					</div>
  					</form>
    			</div>
    			<div class="col" ></div>  
  			</div>

			<div class="row text-dark" style="padding:2% 0%; font-size: 200%;margin: auto; width: 25%">
				<div class="col">
					<a href=""><i class="fa fa-facebook text-dark"></i></a>
				</div>
				<div class="col">
					<a href=""><i class="fa fa-instagram text-dark"></i></a>
				</div>
				<div class="col">
					<a href=""><i class="fa fa-twitter text-dark"></i></a>
				</div>
				<div class="col">
					<a href=""><i class="fa fa-pinterest text-dark"></i></a>
				</div>
				<div class="col">
					<a href=""><i class="fa fa-snapchat text-dark"></i></a>
				</div>
			</div>
			
		</div>
		<!--The Footer-->
		<div class="container-fluid bg-light" style="padding: 4% 20%">
			<div class="row">
				<div class="col">
					<p><a class="text-secondary" style="text-decoration: none;" href="">LIGHT Official Store</a></p>
				</div>
				<div class="col">
					<p><a class="text-secondary" style="text-decoration: none;" href="">Return and Exchanges</a></p>
				</div>
				<div class="col">
					<p><a class="text-secondary" style="text-decoration: none;" href="">Terms of Services</a></p>
				</div>
				<div class="col">
					<p><a class="text-secondary" style="text-decoration: none;" href="">FAQs</a></p>
				</div>	
			</div>
			<p class="text-secondary" style="padding:1% 35%">&copy LIGHT. All Rights Reserved</p>
		</div>
		
	</div>


  <?php
  include 'accountClasses.php';
  $_SESSION["account"]="";
  new CreateAccount();
  if ($_SESSION["account"]=="your acount was created successfull."){
     $checkInput=new FormValidation();
     $email = $checkInput->test_input($_POST["email"]);
     $password = $checkInput->test_input($_POST["pswd"]);
  ?>

    <!-- The Modal -->
    <div class="modal-mat" id="myModal">
      <div class="modal-dialog-mat rounded">
        <div class="modal-content-mat rounded">

        <!-- Modal Header -->
          <div class="modal-header-mat">
            <h6 class="modal-title-mat">Your account created successfully!</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal-mat"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body-mat p-4 ">  
            <form action="">  
              <div class="mb-3">
                <label for="email" class="form-label h6">Email:</label>
                <input type="email" class="form-control p-2" id="email" placeholder="Enter email" name="pswd" value="<?php echo($email);?>"  required>
              </div>

              <div class="mb-3">
                <label for="pswd" class="form-label h6">Password:</label>
                <input type="password" class="form-control p-2" id="pswd" placeholder="Enter password" name="pswd" value="<? echo($password);?>" required>
              </div>               
                <button type="submit" class="btn btn-primary ps-3 pe-3 pt-1 pb-1" style="float: right;">Login</button>   
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("btn-close")[1];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
      modal.style.display = "none";
      }
    }
    </script>

  <?php
  }
  ?>

  <script type="text/javascript">
    function displayInputError(){
    </script>
    <?php
    if ($_SESSION["account"]=="Invalid input"){
      $checkInput=new FormValidation();
      if ($checkInput->checkName()=="Name is required"){
      ?>    
      <script type="text/javascript">
        document.getElementById("nameErr").innerHTML="  Name is required.";
      </script>
      <?php
    }elseif ($checkInput->checkName()=="Only letters and white space allowed") {?>
      <script type="text/javascript">
        document.getElementById("nameErr").innerHTML="  Only letters and white space allowed.";
      </script>
    <?php
    }
    
    }

    $checkInput=new FormValidation();

     if ($checkInput->checkLastname()=="Only letters and white space allowed"){
      ?>    
      <script type="text/javascript">
        document.getElementById("lastnameErr").innerHTML="   Only letters and white space allowed";
      </script>
     
    <?php
    }

    if ($checkInput->checkEmail()=="Email is required"){
      ?>    
      <script type="text/javascript">

        document.getElementById("emailErrCr").innerHTML=" Email is required";
      </script>
      <?php
    }elseif ($checkInput->checkEmail()=="Invalid email format") {?>
      <script type="text/javascript">
        document.getElementById("emailErrCr").innerHTML="   Invalid email format.";
      </script>
    <?php
    }
    
    if ($checkInput->checkPasword()=="Password is required"){
      ?>    
      <script type="text/javascript">
        document.getElementById("passwordErrCr").innerHTML="  Password is required.";
      </script>
      <?php
    }elseif ($checkInput->checkPasword()=="Password at least 6 characters") {?>
      <script type="text/javascript">
        document.getElementById("passwordErrCr").innerHTML="  Password at least 6 characters.";
      </script>
    <?php
    }
    
    ?>







  <script>
    }
  </script>


  <?php
  function hi(){
  	echo "hi";
  }
?>
	

</body>
</html>
