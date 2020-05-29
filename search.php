<?php
    require("includes/header.php");
?>
<title>Search</title>
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
<link type="text/css" rel="stylesheet" href="css/style_navbar.css">
<link type="text/css" rel="stylesheet" href="css/style_modal.css">
<link type="text/css" rel="stylesheet" href="css/style_search.css">
<link type="text/css" rel="stylesheet" href="css/style_footer.css">

</head>

<body>
	<?php
        require("includes/navbar.php");
        require("includes/modal.php");
?>
	<div class="row mycontainer">
		<div class="buttons">
			<button type="button" class="btn btn-default button2" >All</button>
		    <button class="btn btn-default dropdown-toggle button2" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Location
  			</button>
		    <button type="button" class="btn btn-default button2">Industry</button>
		</div>
		<div class="search">
		<form>
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search..."><button>
            <span class="input-group-text"><i class='fas fa-search'></i></span></button>
        </div>
    </form>
		</div>
		<div class="filters">
			<button type="button" class="btn btn-default"><b>Filters</b></button>
		    <button type="button" class="btn btn-default button3">Company</button>
		    <button type="button" class="btn btn-default button3">Product</button>
		    <button type="button" class="btn btn-default button3">Service</button>
		</div>	
	</div>
	<br>
	<br>

  <div class="container-fluid mycontainer1">
    	<?php
		require('includes/connection.php');
    // session_start();
    $sql="SELECT * FROM companies";
        $result = mysqli_query($connection, $sql);
        
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo '
          <div class="row myrow">

                    		<div class="col-sm-4 text-center myflex-logo">
  								<img src="images/cr.png" alt="John Doe" class="avatar">
  							</div>
  							<div class="col-sm-4 myflex-content">
                            <ul>
    							<li><h5>'.$row["name"].'</h5></li>
    							<li><span><i class="fas fa-industry"></i>&nbsp;</span>'.$row["industry"].'</li>
    							<li><span><i class="fas fa-handshake"></i>&nbsp;</span>'.$row["products"].'</li>
                                <li><span><i class="fas fa-globe"></i>&nbsp;</span>'.$row["products"].'</li>
    							<li><span><i class="fas fa-map-marker-alt"></i>&nbsp;</span>'.$row["locations"].'</li>
  							</div>
  						
  				<div class="col-sm-4 myflex-social">
                		<h4>Follow Us on -> </h4>
                	<div class="myflex-social-logo">
                    	<i class="fab fa-facebook" style="font-size:40px;color:#3b5998"></i>
                    	<i class="fab fa-twitter" style="font-size:40px;color:rgb(29, 161, 242);"></i>
                    	<i class="fab fa-google-plus" style="font-size:40px;color:rgb(214, 72, 54);"></i>
                    	<i class="fab fa-instagram" style="font-size:40px;color:black"></i>
                	</div>
            	</div>
        	</div>	
                
   						';
                   
   				}
   			}
   		?>
</div>
    <?php
    require("includes/footer.php");
    ?>
</body> 
</html>