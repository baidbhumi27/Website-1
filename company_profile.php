<?php
require("includes/header.php");
?>
<title>Company Profile</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style_navbar.css">
<link type="text/css" rel="stylesheet" href="css/style_company_profile.css">
<link type="text/css" rel="stylesheet" href="css/style_footer.css">

</head>

<body>
    <?php
require("includes/navbar.php");
?>
    <div class="container mycontainer">
        <div class="row background">
            <div class="row image">
                <img src="images/cr.png" class="img-fluid rounded-circle">
            </div>
                <div class="row info">
                    <div class="col-md-3"></div>
                    <div class="col-md-4 details">
                        <h4 class="display-5">Name of the Brand</h4>
                        <p>Industry: Name</p>
                        <p>Locations: Name</p>
                    </div>
                    <div class="col-md-5 basicinfo">
                        <h4 class="display-5"><center>Contact</center></h4>
                        <div class="icons">
                            <p><i class='fas fa-phone-alt' style='font-size:24px;color: green'></i>&nbsp; &nbsp; Phone</p>
                            <p><i class='fas fa-mail-bulk' style='font-size:24px'></i>&nbsp; &nbsp; Email</p>
                            <p><i class='fas fa-globe' style='font-size:24px;padding-left: 10px;'></i>&nbsp; &nbsp; Website</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-media">    
                <p><h4 class="display-5"><center>Social Media</center></h4></p>
               <p><center><i class='fab fa-facebook' style='font-size:48px;color:blue'></i>
                <i class='fab fa-youtube' style='font-size:48px;color:red'></i>
                <i class='fab fa-pinterest' style='font-size:48px;color:#a00000'></i>
                <i class='fab fa-linkedin' style='font-size:48px;color:#3366ff'></i></center></p>
            </div>
            <br>
   
  <p><h2><center>Gallery</center></h2></p>  
  <div class="row Carousel">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/00.jpg" alt="Los Angeles" style="width:600px;height: 400px">
      </div>

      <div class="item">
        <img src="images/cr.png" alt="Chicago" style="width:600px;height: 400px">
      </div>
    
      <div class="item">
        <img src="images/00.jpg" alt="New york" style="width:600px;height: 400px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    </div>

</body>
</html>