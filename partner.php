<?php
    require("includes/header.php");
?>
<title>Partner</title>
  <link type="text/css" rel="stylesheet" href="css/style_navbar.css">
  <link type="text/css" rel="stylesheet" href="css/style_modal.css">
  <link type="text/css" rel="stylesheet" href="css/style_partner.css">
  <link type="text/css" rel="stylesheet" href="css/style_footer.css">
  <title>Website</title>

</head>
<body>

<?php
    require("includes/navbar.php");
    require("includes/modal.php");
?>
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
              <span><img src="images/Capture.JPG" width="100%"></span>  
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
              <span><img src="images/Capture.JPG" width="100%"></span>  
          </div>
      </div>
  </div>
</div>
<br>
<h1 class="text-center"> Some Quote </h1>
<br>
<?php
    require("includes/footer.php");
?>
</div>

        <script src="app.js"></script>
</body>
</html>


























