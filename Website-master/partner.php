<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
<script src="https://code.jquery.com/jquery-2.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        

        <link type="text/css" rel="stylesheet" href="style_partner.css">
        <title>Website</title>

    </head>
    <body>
<!-----------------------NAVBAR----------------------->
        <navbar class="navbar navbar-expand-sm navbar-light bg-light">
		<div class="container">
		<a href="" class="navbar-brand">LOGO</a>
		<button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#ids">
			<span class="navbar-toggler-icon my-toggler"></span>
		</button>
		<div class=" collapse navbar-collapse" id="ids">
		<ul class="navbar-nav ml-auto ul">
		<li class="nav-item">
			<a href="#" class="nav-link">Home</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link">Categories</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link">Partner</a>
		</li>	
		<li class="nav-item">
			<a  type="button" data-toggle="modal" data-target="#myModal" class="nav-link sign-in">Sign In/Up</a>
		</li>	
		</ul>
		</div>
		</div>
	</navbar>
<!-----------------------close----------------------->  
<!-----------------------MODAL----------------------->        
   <div class="container">
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
<form>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class='fas fa-user'></i></span>
    </div>
    <input type="text" class="form-control" placeholder="Your Email">
  </div>

  <div class="input-group mb-3">
   <div class="input-group-prepend">
       <span class="input-group-text"><i class='fas fa-lock'></i></span>
    </div> <input type="password" class="form-control" placeholder="Password">
    
  </div>
<a class="float-right" href="home.php">Forgot Password?</a>
<br><br>
<div class="input-group mb-3">
   <button type="submit" class="form-control submit" id="submit">Login</button>
</div>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <p>New to *CompanyName*?<a type="button" href="home.php" class="btn btn-default" href="home.php"><span class="input-group-text"><i class='fas fa-user-plus'></i>&nbsp;Create Account</span></a></p>
        </div>
        
      </div>
    </div>
  </div>
  
</div>     
<!--   Close-modal     -->
<!--        Content    -->
<div class="background_gradient">
<!--    ADD A SUBHEADER   -->
<div class="subheader">
  <div class="container text-center">
    <h1>Add a Subheading</h1>      
  </div>
</div>
<!-- FORM AND 2 WELL DIVS    -->
<div class="container text-center">    
<br>
  <div class="row">
<!--      2 WELL BOXES   -->
    <div class="col-sm-6">
      <div class="well">
        <div>
          <p>Submit your details to join us in the initiative. We will get back to you within 24 hours.
          </p>
          <br>
        </div> 
      </div>
      <hr>
      <div class="well">
       <div>
          <p><b>Get in touch with us</b></p>
          <p><span><i class='fas fa-phone'></i>&nbsp;&nbsp;+91 9772802500</span></p>
          <p><span><i class='fas fa-envelope'></i>&nbsp;&nbsp;Email</span></p>
       </div> 
      </div>    
    </div>
<!--    CLOSE well boxes  -->
<!--      FORM    -->
  <div class="col-sm-6">
    <div id="form">
      
<form class="form-horizontal center-block" action="/action_page.php">
<!--    -->
  <div class="form-group col-sm-6 float-left">
    <label class="float-left" for="name">Name:</label>
    <input type="name" class="form-control" id="name" name="name" required>
  </div>
<!--    -->
  <div class="form-group col-sm-6 float-right">
    <label class="float-left" for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
<!--    -->
   <div class="form-group col-sm-6 float-left">
    <label class="float-left" for="phone">Phone Number:</label>
    <input type="number" class="form-control" id="phone" name="phone" required>
  </div>
<!--    -->
  <div class="form-group col-sm-6 float-right">
    <label class="float-left" for="org">Organisation:</label>
    <input type="text" class="form-control" id="org" name="org" required>
  </div>
<!--    -->
  <div class="form-group col-sm-12 float-left">
      <label class="float-left" for="msg">Message</label>
      <textarea type="msg" class="form-control" id="msg" name="msg"></textarea>
  </div>
<!--    -->
<br><br>
  <button type="submit" class="btn btn-default submit">Submit</button>
