
<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
<script src="https://code.jquery.com/jquery-2.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	.navbar-toggler-icon{
		/*border: 1px solid black;*/
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
		/*flex-basis: 4rem;*/
		/*justify-content: space-between;*/
		/*border: 1px solid black;*/
		width: 20%;
	}
	.buttons button{
		background-color: #f0f0f0;
		margin-right: 1rem;
	}

	.filters{
		align-self: center;
		width: 40%;
	}
	.filters .button3{
		margin-right: 1rem;
		display: flex;
		justify-content: space-between;
		border: 1px solid black;
		border-radius: 1rem;
		background-color: orange;
	}
	.button3:hover{
		background-color: magenta;
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
		/*border: 1px solid black;*/
		padding-left: 1rem;
		padding-right: 1rem;
		background-color: #f0f0f0;
	}

.fa{
	border-radius: 25px;
}
input[type=text] {
  border: none;
  width: 60%;
  background: white;
  border-radius: 25px;
  background: #ddd;
}
.container-fluid{
	border: 1px solid black;
}

.row1{
	width: 100%;
}
.mycontainerfluid{
	display: flex;
}
.company_single{
	display: flex;
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
			<button type="button" class="btn btn-default button2">All</button>
		    <button class="btn btn-default dropdown-toggle button2" type="button" id="	" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Location
  			</button>
		    <button type="button" class="btn btn-default button2">Industry</button>
		</div>
		<div class="search">
		<form action="action_page.php">
	      <input type="text" placeholder="&nbsp Search.." name="search">
	      <button type="submit" class="button1"><i class="fa fa-search"></i></button>
    	</form>
		</div>
		<div class="filters">
			<button type="button" class="btn btn-default">Filters</button>
		    <button type="button" class="btn btn-default button3">Company</button>
		    <button type="button" class="btn btn-default button3">Product</button>
		    <button type="button" class="btn btn-default button3">Service</button>
		</div>	
	</div>
<!-- <div class="container-fluid mycontainerfluid">
   <div class="col-md-8">
   	<div class="col-md-12 company_single">
   		 <?php
		require('connection.php');
    session_start();
    $sql="SELECT * FROM companies";
        $result = mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo '
   							<div class="col-md-4">'.$row["name"].'</div>
   							<div class="col-md-8">
   								<h5>'.$row["name"].'</h5>
                                <h5>'.$row["industry"].'</h5>
                                <h5>'.$row["products"].'</h5>
                                <h5>'.$row["location"].'</h5>
   							</div>';
   				}
   			}
   				?>
   	</div>
   </div>
    <div class="col-md-4">
      <div class="content-section">
        <h3>Our Sidebar</h3>
        <p class='text-muted'>You can put any information here you'd like.
          <ul class="list-group">
            <li class="list-group-item list-group-item-light">Latest Posts</li>
            <li class="list-group-item list-group-item-light">Announcements</li>
            <li class="list-group-item list-group-item-light">Calendars</li>
            <li class="list-group-item list-group-item-light">etc</li>
          </ul>
        </p>
      </div>
    </div>
  </div>
</body> -->
</html>