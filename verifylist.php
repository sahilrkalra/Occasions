<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location: lg.php");
}
?>

<?php
if(isset($_POST['logout']))

 {
    session_destroy();
    echo '<script>alert("Logged Out successfully !!");</script>';
    header("Location:lg.php");
  }

?>

<?php
if(isset($_POST['approve']))
{
  $conn = new MongoClient();            //Connect To MongoDB
        if($conn){

            $database=$conn->occasions;         //Connecting to database        
  
            $collection=$database->venue;       //Connect to question_bank collection

            $result=$collection->findOne(['_id'=>new MongoID($_POST['vid'])]);


            $result['status']='Approved';

  $collection->save($result);
  
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
    <link href="css/style.css" rel="stylesheet">

   
</head>

<body>
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
                

    
                <ul class="nav navbar-nav navbar-right">
                    
                    
          <form method="post"><li style="margin-top: 15px"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span></span>Logout</a></li></form>
          </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
        </nav>
    </div>
	
	<section id="addvenue">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="ver-nav">
				<div >
					<button type="button" class="navbar-toggle2" data-toggle="collapse" data-target="#2menu">
						<span class="sr-only">Toggle navigation</span> Links <i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="fmenu">

				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation"><a href="addvenue.php">Add a New Venue</a></li>
				  <li role="presentation"><a href="updatelist.php">Update a List</a></li>
				<!--  <li role="presentation"><a href="queries.php">Contact-Us Details</a></li>
                  <li role="presentation"><a href="">Get Qoute</a></li>-->

				  <li role="presentation" class="active"><a href="verifylist.php">Verify Listings</a></li>
				  <li role="presentation"><a href="profile.php">Profile Settings</a></li>
				</ul>
				</div>
			</div>
			<div class="container con" id="content">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<h3>Listing Requests</h3>
					<hr>
          <div class="table-responsive">
 <?php
    
    $conn = new MongoClient();            //Connect To MongoDB
        if($conn){

            $database=$conn->occasions;         //Connecting to database        
  
            $collection=$database->venue;       //Connect to question_bank collection

            $result=$collection->find();

foreach ($result as $query) {
    if($query["status"]==Unapproved)
    {
$id=$query['_id'];
echo "<table class='table table-hover'><tr><th>Venue Name</th><th>Owner's Name</th><th>Email</th><th>Contact No</th><th>City</th><th>Event Type</th><th>City</th><th>Venue Type</th><th>Locality</th><th>Capacity</th><th>Cost</th></tr>";
echo '<tr><th>'.$query["venuename"].'</th><th>'.$query["name"].'</th><th>'.$query["email"].'</th><th>'.$query["contact"].'</th><th>'.$query["city"].'</th><th>'.$query["eventtype"].'</th><th>'.$query["venuetype"].'</th><th>'.$query["eventtype"].'</th><th>'.$query["locality"].'</th><th>'.$query["capacity"].'</th><th>'.$query["cost"].'</th></tr>';
//echo'<br>';
//echo'<tr><th><button type="submit" class="btn btn-primary" name="update">Update</button></tr></th>';
echo"</table>";
echo'<form method="post"><input type="hidden" value="'.$id.'" name="vid"><button type="submit" class="btn btn-primary" name="approve">Approve</button></form>';
//echo'<br>';
}
}
}
?>
</div>
  
                     </div>
				</div>
			</div>
		</div>
	</div>
	</section>

<footer style="margin-top:24%">
        <div class="container">
    
        <div class="row" id="link">
                <div class="row">
                    <div>
                        <p>
                        <span>&copy;</span> Occasions 2016. All right reserved.
                       </p> 
                    </div>
                    <div >
                       <ul class="list-inline ">
                        <li id="social" class="push-right">Keep in touch</li>
                        <li><a  href="#"><img src="images/facebook-24.png"></a></li>    
                        <li><a href="#"><img src="images/instagram-24.png"></a></li>
                        <li><a href="#"><img src="images/twitter-24.png"></a></li>
                        </ul>
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