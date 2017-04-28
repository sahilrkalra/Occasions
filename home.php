<?php

if(isset($_POST['submit']))
{
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $city = $_POST['city'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $event_type = $_POST['event_type'];
      $event_date = $_POST['event_date'];
      $pax = $_POST['pax'];
      $budget = $_POST['budget'];
      $message = $_POST['message'];

  // connect to mongodb
 #  $con = new MongoClient();
    //  Select Database
  #   $db = $con->mini;
    //  Select Collection
  #   $collection = $db->User;
  
   #     $qry = array("email"=>$email);
          
    #    $result = $collection->findOne($qry);
                 
    #if($result['email']==$email)
     # {
         require 'new/PHPMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          $mail->isSMTP();                            // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                     // Enable SMTP authentication
          $mail->Username = 'occassions12345@gmail.com';          // SMTP username
          $mail->Password = 'asdfghjklmnbvcxz'; // SMTP password
          $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                          // TCP port to connect to

          $mail->setFrom('careernavigator.com', 'Career Navigator');
          $mail->addReplyTo('info@codexworld.com', 'CodexWorld');
          $mail->addAddress('occassions12345@gmail.com');   // Add a recipient

          $mail->isHTML(true);  // Set email format to HTML

          $bodyContent = '<h3>First Name : </h3>';
          $bodyContent .= $fname;
          $bodyContent .=  '<h3>Last Name : </h3>';
          $bodyContent .= $lname;
          $bodyContent .=  '<h3>City : </h3>';
          $bodyContent .= $city;
          $bodyContent .=  '<h3>Email : </h3>';
          $bodyContent .= $email;
          $bodyContent .=  '<h3>Mobile Number  : </h3>';
          $bodyContent .= $number;
          $bodyContent .=  '<h3>Event Type : </h3>';
          $bodyContent .= $event_type;
          $bodyContent .=  '<h3>Event Date : </h3>';
          $bodyContent .= $event_date;
          $bodyContent .=  '<h3>PAX : </h3>';
          $bodyContent .= $pax;
          $bodyContent .=  '<h3>Budget : </h3>';
          $bodyContent .= $budget;
          $bodyContent .=  '<h3>Message : </h3>';
          $bodyContent .= $message;

          $mail->Subject = 'Quote Details';
          $mail->Body = $bodyContent;

          if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          else {  
          ?>
            <script>alert('We&and39;ll get back to you soon);</script>
          <?php
          } 
      
       #}
    
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

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<link href="https://fonts.googleapis.com/css?family=Euphoria+Script" rel="stylesheet">

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
                  <a class="navbar-brand" href="#page-top">Occasions</a>
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
      </div>
      <!-- Header -->
      <header>
         <div class="container">
            <button type="button" class="btn animated bounceInUp" data-toggle="modal" data-target=".bs-example-modal-lg">
               <p>Get Quote</p>
            </button>
         </div>
      </header>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="get-quote">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header md-hd">
                  <h3 class="modal-title" id="get-quote">Welcome to Occasions.in - <span class="md-title">Get the Venue that suits you.</span></h3>
                  <h5 class="modal-title" id="get-quote">
                  To get started, share your details & we will create a customized plan for you!</h2>
               </div>
               <div class="modal-body">
                  <form method="post">
                     <div class="row">
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="FirstName1">First Name:</label>
                              <input type="text" name="fname" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,20}" title="Only Alphbets are allowed and max lenght of your Firstname should not exceed 20 characters" class="form-control" id="FirstName1" placeholder="Enter the first name">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="LastName1">Last Name:</label>
                              <input type="text" name="lname" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,20}" title="Only Alphbets are allowed and max lenght of your Lastname should not exceed 20 characters" class="form-control" id="LastName1" placeholder="Enter the last name">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="EventCity1">Event City:</label>
                              <select class="form-control" id="EventCity1" name="city" required="">
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
                     </div>
                     <div class="row">
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Email1">Email address:</label>
                              <input type="email" name="email" class="form-control" id="Email1" placeholder="Enter your Email address">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Contact1">Contact Number:</label>
                              <input type="text" name="number" pattern="[7-9]{1}[0-9]{9}" title="Enter Valid Mobile No." class="form-control" id="Contact1" placeholder="Enter your Mobile Number">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="EventType1">Event Type:</label>
                              <select class="form-control" id="EventType1" name="event_type" required="">
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
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Date1">Event Date:</label>
                              <input type="date" name="event_date" class="form-control" id="Date1" placeholder="">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="PAX1">PAX:</label>
                              <input type="text" name="pax" pattern="[0-9]{3}" title="Enter a valid value" class="form-control" id="PAX1" placeholder="PAX">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Budget1">What is your overall budget?</label>
                              <select class="form-control" id="Budget1" name="budget" required="">
                                 <option disabled="" selected="" value="">
                                    Please select your budget
                                 </option>
                                 <option value="2l">
                                    Less than Rs.2 Lacs
                                 </option>
                                 <option value="5l">
                                    Rs.2 Lacs to Rs.5Lacs
                                 </option>
                                 <option value="10l">
                                    Rs.5Lacs to Rs.10Lacs
                                 </option>
                                 <option value="lacs">
                                    More than 10Lacs
                                 </option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="Message1">Any Messages?</label>
                              <input type="text" name="message" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,200}" title="Only Alphbets are allowed and max lenght of Message should not exceed 200 characters" class="form-control" id="Message1" placeholder="Message">
                           </div>
                        </div>
                     </div>
                  
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
               </div>

               </form>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- How it works-->
      <section id="work">
         <h2><u>How it works</u></h2>
         <div class="container">
            <div class="row">
               <div class=" col-lg-4 col-md-4 col-sm-4 ">
                  <div class="card" style="position:center">
                     <!--Card image-->
                     <img src="images/view-details-64.png"/>
                     <img src="images/arrow-17-32.png" id="arrow">
                     <!--/.Card image-->
                     <!--Card content-->
                     <div>
                        <!--Title-->
                        <h4>Discover &amp; Shortlist</h4>
                        <!--Text-->
                        <p >Call your Weddingz Expert for handpicked recommendations</p>
                     </div>
                     <!--/.Card content-->
                  </div>
               </div>
               <div class="card col-lg-4 col-md-4 col-sm-4 ">
                  <!--Card image-->
                  <img src="images/handshake-64.png"/>
                  <img src="images/arrow-17-32.png" id="arrow">
                  <!--/.Card image-->
                  <!--Card content-->
                  <div>
                     <!--Title-->
                     <h4>Guided Visits</h4>
                     <!--Text-->
                     <p >Schedule guided tours of your shortlisted venues</p>
                  </div>
                  <!--/.Card content-->
               </div>
               <div class="card col-lg-4 col-md-4 col-sm-4 ">
                  <!--Card image-->
                  <img src="images/check-mark-3-64.png"/>
                  <!--/.Card image-->
                  <!--Card content-->
                  <div>
                     <!--Title-->
                     <h4>Book</h4>
                     <!--Text-->
                     <p >Like a venue or vendor? Get Weddingz final quotes</p>
                  </div>
                  <!--/.Card content-->
               </div>
            </div>
         </div>
      </section>
      <!--City Section -->
      <section id="city">
         <p><u>Browse Venues In Your City</u></p>
         <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a class="thumbnail hover03" href="venues.php?cityname=pune&&venuetype=wedding_lawn&&eventtype=wedding">
                  <figure><img class="img-responsive" src="images/pune.jpg" alt=""></figure>
               </a>
               <div class="caption">Pune</div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a class="thumbnail hover03" href="venues.php?cityname=mumbai">
                  <figure><img class="img-responsive" src="images/mumbai.jpg" alt=""></figure>
               </a>
               <div class="caption">Mumbai</div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a class="thumbnail hover03" href="venues.php?cityname=banglore">
                  <figure><img class="img-responsive" src="images/banglore.jpg" alt=""></figure>
               </a>
               <div class="caption">Banglore</div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a class="thumbnail hover03" href="venues.php?cityname=chennai">
                  <figure><img class="img-responsive" src="images/chennai.jpg" alt=""></figure>
               </a>
               <div class="caption">Chennai</div>
            </div>
         </div>
      </section>
      <!-- Event-type Section -->
      <section class="success" id="event-type">
         <p><u>By Event Type</u></p>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a class="thumbnail hover03" href="venues.php?eventtype=wedding">
                     <figure><img class="img-responsive" src="images/wedg.jpg" alt=""></figure>
                  </a>
                  <div class="caption">Wedding</div>
               </div>
               <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a class="thumbnail hover03" href="venues.php?eventtype=birthday">
                     <figure><img class="img-responsive" src="images/birthday.jpg" alt=""></figure>
                  </a>
                  <div class="caption">Birthday Party</div>
               </div>
               <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a class="thumbnail hover03" href="venues.php?eventtype=conference">
                     <figure><img class="img-responsive" src="images/conference.jpg" alt=""></figure>
                  </a>
                  <div class="caption">Conference</div>
               </div>
               <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a class="thumbnail hover03" href="venues.php?eventtype=social">
                     <figure><img class="img-responsive" src="images/social.jpg" alt=""></figure>
                  </a>
                  <div class="caption">Social Gathering</div>
               </div>
            </div>
         </div>
      </section>
      <!--Venue Type Section -->
      <section id="venue-type">
         <p><u>Venue Type</u></p>
         <div class="container">
         <div class="row">
         <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail hover03" href="venues.php?venuetype=banquet_halls">
               <figure><img class="img-responsive" src="images/banquet.jpg" alt=""></figure>
            </a>
            <div class="caption">Banquet Halls</div>
         </div>
         <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail hover03" href="venues.php?venuetype=wedding_lawn">
               <figure><img class="img-responsive" src="images/weddinglawn.jpg" alt=""></figure>
            </a>
            <div class="caption">Wedding Lawn</div>
         </div>
         <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail hover03" href="venues.php?venuetype=party_lawn">
               <figure><img class="img-responsive" src="images/party.jpg" alt=""></figure>
            </a>
            <div class="caption">Party Lawn</div>
         </div>
	</div>
	<div class="row">         
	<div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a class="thumbnail hover03" href="venues.php?venuetype=farm_house">
               <figure><img class="img-responsive" src="images/farm.jpg" alt=""></figure>
            </a>
            <div class="caption">Farm House</div>
         </div>
         
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
               <a class="thumbnail hover03" href="venues.php?venuetype=corporate">
                  <figure><img class="img-responsive" src="images/corporate.jpg" alt=""></figure>
               </a>
               <div class="caption">Corporate</div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
               <a class="thumbnail hover03" href="venues.php?venuetype=bar_and_restaurant">
                  <figure><img class="img-responsive" src="images/resto.jpg" alt=""></figure>
               </a>
               <div class="caption">Bar & Restaurant</div>
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
                  <li><a href="cont.php" style="color:#BDD8DA">Contact Us</a></li>
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
                        <li id="social" class="push-right">Keep in touch</li>
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
