<?php
   if(isset($_POST['submit']))
   {           
     
       if(isset($_POST['g-recaptcha-response']) && ($_POST['g-recaptcha-response']))
       {
         //var_dump($_POST);
         $secret = '6Le0-QcUAAAAACX9w-GVhs9Nc5_hppSlD4qKQmAV';
         $ip=$_SERVER['REMOTE_ADDR'];
         $captcha = $_POST['g-recaptcha-response'];
         $rsp=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
         var_dump($rsp);
         $arr = json_decode($rsp,TRUE);
         if($arr['success']){ 
   
           #$name = $_POST['name'];
            #$email = $_POST['email'];
            #$subject = $_POST['subject'];
            #$message=$_POST['message'];
            #$con = new MongoClient();
     
    # if($con)
    # {
    
       //connecting to database
     #  $databse=$con->occasions;
   
       //connect to specific collection
     #  $collection=$databse->contactlist;
    
      # $list_data=array('Name'=>$name,'Email'=>$email,'Subject'=>$subject,'Message'=>$message);
       #$collection->save($list_data);
                      
        #     header("Location:contact.php");
     #}
      # else{
       #        die("Unable to connect");
        #   }
   
         #}

$email=$_POST['email'];
      $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message=$_POST['message'];

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

          $mail->setFrom('Occasions.in', 'Occasions');
          $mail->addReplyTo('info@codexworld.com', 'CodexWorld');
          $mail->addAddress('occassions12345@gmail.com');   // Add a recipient

          $mail->isHTML(true);  // Set email format to HTML

          $bodyContent = '<h3>Name : </h3>';
          $bodyContent .= $name;
          $bodyContent .=  '<h3>Email : </h3>';
          $bodyContent .= $email;
          $bodyContent .=  '<h3>Subject : </h3>';
          $bodyContent .= $subject;
          $bodyContent .=  '<h3>Message : </h3>';
          $bodyContent .= $message;

          $mail->Subject = 'ContactUs Details';
          $mail->Body = $bodyContent;

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
}
         else
         {
           ?>
           <script>alert("Please fill the captcha & fill the form again.");</script>         <?php
         }
     }              
   ?>



<!DOCTYPE>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
      <link href="css/style.css" rel="stylesheet">

<script src='https://www.google.com/recaptcha/api.js'></script>

    <title>Occasions</title>
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
                        <a href="#venue">venue</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#vendor">vendor</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#type">type</a>
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

    
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="ver-nav">
				<div >
					<button type="button" class="navbar-toggle2" data-toggle="collapse" data-target="#2menu">
						<span class="sr-only">Toggle navigation</span> Links <i class="fa fa-bars"></i>
					</button>
				</div>
				            <div class="collapse navbar-collapse" id="2menu">

				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation" ><a href="about.php">About Us</a></li>
				  <li role="presentation"><a href="how.php">How it Works</a></li>
				  <li role="presentation"><a href="fees.php">Our Fees</a></li>
				  <li role="presentation" class="active"><a href="contact.php">Contact Us</a></li>
				  <li role="presentation"><a href="our.php">Our Team</a></li>
				  <li role="presentation"><a href="faq.php">FAQ</a></li>
				  <li role="presentation"><a href="policies.php">Policies</a></li>
				  <li role="presentation"><a href="terms.php">Terms of Use</a></li>
				  <li role="presentation"><a href="security.php">Security</a></li>
				  <li role="presentation"><a href="privacy.php">Privacy</a></li>
				</ul>
				</div>
			</div>
			<div class="container" id="content">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					   <h1>Contact Us<small>&nbsp;for anything </small></h1>
            <hr>
            <p>We at <strong>Occasions</strong> deeply cherish your views regarding our website's performance. Whether it is doing it's job well, up to the mark or marvellously.</p>

            <p>And for this we require your involvement, for any type of suggestion, question, complaint or something that you think is missing with us, or you have any new idea, Please feel free to contact us.</p>
            <section >
                <form method="post">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input name="name" type="text" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,20}" class="form-control" title="Only Alphbets are allowed with 1 space not in start and max lenght of Username is 20" id="exampleInputName1" required="" placeholder="Enter your Name here" />
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" required="" placeholder="Enter your Email address here"/>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSubject1">Subject</label>
                    <input name="subject" pattern="^[a-zA-Z]+\s?[a-zA-Z]{1,20}"  type="text" class="form-control" title="Only Alphbets are allowed with 1 space not in start and max lenght of Username is 20" required="" id="exampleInputSubject1" placeholder="Enter the Subject here"/>
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputMessage1">Message</label>
                    <textarea class="form-control" name="message" required="" id="exampleInputMessage1" rows="3" cols="10" placeholder="Enter your Message here"></textarea>
                  </div>

                  <div class="row">
                  <div class="col-lg-6">
                  <div class="g-recaptcha" data-sitekey="6Le0-QcUAAAAAGVdDm8GWAAmp9kIonYm8JknZw7y"></div>
                  </div>
                  </div>

                  <div class="row">
                  <div class="col-lg-6">
                  <br>
                  <button name="submit" class="btn btn-default">Submit</button>
                  </div>
                  </div>
                
                </form>
            </section>
            <br>
            <p>You can mail us directly at : <span class="label label-warning">support@occasions.in</span></p>
            <p>Or, Drop in a message on Facebook at : <a href="http://www.facebook.com/Occasions" target="_blank"><b>facebook.com/Occasions</b></a></p>
            <p>Being a very small team, it becomes difficult sometimes to handle the enormous amount of work we do, so we apologize in advance for our late reply, if that happens. We will try to revert back as soon as possible.</p>
            
				</div>
			</div>
		</div>
	</div>
	
	
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
                  <h4><a href="policies.html" style="color:white">Policies</a></h4>
                  <h4><a href="terms.html" style="color:white">Terms of use</a></h4>
                  <h4><a href="security.html" style="color:white">Security</a></h4>
                  <h4><a href="privacy.html" style="color:white">Privacy</a></h4>
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
	  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
<script src="controllers/controller.js"></script>
<!-- Routing AngularJS script -->
<script src="https://code.angularjs.org/1.2.14/angular-route.js"></script>
<!-- Additional scripts-->
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
