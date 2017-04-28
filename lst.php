<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Last try</title>
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
      <!-- Navigation -->
      <div id="page-top">
         <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
               <!-- Brand and toggle-->
               <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="#page-top">Logo</a>
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
                     <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
      </div>
      <!-- List your Business-->
      <section id="list">
         <div class="container">
         <div class="row" id="partner">
         <!-- <div class=" col-lg-4 col-md-4 col-sm-4 "> -->
         <h1><b>Partner With Occasions.in</b></h1>
         <h3>If you believe in providing superb experience and customer service to wedding families, you have come to the right place.</h3>
         <!--</div>-->
         <div>
         <div>
      </section>
      <section id="list-frm">
         <div class="container">
            <div class="row">
               <h4>Fill in the form below and we will get back to you in 24 hours.</h4>
               <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7" id="business">
                  <form>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputBussName1">Business Name:</label>
                              <input type="text" class="form-control" id="exampleInputBussName1" placeholder="Enter the name of your business">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputName1">Your Name:</label>
                              <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter your name">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address:</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email address">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputContact1">Contact Number:</label>
                              <input type="text" class="form-control" id="exampleInputContact1" placeholder="Enter your Mobile Number">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputType1">Type of Business:</label>
                              <select class="form-control" id="business_type" name="business_type" required="">
                                 <option disabled="" selected="" value="">
                                    Please select a business type
                                 </option>
                                 <option value="venue">
                                    Venue
                                 </option>
                                 <option value="photography">
                                    Photography
                                 </option>
                                 <option value="makeup-artists">
                                    Makeup
                                 </option>
                                 <option value="mehendi-artists">
                                    Mehendi
                                 </option>
                                 <option value="caterers">
                                    Catering
                                 </option>
                                 <option value="invitation-cards">
                                    Invitation Card
                                 </option>
                                 <option value="wedding-planners">
                                    Wedding Planners
                                 </option>
                                 <option value="decorators">
                                    Decoration
                                 </option>
                                 <option value="music">
                                    DJ
                                 </option>
                                 <option value="dance">
                                    Choreography
                                 </option>
                                 <option value="variety-arts">
                                    Entertainment/Singer/ Dancer/ Orchestra
                                 </option>
                                 <option value="services">
                                    Services
                                 </option>
                                 <option value="transportation">
                                    Transport/Car Rental
                                 </option>
                                 <option value="shop">
                                    Lehenga/ Jewellery shop
                                 </option>
                                 <option value="band-baaja">
                                    Band/Baaja/ Ghodiwala
                                 </option>
                                 <option value="pandit-priest">
                                    Pandit/Priest
                                 </option>
                                 <option value="anchor-mc">
                                    Anchor/MC
                                 </option>
                                 <option value="rentals">
                                    Rentals
                                 </option>
                                 <option value="experiences">
                                    Experiences
                                 </option>
                                 <option value="tailoring">
                                    Tailoring
                                 </option>
                                 <option value="other">
                                    Other
                                 </option>
                              </select>
                           </div>
                        </div>
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
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="exampleInputComments">Comments:</label>
                              <input type="text" class="form-control" id="exampleInputComments" placeholder="Notes">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-9">
                           <div class="form-group">
                              <b>By submitting this form, you agree to our<a href="/terms" target="_blank">&nbsp;Terms and Conditions</a></b>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-default">Submit</button>
                  </form>
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
                        © Occasions 2016. All right reserved.
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
