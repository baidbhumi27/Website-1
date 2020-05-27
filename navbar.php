<!DOCTYPE html>
<html>
<head>
	<title>NAVBAR</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
<script src="https://code.jquery.com/jquery-2.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style type="text/css">
	* {
    font-family: 'Roboto', sans-serif;
}
.ul{
	text-align: center;
	color: black;
}
ul li a:link{
	color: black;
}
ul li a:visited{
	color: black;
}
ul li a:link{
		justify-content: center;
		margin-left: 20px;
		margin-right: 20px;
		color: green;
		opacity: 1;
}
.navbar{
	height: 4rem;
}
.navbar-brand{
		color: black;
		font-weight: bold;
}
.nav-item:link{
	color: black;
	font-weight: bold;
	padding: 1rem;
}
.nav-link:hover,.navbar-brand:hover{
		color: black;
		/*font-size: 1.1rem;*/
	
}
.nav-item:hover{
		background-color: magenta;
}
.sign-in{
		/*background-image: linear-gradient(to right, #fdd54f , #f8049c);*/
		border-radius: 1rem;
		font-weight: bold;
}
</style>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-warning sticky-top">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse list" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto ul">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Partner</a>
      </li>
         <li class="nav-item sign-in">
        <a class="nav-link" href="#">Sign In/Up</a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>