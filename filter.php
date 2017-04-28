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
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
                  <a class="navbar-brand" href="home.php" style="">Occasions</a>
               </div>
               <!-- Collect the nav links and other content for toggling -->
               <div class="collapse navbar-collapse" id="menu">
                 <!-- <ul class="nav navbar-nav">
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
                  </ul> -->
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
      <!--<div id="content">
         <div>
             <img src="images/profile.png"  class="animated bounce" id="logo" >
         </div>
         </div>-->
      <div class="container" id="filter-content">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
               <div class="animated bounceInLeft" id="logo">
                  <label for="exampleInputType1" >City:</label>
                  <select name="city" class="form-control" id="lcity"  required="">
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
                  <select name="city" class="form-control" id="lcity"  required="">
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
               <div class="animated bounceInRight" id="logo">
                  <label for="exampleInputType1" >Event:</label>
                  <select name="city" class="form-control" id="lcity"  required="">
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
            <div >
               <button type="button" class="btn btn-success animated fadeInUp">Apply Filter</button>
            </div>
         </div>
      </div>



      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-126col-xs-12 animated fadeIn" id="card_wrapper">
               <div  id="card_container">
                  <div id="card" class="shadow">
                     <div class="front face">
                        <img src="images/wedding.jpg" style="width: 100%;height: 100%" />
                     </div>
                     <div class="back face center">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="">
                          Owner Name
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="">
                          Suraj Kasar
                        </div>
                        <br>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="">
                           Name
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="">
                          Suraj Kasar Laxmanrao
                        </div>
                        <br>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="">
                          Address
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="">
                          sadkalskdjkajdsklajsdlkjasdlkjaslkdjlkasjdlkasjdklajskldjaskldjlaksjdlka  
                        </div>
                        <br>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="">
                          Budget
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="">
                          979879
                        </div>
                        <br>

                        
                     </div>
                  </div>
               </div>
               <p id="title">dasasdsadasdsadsadas</p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  animated fadeIn " id="card_wrapper">
               <div  id="card_container">
                  <div id="card" class="shadow">
                     <div class="front face">
                        <img src="images/wedding.jpg" style="width: 100%;height: 100%" />
                     </div>
                     <div class="back face center">
                        
                     </div>
                  </div>
               </div>
               <p id="title">dasasdsadasdsadsadas</p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated fadeIn" id="card_wrapper">
               <div  id="card_container">
                  <div id="card" class="shadow">
                     <div class="front face">
                        <img src="images/wedding.jpg" style="width: 100%;height: 100%" />
                     </div>
                     <div class="back face center">
                        <p>This is nice for exposing more information about an image.</p>
                        <p>Any content can go here.</p>
                     </div>
                  </div>
               </div>
               <p id="title">dasasdsadasdsadsadas</p>
            </div>

           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated fadeIn" id="card_wrapper">
               <div  id="card_container">
                  <div id="card" class="shadow">
                     <div class="front face">
                        <img src="images/wedding.jpg" style="width: 100%;height: 100%" />
                     </div>
                     <div class="back face center">
                        <p>This is nice for exposing more information about an image.</p>
                        <p>Any content can go here.</p>
                     </div>
                  </div>
               </div>
               <p id="title">dasasdsadasdsadsadas</p>
            </div>
            
         </div>
      </div>




      <footer>
         <div class="container">
            <div class="row" id="link">
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 " id="Frow">
                  <h4>Logo</h4>
                  <li><a href="about.php" style="color:#BDD8DA;text-deocration:none">About Us</a></li>
                  <li><a href="how.php" style="color:#BDD8DA">How it works</a></li>
                  <li><a href="contact.php" style="color:#BDD8DA">Contact Us</a></li>
                  <li><a href="our.php" style="color:#BDD8DA">Our Team</a></li>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 " id="Frow">
                  <h4>City</h4>
                  <li><a href="#" style="color:#BDD8DA">Pune</a></li>
                  <li><a href="#" style="color:#BDD8DA">Mumbai</a></li>
                  <li><a href="#" style="color:#BDD8DA">Banglore</a></li>
                  <li><a href="#" style="color:#BDD8DA">Chennai</a></li>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 " id="Srow">
                  <h4>Event Type</h4>
                  <li><a href="#" style="color:#BDD8DA">Wedding</a></li>
                  <li><a href="#" style="color:#BDD8DA">Birthday</a></li>
                  <li><a href="#" style="color:#BDD8DA">Party</a></li>
                  <li><a href="#" style="color:#BDD8DA">Others</a></li>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 "id="Srow">
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
   </body>
</html>