
<!DOCTYPE html>
<html>
<head>
    <title>Company Profile</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<script src="https://code.jquery.com/jquery-2.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link type="text/css" rel="stylesheet" href="css/style_footer.css">
<style type="text/css">
    body{
        background-image: linear-gradient(to right, #ff5f6d , #ffc371);
    }
    .container{
        margin-top: 1rem;
        background-color: white;
        border-radius: 1.5rem;
        height: 2000px;
        display: flex;
        flex-direction: column;
        /*width: 110%;*/
    }
    .background{
        background-color: #f0f0f0;
        height: 200px;
        border-radius: 1.5rem;
        /*margin-top: 100px;*/
    }
    .image{
        height: 200px;
        width: 100%;
        margin-top: 100px;
        justify-content: left;
        padding-left: 4rem;
        padding-top: 1.5rem;
    }
    .image img{
        height: 150px;
        width: 150px;
        object-fit: cover;
        display: inline-block;
        /*width: 200px;*/       
        /*padding-left: 2rem;*/
    }
    .info{
        width: 100%;
        /*margin-left: 12rem;*/
        margin-top: -1rem;
    }
    @media (max-width: 767px){
    .details{
        text-align: center;
    }
    .info{
        margin-left: 0rem;
    }
    .social-media{
        margin-bottom: 100px;
    }
}
.Carousel{
    justify-content: center;
}
.details{
    /*padding-top: 1.5rem;*/
}
.icons{
    justify-content: center;
}
    .basicinfo{
        text-align: center;
        background-color: #f0f0f0;
        /*padding-left: 1rem;*/
        margin-left: 0rem;
        padding-top: 0rem; 
        border-radius: 1.5rem;
    }
    @media (min-width: 768px){
    .social-media{
        width: 50%;
        margin-top: 220px;
        padding-left: 0rem;
        padding-top: 1rem;
        background-color: #f0f0f0;
        border-radius: 25px;
        margin-left: 2rem;
       /*justify-content: center;*/
    }
}
        @media (max-width: 767px){
    .details{
        text-align: center;
    }
    .info{
        margin-left: 0rem;
    }
    .social-media{
         background-color: #f0f0f0;
        margin-top: 400px;
        border-radius: 25px;
        /*justify-content: center;*/
    }
}
</style>
<body>
    <div class="container">
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
                            <p><i class='fas fa-phone-alt' style='font-size:24px;color: green'></i>&nbsp&nbspPhone</p>
                            <p><i class='fas fa-mail-bulk' style='font-size:24px'></i>&nbsp&nbspEmail</p>
                            <p><i class='fas fa-globe' style='font-size:24px;padding-left: 10px;'></i>&nbsp&nbspWebsite</p>
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
<?php
require("includes/footer.php");
?>
</html>