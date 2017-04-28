<?php

if(isset($_POST['send']))
{
	$email=$_POST['email'];
	// connect to mongodb
 #  $con = new MongoClient();
		//	Select Database
	#		$db = $con->mini;
		//	Select Collection
	#		$collection = $db->User;
	
   #     $qry = array("email"=>$email);
          
    #    $result = $collection->findOne($qry);
                 
		#if($result['email']==$email)
	   # {
          require 'PHPMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          $mail->isSMTP();                            // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                     // Enable SMTP authentication
          $mail->Username = 'occassions12345@gmail.com';          // SMTP username
          $mail->Password = 'qwertyuioplkjhgfdsa'; // SMTP password
          $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                          // TCP port to connect to

          $mail->setFrom('careernavigator.com', 'Career Navigator');
          $mail->addReplyTo('info@codexworld.com', 'CodexWorld');
          $mail->addAddress('kasarsuraj15@gmail.com');   // Add a recipient

          $mail->isHTML(true);  // Set email format to HTML

          $bodyContent = '<h1>Your Password is : </h1>';
          $bodyContent .= 'password';

          $mail->Subject = 'Password Recovery';
          $mail->Body = $bodyContent;

          if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          else {  
          ?>
       	    <script>alert('Message has been sent');</script>
          <?php
          } 
     	
       #}
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login form</title>
  <!-- CORE CSS-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      background: #d6eaf8 !important;
    }
  </style>
</head>

<body>

<nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Logo -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Career Navigator</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Search Institutes</a></li>
                    <li><a href="navbar.html">Signup</a></li>
                    <li><a href="login1.html">Login</a></li>
                    <li><a href="contact.html">Contact Us</a></li>


                </ul>
            </div>

        </div>

 </nav>

<hr>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                              <form class="form" method="post">
                                <fieldset> 
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input name="email" placeholder="email address" class="form-control" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="" type="email">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" name="send" type="submit">Send My Password</button> 
                                  </div>
                                </fieldset>
                              </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  </footer>
</body>

</html>