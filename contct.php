<!DOCTYPE>
<html ng-app="myApp">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
      <link href="css/style.css" rel="stylesheet">


  <title>Contact List App</title>
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
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>List Your Business</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
				  <li role="presentation" ><a href="about.html">About Us</a></li>
				  <li role="presentation"><a href="how.html">How it Works</a></li>
				  <li role="presentation"><a href="fees.html">Our Fees</a></li>
				  <li role="presentation" class="active"><a href="contact.html">Contact Us</a></li>
				  <li role="presentation"><a href="our.html">Our Team</a></li>
				  <li role="presentation"><a href="faq.html">FAQ</a></li>
				  <li role="presentation"><a href="policies.html">Policies</a></li>
				  <li role="presentation"><a href="terms.html">Terms of Use</a></li>
				  <li role="presentation"><a href="security.html">Security</a></li>
				  <li role="presentation"><a href="privacy.html">Privacy</a></li>
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
                <form ng-controller="AppCtrl" name="contactForm">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Enter your Name here" ng-model="contact.name" ng-required="true" ng-minlength="2"/>
                    <span class="error-message" ng-show="contactForm.name$dirty && contactForm.name.$error.required">Must Enter Your Name</span>
                    <span class="error-message" ng-show="contactForm.name.$dirty
          && contactForm.name.$error.minlength">Must be a Minimum of 2 Characters</span>
 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email address here" ng-model="contact.email" ng-required="true"/>
                    <span class="error-message" ng-show="contactForm.email$dirty && contactForm.email.$error.required">Must Enter Your Email</span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSubject1">Subject</label>
                    <input name="subject" type="text" class="form-control" id="exampleInputSubject1" placeholder="Enter the Subject here" ng-model="contact.subject" ng-required="true"/>
                    <span class="error-message" ng-show="contactForm.subject$dirty && contactForm.subject.$error.required">Must Enter The Subject</span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputMessage1">Message</label>
                    <textarea class="form-control" id="exampleInputMessage1" rows="3" cols="10" placeholder="Enter your Message here" ng-model="contact.message" ng-required="true"></textarea>
                  </div>
                  <button class="btn btn-default" ng-click="addContact()" ng-disabled="contactForm.$invalid">Submit</button>
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
	
	
            </section>
<footer>
         <div class="container">
            <div class="row" id="link">
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 " id="Frow">
                  <h4>Occasions</h4>
                  <li><a href="about.html" style="color:#BDD8DA;">About Us</a></li>
                  <li><a href="how.html" style="color:#BDD8DA">How it works</a></li>
                  <li><a href="fees.html" style="color:#BDD8DA">Our Fees</a></li>
                  <li><a href="contact.html" style="color:#BDD8DA">Contact Us</a></li>
                  <li><a href="our.html" style="color:#BDD8DA">Our Team</a></li>
                  <li><a href="faq.html" style="color:#BDD8DA">FAQ</a></li>
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