<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
<script src="https://code.jquery.com/jquery-2.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="Website-Master/style.css">
<style type="text/css">
	* {
    font-family: 'Roboto', sans-serif;
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
		background-image: linear-gradient(to right, #fdd54f , #f8049c);
		border-radius: 1rem;
		font-weight: bold;
}
.mycontainerfluid{
	padding-top: 2rem;
}
.mainform{
	border: 1px solid black;
}
.main-form{
	padding-top: 20px;
}
.content-section {
  background: white;
  padding: 10px 20px;
  border: 1px solid #dddddd;
  border-radius: 3px;
  margin-bottom: 20px;	
}
#myTab{
	justify-content: center;
}
.formtabs a:link{
	text-decoration: none;
	color: black;
	font-weight: bold;
	/*background-color: #f8049c;*/
}
.formtabs a.active{
	background-color: #f8049c;
}
.formtabs a:hover{
	background-color: #f8049c;
}
.mystyle{
	background-color: #f8049c;	
}

legend{
	color: #f8049c;
}
label{
	color: #f8049c;
	font-weight: bold;
	font-family: Arial;
}
input,textarea{
	background-image: linear-gradient(to right, #ff5f6d , #ffc371);
}
.heading{
	background-image: linear-gradient(to right, #ff5f6d , #ffc371);
	padding: 1rem;
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
<div class="heading">
	<p><h6 class="display-4"><center>Sign Up</center></h6></p>
</div>
<br>
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item formtabs">
    <a class="nav-link active tablink1" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Details</a>
  </li>
  <li class="nav-item formtabs">
    <a class="nav-link tablink2" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Organisation's Details</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<main role="main" class="container">
  <div class="row">
  	<div class="col-md-4"></div>
    <div class="col-md-4 main-form">
 <div class="content-section">
        <form method="POST" action="">
            <fieldset class="form-group">
                <legend class="border-bottom mb-4">Join Today</legend>
                <div class="form-group">
    				<label for="firstname">First Name</label>
    				<input type="text" class="form-control" id="firstname">
  				</div>
  				<div class="form-group">
    				<label for="lastname">Last Name:</label>
    				<input type="text" class="form-control" id="lastname">
  				</div>
                <div class="form-group">
    				<label for="email">Official Email address:</label>
    				<input type="email" class="form-control" id="email">
  				</div>
  				  <div class="form-group">
    				<label for="mobno">Mobile Number</label>
    				<input type="text" class="form-control" id="mobno">
  				</div>
  				<div class="form-group">
    				<label for="pwd">Password:</label>
    				<input type="password" class="form-control" id="pwd">
  				</div>
  				<div class="checkbox">
    				<label><input type="checkbox"> Remember me</label>
  				</div>
  				<button type="submit" class="btn btn-warning">Submit</button>
            </fieldset>
        </form>
    </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</main>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  	 <main role="main" class="container">
  <div class="row">
  	<div class="col-md-4"></div>
    <div class="col-md-4 main-form">
 <div class="content-section">
        <form method="POST" action="">
            <fieldset class="form-group">
                <legend class="border-bottom mb-4">Join Today</legend>
             	<div class="form-group">
    				<label for="exampleFormControlTextarea1">Description</label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="4	"></textarea>
  				</div>
  				<br>
  				<div class="input-group">
  					<div class="custom-file">
    					<input type="file" class="custom-file-input" id="inputGroupFile">
    					<label class="custom-file-label" for="inputGroupFile04"><b>Upload LOGO</b></label>
  					</div>
				</div>
				<br>
  				<div class="checkbox">
    				<label><input type="checkbox"> Remember me</label>
  				</div>
  				<button type="submit" class="btn btn-warning">Submit</button>
            </fieldset>
        </form>
    </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</main>
</div>
</div>

</body>
</html>