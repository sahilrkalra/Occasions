<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location: lg.php");
}
else
{
    $name=$_SESSION['user'];
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
if(isset($_POST['update']))
{
	$conn = new MongoClient();            //Connect To MongoDB
        if($conn){

            $database=$conn->occasions;         //Connecting to database        
  
            $collection=$database->users;       //Connect to question_bank collection

            $result=$collection->findOne(['user'=>$name]);

	$result['name']=$_POST['name'];
	$result['email']=$_POST['email'];
	$result['number']=$_POST['number'];
	$result['gender']=$_POST['gender'];
	$result['address']=$_POST['address'];
	

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
				  <!--<li role="presentation"><a href="queries.php">Contact-Us Details</a></li>
                    <li role="presentation"><a href="">Get Qoute</a></li> -->

				  <li role="presentation"><a href="verifylist.php">Verify Listings</a></li>
				  <li role="presentation" class="active"><a href="profile.php">Profile Settings</a></li>
				</ul>
				</div>
			</div>
			<div class="container con" id="content">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<h3>Profile Settings</h3>
					<hr>
<?php

    $conn = new MongoClient();            //Connect To MongoDB
        if($conn){

            $database=$conn->occasions;         //Connecting to database        
  
            $collection=$database->users;       //Connect to question_bank collection

            $result=$collection->findOne(['user'=>$name]);
//foreach ($result as $query) {

echo'
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Admin Panel<a class="pull-right" data-toggle="modal" data-target=".bs-example-modal-lg" id="update-button" href="edit.html" data-original-title="Edit profile" data-toggle="tooltip" type="button"><i class="glyphicon glyphicon-edit"></i></a></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/profile.png" class="img-circle img-responsive"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name</td>
                        <td>'.$result['name'].'</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="kasarsuraj15@gmail.com">'.$result['email'].'</a></td>
                      </tr>
                      
                   
                        <tr>
                            <tr>
                                <td>Gender</td>
                                <td>'.$result['gender'].'</td>
                            </tr>
                            <tr>
                                <td>Home Address</td>
                                <td>'.$result['address'].'</td>
                            </tr>

                            <td>Phone Number</td>
                            <td>'.$result['number'].'</td>
                            </tr>
                            <tr>
                        <td>Username</td>
                        <td>'.$result['user'].'</td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>'.$result['pass'].'</td>
                      </tr>
                    </tbody>
                  </table>
                  
                              
                </div>
              </div>
            </div>
               
          </div>';
}
?>
  
                     </div>
				</div>
			</div>
		</div>
	</div>
	</section>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="get-quote">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header md-hd">
            <h3 class="modal-title" id="get-quote">Update You Profile</h3>
         </div>
         <div class="modal-body">
            <form method="post" action='profile.php'>
               <div class="row">
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="FirstName1">Name:</label>
                        <input type="text" class="form-control" id="FirstName1" name="name" placeholder="Enter your name" value="<?php echo $result['name']; ?>">
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="LastName1">Email:</label>
                        <input type="text" class="form-control"  name="email" id="LastName1" placeholder="Enter your Email" value="<?php echo $result['email']; ?>">
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="Contact1">Phone Number:</label>
                        <input type="text" class="form-control" name="number" id="Contact1" placeholder="Enter your Mobile Number" value="<?php echo $result['number']; ?>">
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-sm-4">
                     <div class="form-group">
                     <label for="Gender1">Gender:</label>
                     <br>
                     <?php 
          if($result['gender']=="Male")
          {
            ?>
            <label class="radio-inline"><input type="radio" name="gender" value="Male" checked="">Male</label>
            <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
          
                    <?php
          }
            else
           {
              ?>
            <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
            <label class="radio-inline"><input type="radio" name="gender" value="Female" checked="">Female</label>

        <?php
           }

          ?>
                     </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="Contact1">Home Address:</label>
                    <input type="text" class="form-control" id="Contact1" placeholder="Enter your Address" name="address" value="<?php echo $result['address']; ?>">
                     </div>
                  </div>
               </div>

         </div>
         
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
         <button type="submit" class="btn btn-primary" name="update">Update</button>
      </div>
	</form>
   </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


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