</form>
    </div>
  </div>  
  </div>
<!--    row closed   -->
</div>
<!--    container closed -->
<br>
<h1 class="text-center"> How you can be a part of the initiative </h1>
<br>
<!-- ADVERTISE -->
<div class="subheader">
  <div class="container">
      <div class="row">
          <div class="col-sm-6">  
              <span><img src="Capture.JPG" width="100%"></span>  
          </div>
          <div class="col-sm-6 text-center">
              <h2>Advertise with us</h2>
              <br>
              <p style="font-size:24px">Make your brand visible by advertising on our home page. Reach a huge global audience by giving your business a head start on engagement.</p>
              <br>
              <button class="btn btn-default submit getInTouch">Get in touch</button>
          </div>
      </div>
  </div>
</div>
<br>
<!--    CLOSE Advertise  -->
<!--    List your Business -->
<div class="subheader">
  <div class="container">
      <div class="row">
          <div class="col-sm-6 text-center">
              <h2>List your Business</h2>
              <br>
              <p style="font-size:24px">Showcase your business, products and services to consumers across the globe. Flaunt them on our page.</p>
              <br>
              <button class="btn btn-default submit getInTouch">Get in touch</button>
          </div>
          <div class="col-sm-6">
              <span><img src="Capture.JPG" width="100%"></span>  
          </div>
      </div>
  </div>
</div>
<br>
<h1 class="text-center"> Some Quote </h1>
<br>
    <div class="footer">
      <div class="row">
        <div class="col-sm-2">
            <div style="background-color:white">Logo</div>
            <br>
            <p><a href="#">About Us</a></p>
            <p><a href="#">Partners</a></p>
            <p><a href="#">Clientele</a></p>
            <p><a href="#">Testimonials</a></p>
        </div>
        <div class="col-sm-2">
            <p class="header">Browse Opportunities</p>
            <br>
            <p><a href="#">Competitions </a>|
               <a href="#"> Quizzes</a></p>
            <p><a href="#">Hackathons </a>|
               <a href="#"> Jobs and Internships</a></p>
            <p><a href="#">Scholarships </a>|
               <a href="#"> Workshops</a></p>
            <p><a href="#">Cultural Events</a>
        </div>
        <div class="col-sm-2">
            <p class="header">Categories<p>
            <p><a href="#">Industries </a></p>
            <p><a href="#">Industries-1</a></p>
            <p><a href="#">Industries-2</a></p>
            <p><a href="#">Industries-3</a></p>
            <p><a href="#">Industries-4</a></p>
            <p><a href="#">Industries-5</a></p>
            <p><a href="#">Industries-6</a></p>
        </div>
        <div class="col-sm-2">
            <p class="header">Locations</p>
            <p><a href="#">Delhi </a></p>
            <p><a href="#">Mumbai</a></p>
            <p><a href="#">Kolkata</a></p>
            <p><a href="#">Pune</a></p>
            <p><a href="#">Bengluru</a></p>
            <p><a href="#">Chennai</a></p>
            <p><a href="#">Ahemdabad</a></p>
        </div>
        <div class="col-sm-4">
            <p class="header">Connect with us</p>
            <p><a href="#">Instagram </a></p>
            <p><a href="#">Facebook </a></p>
            <p><a href="#">Whatsapp </a></p>
        </div>
      </div>
<hr style="border-top: 1px solid white;">
       <div class="conditions">
           <p><a href="#">Terms & Conditions </a>|
              <a href="#"> Privacy Policy </a>|
              <a href="#"> Branding Guidelines </a>|
              <a href="#"> Partner With Us </a>|
              <a href="#"> Contact Us </a>|
              <a href="#"> FAQs </a>|
              <a href="#"> Subscribe Newsletter</a>
              <a type="button" href="#" class="btn btn-primary" style="color:white">Publish Oppotunity</a>
           </p>
        </div> 
<hr style="border-top: 1px solid white;"><br><br>
    </div> 
</div>
        <script src="app.js"></script>
</body>
</html>


























