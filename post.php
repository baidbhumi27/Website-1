<?php

    require("includes/header.php");

?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link type="text/css" rel="stylesheet" href="css/style_navbar.css">
<link type="text/css" rel="stylesheet" href="css/style_post.css">
<link type="text/css" rel="stylesheet" href="css/style_footer.css">
<title>WebsiteName</title>
    </head>
<body>
<?php
        require("includes/navbar.php");
?>
    
<div class="container">
    <div class="row">
        <div class="col-sm-1">
            LOGO
        </div>
        <div class="col-sm-11">
<div id="London" class="tabcontent">
  
    <?php
        include('forms/form1.php');
    ?>
</div>

<div id="Paris" class="tabcontent">
  <?php
        include('forms/form2.php');
    ?> 
</div>

<div id="Tokyo" class="tabcontent">
  <?php
        include('forms/form3.php');
    ?>
</div>

<div id="Oslo" class="tabcontent">
  <?php
        include('forms/form4.php');
    ?>
</div>
            
<div id="story" class="tabcontent">
  <?php
        include('forms/form5.php');
    ?>
</div>      
            
<div id="Pns" class="tabcontent">
  <?php
        include('forms/form6.php');
    ?>
</div>             

<button class="tablink" onclick="openCity('London', this, 'blue')" id="defaultOpen">About</button>
<button class="tablink" onclick="openCity('Paris', this, 'blue')">Contact</button>
<button class="tablink" onclick="openCity('Tokyo', this, 'blue')">Social Media</button>
<button class="tablink" onclick="openCity('Pns', this, 'blue')">Products/Services</button>             
<button class="tablink" onclick="openCity('Oslo', this, 'blue')">Gallery</button>
<button class="tablink" onclick="openCity('story', this, 'blue')">Story</button>  
            
          </div>
     </div>
</div>        
<?php
    require("includes/footer.php");
?>
<!---->
                <script src="includes/app.js"></script>
    </body>
</html>