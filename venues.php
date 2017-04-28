<?php
  if(isset($_POST['submit']))
  {
    $modid=$_POST['modid'];
    $venue=$_POST['venue'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
    $date=$_POST['date'];
    $pax=$_POST['pax'];
    $message=$_POST['message'];

    require 'new/PHPMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          $mail->isSMTP();                            // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                     // Enable SMTP authentication
          $mail->Username = 'occassions12345@gmail.com';          // SMTP username
          $mail->Password = 'asdfghjklmnbvcxz'; // SMTP password
          $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                          // TCP port to connect to

          $mail->setFrom('Occasions.in', 'Occasions');
          $mail->addReplyTo('info@codexworld.com', 'CodexWorld');
          $mail->addAddress('occassions12345@gmail.com');   // Add a recipient
          $mail->addCC($email);  
          $mail->isHTML(true);  // Set email format to HTML

          $bodyContent = '<h3>Name : </h3>';
          $bodyContent .= $name;
          $bodyContent .=  '<h3>Email : </h3>';
          $bodyContent .= $email;
          $bodyContent .=  '<h3>Venue ID : </h3>';
          $bodyContent .= $modid;
          $bodyContent .=  '<h3>Venue Name : </h3>';
          $bodyContent .= $venue;
          $bodyContent .=  '<h3>Date of Event : </h3>';
          $bodyContent .= $date;
          $bodyContent .=  '<h3>PAX : </h3>';
          $bodyContent .= $pax;
          $bodyContent .=  '<h3>Message : </h3>';
          $bodyContent .= $message;

          $mail->Subject = 'Get Details';
          $mail->Body = $bodyContent;

          header('Location:home.php');

          if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          else {  
          ?>
            <script>alert('We'll get back to you soon);</script>
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

<link href="https://fonts.googleapis.com/css?family=Euphoria+Script" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
                     <li><a href="lg.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>

	<section id="addvenue">
	<!--<div class="container">
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
				  <li role="presentation" class="active"><a href="updatelist.php">Update a List</a></li>
				  <li role="presentation"><a href="queries.php">Contact-Us Details</a></li>
				  <li role="presentation"><a href="verifylist.php">Verify Listings</a></li>
				  <li role="presentation"><a href="">Get Qoute</a></li>
				  <li role="presentation"><a href="profile.php">Profile Settings</a></li>
				</ul>
				</div>
			</div>-->

			<div class="container" id="content">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>Venues</h3>
					<hr>

          <form method="post">
          <div class="container" id="filter-content">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
               <div class="animated bounceInLeft" id="logo">
                  <label for="exampleInputType1" >City:</label>
                  <select name="cityname" class="form-control" id="lcity">
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
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
               <div class="animated bounceInDown" id="logo">
                  <label for="exampleInputType1" >Venue:</label>
                  <select name="venuetype" class="form-control" id="lcity">
                     <option disabled="" selected="" value="">
                        Please select a venue type
                     </option>
                     <option value="banquet_halls">
                        Banquet Halls
                     </option>
                     <option value="wedding_lawn">
                        Wedding Lawn
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
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
               <div class="animated bounceInRight" id="logo">
                  <label for="exampleInputType1" >Event:</label>
                  <select name="eventtype" class="form-control" id="lcity">
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
            <div >
               <button type="submit" name="apply" class="btn btn-success animated fadeInUp">Apply Filter</button>
            </div>
         </div>
               </form>
      </div>


      <div class='table-responsive'>    
 <?php
    $city=$_GET['cityname'];
    $event=$_GET['eventtype'];
    $venue=$_GET['venuetype'];

    if(isset($_POST['apply']))
    {
      $city=$_POST['cityname'];
      $event=$_POST['eventtype'];
      $venue=$_POST['venuetype'];
    }

    $conn = new MongoClient();            //Connect To MongoDB
        if($conn){

            $database=$conn->occasions;         //Connecting to database        
  
            $collection=$database->venue;       //Connect to question_bank collection
            //echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
            
            if(($city && $event && $venue)){

            $result=$collection->find(array('$and'=>array(array('city' => $city,'eventtype' => $event,'venuetype' => $venue))));
              }
              else
              {
                if($event)
                {
                  $result=$collection->find(array('eventtype' => $event));
                }
                  if($venue){
             $result=$collection->find(array('venuetype' => $venue));
              }
              if($city)
              {
                $result=$collection->find(array('city' => $city));
              }
            }
          

foreach ($result as $query) {
if($query["status"]==Approved)
{  
$id=$query['_id'];
$venuen=$query['venuename'];
echo "<table class='table table-hover'><tr><th>City</th><th>Event Type</th><th>Venue Type</th><th>Venue Name</th><th>Locality</th><th>Capacity</th><th>Cost</th></tr>";
echo '<tr><th>'.$query["city"].'</th><th>'.$query["eventtype"].'</th><th>'.$query["venuetype"].'</th><th>'.$query["venuename"].'</th><th>'.$query["locality"].'</th><th>'.$query["capacity"].'</th><th>'.$query["cost"].'</th></tr>';

echo"</table>";

echo'<div class="container-fluid">
<div class="row">
<div class="col-sm-4 col-lg-4">
</div>
<div class="col-sm-4 col-lg-4">
<form method="post">
<center>
<input name="id" type="hidden" ><button type="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example1-modal-lg'.$id.'">Get Details</button>
</center>
</div>
</div>
</div>';

echo'<div class="modal fade bs-example1-modal-lg'.$id.'" tabindex="-1" role="dialog" aria-labelledby="update-mod">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header md-hd">
                  <h3 class="modal-title" id="update-mod">Please Enter your Information</h3>
               </div>
            <div class="modal-body">
                  <form method="post" action="updatelist.php">
                  <input type="hidden" value="'.$id.'" name="modid">
                  <input type="hidden" value="'.$venuen.'" name="venue">
                     <div class="row">

                         <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Name">Name:</label>
                              <input type="text" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,20}" title="Only Alphbets are allowed and max lenght of your Name should not exceed 20 characters" class="form-control" name="name" id="name" placeholder="Enter your name">
                           </div>
                        </div>

                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Email1">Email address:</label>
                              <input type="email" class="form-control" id="email1" placeholder="Enter your Email address" name="email">
                           </div>
                        </div>


                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Contact1">Contact Number:</label>
                              <input type="text" pattern="[7-9]{1}[0-9]{9}" title="Enter Valid Mobile No." class="form-control" id="Contact1" name="contact" placeholder="Enter your Mobile Number">
                           </div>
                        </div>


                      <div class="col-sm-4">
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

                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Date1">Event Date:</label>
                              <input type="date" class="form-control" name="date" id="Date1" placeholder="">
                           </div>
                        </div>
                        
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="PAX1">PAX:</label>
                              <input type="text" pattern="[0-9]{3}" title="Enter a valid value" class="form-control" id="PAX1" placeholder="PAX" name="pax">
                           </div>
                        </div>

                        
                        



                     </div>

                     <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Message1">Any Messages?</label>
                              <input type="text" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,200}" title="Only Alphbets are allowed and max lenght of Message should not exceed 200 characters" class="form-control" id="Message1" placeholder="Message" name="message">
                           </div>
                        </div>
                     </div>



               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               </div>
               </form>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>';

echo'<br>';
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

	 <footer>
        <div class="container">
    
        <div class="row" id="link">
                <div class="row">
                    <div>
                        <p>
                       © Occasions 2016. All right reserved.</p> 
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