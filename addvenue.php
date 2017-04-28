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

	
	<!--FS
	$path=$_POST['datafile'];
	echo $path;
	
	$metadata = array("date" => new MongoDate()); 
	$grid = $db->getGridFS();
	$storedfile=$grid->storeFile($path, array("metadata" => $metadata));
    echo "file has been stored";

	$image = "default_profile.png";
    if(!file_exists('' . $_FILES['image']['name'])){
          
    if(move_uploaded_file($_FILES['image']['tmp_name'], 'Uploads/'. $_FILES['image']['name'])){
                $image = $_FILES['image']['name'];
               echo"<script>alert('Error');</script>"; 
              }
              else
              {
              	echo"<script>alert('Error');</script>";
              }
          }-->


<?php
if(isset($_POST['submit']))
{                         
   
    $venuename = $_POST['venuename'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $eventtype = $_POST['eventtype'];
    $venuetype = $_POST['venuetype'];
    $locality = $_POST['locality'];
    $capacity = $_POST['capacity'];
    $cost = $_POST['cost'];
    $status = 'approved';

   $con = new MongoClient();
  if($con)
  {
 
    //connecting to database
    $databse=$con->occasions;

    //connect to specific collection
    $collection=$databse->venue;
 
    $list_data=array('venuename'=>$venuename,'name'=>$name,'email'=>$email,'contact'=>$contact,'city'=>$city,'eventtype'=>$eventtype,'venuetype'=>$venuetype,'locality'=>$locality,'capacity'=>$capacity,'cost'=>$cost,'status'=>$status);
    $collection->save($list_data);
                   
          header("Location:addvenue.php");

        //echo"<script>alert('Your request to add your business is received..);</script>";
  }
    else{
            die("Unable to connect");
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
				  <li role="presentation" class="active"><a href="addvenue.php">Add a New Venue</a></li>
				  <li role="presentation"><a href="updatelist.php">Update a List</a></li>
				 <!-- <li role="presentation"><a href="queries.php">Contact-Us Details</a></li>
                    <li role="presentation"><a href="">Get Qoute</a></li> -->

				  <li role="presentation"><a href="verifylist.php">Verify Listings</a></li>
				  <li role="presentation"><a href="profile.php">Profile Settings</a></li>
				</ul>
				</div>
			</div>
			<div class="container con" id="content">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<h3>Add a New Venue</h3>
					<hr>
					<form method="post">
					<div class="row">
                    	<div class="col-sm-4">
                           <div class="form-group">
                              <label for="exampleInputName1">Owner's Name:</label>
                              <input name="name" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,20}" title="Only Alphbets are allowed and max lenght of Username should not exceed 20 characters" type="text" class="form-control" id="exampleInputName1" placeholder="Enter your name">
                           </div>
                        </div>
                    

                    <div class="col-sm-4">
                           <div class="form-group">
                              <label for="exampleInputContact1">Contact Number:</label>
                              <input name="contact" type="text" class="form-control" pattern="[7-9]{1}[0-9]{9}" title="Enter Valid Mobile No." id="exampleInputContact1" placeholder="Enter your Mobile Number">
                           </div>
                        </div>

                    <div class="col-sm-4">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address:</label>
                              <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email address">
                           </div>
                        </div>

					</div>
							
					<div class="row">
					<div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputType1">City:</label>
                              <select class="form-control" id="lcity" name="city" required="">
                                 <option disabled="" selected="" value="">
                                    Please select a city
                                 </option>
                                 <option value="mumbai">
                                    Mumbai
                                 </option>
                                 <option value="pune">
                                    Pune
                                 </option>
                                 <option value="banglore">
                                    Banglore
                                 </option>
                                 <option value="chennai">
                                    Chennai
                                 </option>
                              </select>
                           </div>
                        </div>
                     
                     <div class="col-sm-6">
                           <div class="form-group">
                              <label for="EventType1">Event Type:</label>
                              <select class="form-control" id="EventType1" name="eventtype" required="">
                                 <option disabled="" selected="" value="">
                                    Please select a event type
                                 </option>
                                 <option value="wedding">
                                    Wedding
                                 </option>
                                 <option value="birthday">
                                    Birthday Party
                                 </option>
                                 <option value="conference">
                                    Conference
                                 </option>
                                 <option value="team">
                                    Team Outing
                                 </option>
                              </select>
                           </div>
                        </div>
                        </div>

                    <div class="row">
					<div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputType1">Venue Type:</label>
                              <select class="form-control" id="lcity" name="venuetype" required="">
                                 <option disabled="" selected="" value="">
                                    Please select a venue type
                                 </option>
                                 <option value="banquet_halls">
                                    Banquet Halls
                                 </option>
                                 <option value="wedding_lawn">
                                    Wedding Lawn
                                 </option>
                                 <option value="party_lawn">
                                    Party Lawn
                                 </option>
                                 <option value="farm_house">
                                    Farm House
                                 </option>
                                <option value="corporate">
                                    Corporate
                                 </option>
                                <option value="bar_and_restaurant">
                                    Bar & Restaurants
                                 </option>
                              </select>
                           </div>
                        </div>
                     
                    <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputVName1">Venue Name:</label>
                              <input type="text" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,20}" title="Only Alphbets are allowed and max lenght of Venue name should not exceed 20 characters" class="form-control" id="exampleInputVName1" name="venuename"placeholder="Enter the venue name">
                           </div>
                    </div>
                    </div>

					<div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputLocality1">Locality:</label>
                              <input type="text" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,20}" title="Only Alphbets are allowed and max lenght of Locality should not exceed 20 characters" class="form-control" id="exampleInputLocality1" name="locality" placeholder="Enter the locality">
                           </div>
                    	</div>
                    	<div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputCapacity1">Capacity:</label>
                              <input type="text" pattern="[0-9]{3}" title="Enter Valid Capacity" class="form-control" id="exampleInputCapacity1" name="capacity" placeholder="Enter the capactity of venue">
                           </div>
                   		</div>
                    </div>

					<div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputCost1">Cost of Venue:</label>
                              <input type="text" pattern="[0-9]{5}" title="Enter Valid Cost of Venue"class="form-control" id="exampleInputCost1" name="cost" placeholder="Enter the cost of venue">
                           </div>
                    	</div>
                    	<!--<div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputCapacity1">Select an Image:</label>
                              <input type="file" name="image" size="40">
                           </div>
                   		</div>-->
                    </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                     </div>
				</div>
			</div>
		</div>
	</div>
	</section>

  <footer>
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
