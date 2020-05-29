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
		/*font-weight: bold;*/
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
		padding-top: 2.5rem;
	}
	.bg_tab{
		background-color: #f0f0f0;
		border-radius: 1.5rem;
		padding-top: 1rem;
	}
	.container_small{
		padding: 2rem;
	}
	.row_small{
		width: 90%;
		margin: 5%;
		background-image: linear-gradient(to right, #ff5f6d , #ffc371);
		border-radius: 25px;
		padding-left: 2rem;
		padding-top: 2rem;
		padding-bottom: 1rem;
	}
		@media (min-width: 992px){
		.heading1,.tab2{
			font-size: 36px;
		}
	}
	@media (min-width: 768px) and (max-width: 991px){
		.heading1,.tab2{
			font-size: 24px;
		}
	}

</style>
<body>
<?php
	require("includes/header.php");
	require("includes/navbar.php");
?>
<p><h1 class="display-4"><center><b>Dashboard</b></center></h1></p>
<div class="container container_dashboard d-none d-md-block">
	<div class="row header_row">
		<div class="col-md-3 tabs heading1"><p>Brand/ Organistaion</p></div>
		<div class="col-md-3 tabs tab2"><p>Status</p></div>
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
	<div class="container container_small">
	<div class=" d-none d-block d-md-none row_small">
		<p><b>Brand/ Organistaion:&nbsp&nbsp</b>EMGE</p>
		<p><b>Status:&nbsp&nbsp</b>Approved</p>
		<p><a href="#">Review Listing</a></p>
		<p><a href="#">Edit</a></p>
	</div>
	<div class=" d-none d-block d-md-none row_small">
		<p><b>Brand/ Organistaion:&nbsp&nbsp</b>Magenta</p>
		<p><b>Status:&nbsp&nbsp</b>Pending</p>
		<p><a href="#">Review Listing</a></p>
		<p><a href="#">Complete</a></p>
	</div>
</div>

<?php
	require("includes/footer.php");
?>
</body>
</html>