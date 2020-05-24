<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
<script src="https://code.jquery.com/jquery-2.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style type="text/css">
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
		border: 1px solid black;
	}
	.sign-in{
		background-image: linear-gradient(to right, yellow, magenta);
		border-radius: 30%;
		font-weight: bold;
	}
	.jumbotron{
		height: 772px;
	}
	.box{
		border: 1px solid black;
		width: 500px;
		height: 400px;
		margin-top: 10%;
		margin-left: 32%;
	}
	.logo{
		height: 30%;
		width: 30%;
		border: 1px solid black;
		margin-left: 35%;
		margin-top: 10%;
	}
	.search,.text{
		margin-top: 10%;
		margin-left: 10%;
		width: 80%; 
	}
	* {
  box-sizing: border-box;
}
.jumbotron{
	width: 1000px;
	margin-left: 17%;
}
.container{
	width: 100%;
	margin-top: 2%;
	border: 1px solid black;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
.logos{
	height: 200px;
	/*width: 200px;*/
	border: 1px solid black;
	margin-top: 0px;
	margin-left: 0px;
	display: inline-flex;
}
.col-lg-2{
	margin-left: 40px;
	margin-bottom: 0px;
	margin-top: 0px;
	margin-right: 0px;
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
		<ul class="nav navbar-nav">
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
	<div class="container col-lg-12">
		<div class="logos col-lg-2"></div>
		<div class="logos col-lg-2"></div>
		<div class="logos col-lg-2"></div>
		<div class="logos col-lg-2"></div>
		<div class="logos col-lg-2"></div>
		<div class="logos col-lg-2"></div>
		<div class="logos col-lg-2"></div>

		<div class="box">
			<div class="logo">LOGO</div>
		<div class="search">
		<form class="example" action="action_page.php">
  			<input type="text" placeholder="Search.." name="search">
  			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
		</div>
		</div>
	</div>
</body>
