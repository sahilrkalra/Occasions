<?php
// Start the session
session_start();
?>

<?php

if(isset($_POST['login']))
{
  
  
$user = $_POST['username'];
$pass = $_POST['password'];
  
  // connect to mongodb
   $con = new MongoClient();

    //  Select Database
      $db = $con->occasions;
      echo "Database Occasions selected";

//  Select Collection
$collection = $db->users;
echo "Collection Selected succsessfully";

    
  $qry = array("user" => $user,"pass"=>$pass);
      $result = $collection->findOne($qry);

    if($user=='admin' && $result['pass']==$pass)
  {
  session_start();
    $_SESSION['user'] = $result['user'];
    
    ?>
        <!--<script>alert('"Login Sucessfull...!! ');</script> -->
        <?php
    echo "Login Sucessfull !!";
               echo "$user is user";
         header("Location:dashboard.php");
  }
  else
  {
    ?>
        <script>alert('Wrong Details');</script>

        <?php
  }

}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Occasions</title>
      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- Fonts-->
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Noticia+Text|Oleo+Script" rel="stylesheet">
      <!-- Style CSS -->
      <link href="css/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <!-- Navigation -->
      <div id="page-top">
         <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
               <!-- Brand and toggle-->
               <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                <a class="navbar-brand" href="home.php">Occasions</a>
               </div>
               <!-- Collect the nav links and other content for toggling -->
               <div class="collapse navbar-collapse" id="menu">
                  <ul class="nav navbar-nav">
                     <li class="hidden">
                        <a href="#page-top"></a>
                     </li>
                     <li class="page-scroll">
                        <a href="#city">City</a>
                     </li>
                     <li class="page-scroll">
                        <a href="#event-type">Event Type</a>
                     </li>
                     <li class="page-scroll">
                        <a href="#venue-type">Venue Type</a>
                     </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
               <li><a href="list.php"><span class="glyphicon glyphicon-user"></span>List Your Business</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
      </div>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<h1>Log In</h1>
            <hr>
		</div>
		</div>
		<form method="post">
		<div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                              <label for="exampleInputUsername1">Username:</label>
                              <input type="text" class="form-control" id="exampleInputUsername1" name="username" placeholder="Enter your Email address" required="">
                           </div>
			</div>
                        </div>
			
		<div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputContact1">Password:</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your Password" required="">
                           </div>
                        </div>
                     </div>
   <button type="submit" class="btn btn-default" name="login">Submit</button>
   </form>
	</div>
   
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			</div>
		</div>
	</div>
</section>
<footer>
         <div class="container">
            <div class="row" id="link">
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 " id="Frow">
                  <h4>Occasions</h4>
                  <li><a href="about.php" style="color:#BDD8DA;">About Us</a></li>
                  <li><a href="how.php" style="color:#BDD8DA">How it works</a></li>
                  <li><a href="fees.php" style="color:#BDD8DA">Our Fees</a></li>
                  <li><a href="contact.php" style="color:#BDD8DA">Contact Us</a></li>
                  <li><a href="our.php" style="color:#BDD8DA">Our Team</a></li>
                  <li><a href="faq.php" style="color:#BDD8DA">FAQ</a></li>
               </div>
               <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 " id="Frow">
                  <h4>City</h4>
                  <li><a href="#" style="color:#BDD8DA">Pune</a></li>
                  <li><a href="#" style="color:#BDD8DA">Mumbai</a></li>
                  <li><a href="#" style="color:#BDD8DA">Banglore</a></li>
                  <li><a href="#" style="color:#BDD8DA">Chennai</a></li>
               </div>
               <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 " id="Srow">
                  <h4>Event Type</h4>
                  <li><a href="#" style="color:#BDD8DA">Wedding</a></li>
                  <li><a href="#" style="color:#BDD8DA">Birthday Party</a></li>
                  <li><a href="#" style="color:#BDD8DA">Conference</a></li>
                  <li><a href="#" style="color:#BDD8DA">Social Gathering</a></li>
               </div>
               <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 " id="Srow">
                  <h4>Venue Type</h4>
                  <li><a href="#" style="color:#BDD8DA">Banquet Halls</a></li>
                  <li><a href="#" style="color:#BDD8DA">Wedding Lawns</a></li>
                  <li><a href="#" style="color:#BDD8DA">Party Lawns</a></li>
                  <li><a href="#venue-type" style="color:#BDD8DA">More..</a></li>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 "id="Frow">
                  <h4><a href="policies.php" style="color:white">Policies</a></h4>
                  <h4><a href="terms.php" style="color:white">Terms of use</a></h4>
                  <h4><a href="security.php" style="color:white">Security</a></h4>
                  <h4><a href="privacy.php" style="color:white">Privacy</a></h4>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div>
                     <p>
                        <span>&copy;</span> Occasions 2016. All right reserved.
                        </p>
                  </div>
                  <div >
                     <ul class="list-inline ">
                        <li id="social" class="push-right"
                           >Keep in touch</li>
                        <li><a  href="#"><img src="images/facebook-24.png"></a></li>
                        <li><a href="#"><img src="images/instagram-24.png"></a></li>
                        <li><a href="#"><img src="images/twitter-24.png"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <!-- Plugin JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
      <!-- Theme JavaScript -->
      <script src="js/scroll.js"></script>
   </body>
</html>
