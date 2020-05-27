
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SEARCH</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
<script src="https://code.jquery.com/jquery-2.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style type="text/css">
body{
		background-image: linear-gradient(to right, yellow, magenta);
}
.ul{
		text-align: center;
}
.nav-link:link{
		margin-left: 20px;
		margin-right: 20px;
		color: black;
		opacity: 1;
}
.navbar-brand{
		color: black;
		font-weight: bold;
}
.nav-link:hover,.navbar-brand:hover{
		color: black;
}
.sign-in{
		background-image: linear-gradient(to right, yellow, magenta);
		border-radius: 1rem;
		font-weight: bold;
}

.mycontainer {
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		align-content: center;
		margin-top: 50px;
		width: 80%;
		margin-left: 10%;
		border-radius: 25px;
		height: 200px;
		background-color: white;
}
.buttons, .filters, .search {
		display: flex;
		justify-content: center;
}
.buttons{
		align-self:  center;
		margin-top: -2rem;
		width: 20%;
}
.buttons button{
		background-color: #f0f0f0;
		margin-right: 1rem;
		box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
    }
.filters .button3{
/*	box-shadow: 0.1rem 0.1rem;*/
}
.buttons button:active{
	border-color: 1px solid black;
}

.filters{
		align-self: center;
		width: 40%;
}
.filters .button3{
		margin-right: 1rem;
		display: flex;
		justify-content: space-between;
}
.button3:hover{
		border: 3px solid orange;
    border-top: 0;
    border-left: 0;
    border-right: 0;
}
p{
	font-weight: bold;
}
.search{
		width: 80%;
}
.search form {
		width:  100%;
		display: flex;
		justify-content: center;

}
.button2{
		justify-content: space-between;
		box-sizing: border-box;
		padding-left: 1rem;
		padding-right: 1rem;
		background-color: #f0f0f0;
}
input[type=text] {
  border: none;
  width: 60%;
  background: white;
  border-radius: 25px;
  background: #ddd;
}

/*
    .myflex-logo {
        display: table-cell; 
    }    
*/
/*
.avatar {
  vertical-align: middle;
    text-align: center;
  width: 100px;
    max-width: 100%;
    height: auto;
    border: 3px solid black;
}    
*/
    .avatar{
        
   top: 50%;
   left: 50%;
   width: 200px;
   height: 150px;
/*
   margin-top: -75px; 
   margin-left: -100px;
*/
        margin-top: 9px;
    margin-left: 5px;
        max-width: 100%;
        border: 3px solid black;
    }

    .col-sm-4{
        
        padding: 15px;
    }

    .myflex-content ul{
            line-height: 20px;
    list-style: none;
    font-size: 15px;
    }
    .myrow{
        width: 99%;
        background-color: #fff;
        border-radius: 15px;
        border: 2px solid black;
        margin: auto;
        margin-top: 15px;
/*        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);*/
    }
    .myrow:hover {
        background-color: #ffda9b;
        box-shadow: 8px 4px 8px 4px rgba(0, 0, 0, 0.2);
    }
    .mycontainer1{
            background-color: #f2f2f2;
            border-radius: 25px;
            width: 75%;	
            padding: 1rem;
            
    }
    @media screen and (max-width:1200px) {
  .row div {
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
    }
    
    .row .search form {
        width: 50%;
    }

    
</style>
<body>
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
			<a href="#" class="nav-link sign-in">Sign In/Up</a>
		</li>	
		</ul>
		</div>
		</div>
	</navbar>
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
		require('connection.php');
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
</body> 
</html>