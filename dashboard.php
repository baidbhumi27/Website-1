<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/style_navbar.css">
<link rel="stylesheet" type="text/css" href="css/style_footer.css">
<style type="text/css">
	.container_dashboard{
		margin-bottom: 2rem;
	}
	.header_row{
		background-image: linear-gradient(to right, #ff5f6d , #ffc371);
		border-radius: 1.5rem;
		font-weight: bold;
		/*padding-top: 1rem;*/
		justify-content: center;
	}
	.tabs{
		padding-top: 1rem;
		padding-bottom: 1rem;
		text-align: center;
		word-wrap: break-word;
		justify-content: center;
	}
	.row_first{
		padding-top: 1rem;
	}
	.tab2{
		padding-top: 1.8rem;
	}
	.bg_tab{
		background-color: #f0f0f0;
		border-radius: 1.5rem;
		padding-top: 1rem;
	}
/*	@media(max-width: 767px ){
		.header_row{
			visibility: hidden;
		}
	}*/
</style>
<body>
<?php
	require("includes/header.php");
	require("includes/navbar.php");
?>
<p><h1 class="display-4"><center><b>Dashboard</b></center></h1></p>
<div class="container container_dashboard">
	<div class="row header_row d-none">
		<div class="col-md-3 tabs"><h3 class="display-5">Brand/ Organistaion</h3></div>
		<div class="col-md-3 tabs tab2"><h3 class="display-5">Status</h3></div>
		<div class="col-md-3 tabs"></div>
		<div class="col-md-3 tabs"></div>
	</div>
	<div class="row row_first">
		<div class="col-md-3 tabs">EMGE</div>
		<div class="col-md-3 tabs bg_tab">Approved</div>
		<div class="col-md-3 tabs"><a href="#">Review Listing</a></div>
		<div class="col-md-3 tabs"><a href="#">Edit</a></div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-3 tabs">Magenta</div>
		<div class="col-md-3 tabs bg_tab">Pending</div>
		<div class="col-md-3 tabs"><a href="#">Review Listing</a></div>
		<div class="col-md-3 tabs"><a href="#">Complete</a></div>
	</div>
	<hr>
</div>

<?php
	require("includes/footer.php");
?>
</body>
</html>