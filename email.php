<?php

if(isset($_POST['submit']))
{
  $email=$_POST['email'];
     
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
          $mail->Password = 'qwertyuioplkjhgfdsa'; // SMTP password
          $mail->SMTPSecure = 'tls';                  //encrypts communication channel.. Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                          // TCP port to connect to

          $mail->setFrom('occasions.in', 'Occasions');
          $mail->addReplyTo('info@codexworld.com', 'CodexWorld');
          $mail->addAddress($email);   // Add a recipient

          $mail->isHTML(true);  // Set email format to HTML

          $bodyContent = '<h3>Your Order has been confirmed.</h3>';
         
          $mail->Subject = 'Order Confirmation';
          $mail->Body = $bodyContent;
	$bodyContent .=  '<h3>Message : </h3>';
          $bodyContent .= $message;


          if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          else {  
          ?>
            <script>alert('We'll get back to you soon);</script>
          <?php
          } 
      
       #}
    
}
?>

<!DOCTYPE>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
      <link href="css/style.css" rel="stylesheet">


    <title>Email</title>
</head>
<body>



<section >
                <form method="post">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email address here"/>
                    
                  </div>

 
                  <div class="form-group">
                    <label for="exampleInputMessage1">Message</label>
                    <textarea class="form-control" name="message" id="exampleInputMessage1" rows="3" cols="10" placeholder="Enter your Message here"></textarea>
                  </div>
                  <button name="submit" class="btn btn-default">Submit</button>
                </form>
            </section>
            <br>
</body>
</html>
