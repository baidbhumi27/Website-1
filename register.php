<!DOCTYPE html>
<html>	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<script src="https://code.jquery.com/jquery-2.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Tab - with Previous & Next button</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
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
.container{
	padding-bottom: 2rem;
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
.tab-content{
	margin-bottom: 0px;
}
.content-section {
  background: white ;
  padding: 10px 20px;
  border: 1px solid #dddddd;
  border-radius: 3px;
  margin-bottom: 20px;  
}
.nav-tabs{
  justify-content: center;
}
.product-tabs .nav-tabs .formtabs a:link{
  text-decoration: none;
  color: black;
  font-weight: bold;
}
.product-tabs .nav-tabs .formtabs a:hover{
  background-color: #f8049c;
}
label, textarea, legend{
	color: #f8049c;
}

.heading{
  background-image: linear-gradient(to right, #ff5f6d , #ffc371);
  padding: 1rem;
  margin-top: 0;
}
.btn{
  margin-top: 0.8rem;
  margin-left: 20%;
  padding: 1rem;
  background-color: orange;
}
.form-group input,.form-group textarea{
   background-image: linear-gradient(to right, #ff5f6d , #ffc371);
}
.tab-control{
  display: flex;
  flex-direction: row;
}
</style>
<body>
<!DOCTYPE html>
<html lang="en">



<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
    <a href="" class="navbar-brand">LOGO</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#ids">
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
</nav>
<div class="heading">
  <p><h5 class="display-2"><center>Sign Up</center></h6></p>
</div>
<br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 product-tabs">
                <ul class="nav nav-tabs">
                    <li class="active formtabs"><a href="#tab1" data-toggle="tab">Personal Details</a></li>
                    <li class="formtabs"><a href="#tab2" data-toggle="tab">Organisation's Details</a></li>
                </ul>
            </div>
        </div>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
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
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname">
                </div>

                <div class="form-group">
                  <label for="email">Official Email address</label>
                  <input type="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                  <label for="mobno">Mobile Number</label>
                  <input type="text" class="form-control" id="mobno">
                </div>

                <div class="form-group">
                  <label for="pwd">Password</label>
                  <input type="password" class="form-control" id="pwd">
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </main>
  </div>

  <div class="tab-pane" id="tab2">
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
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4 "></textarea>
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
          </fieldset>
        </form>
      </div>
    </div>
    <div class="col-md-4"></div>
    </div>
  </main>
</div>
</div>
                <div class="col-md-4"></div>
                <div class="tab-control col-md-4">
                    <a class="previous-button btn btn-warning" role="button">previous</a>
                    <a class="next-button btn btn-warning" role="button">Next</a>
                </div>
                <div class="col-md-4"></div>
            </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('.next-button').click(function(){
            $('.nav-tabs > .active').next('li').find('a').trigger('click');
            //trigger the click on the tab same like we click on the tab
        });

        $('.previous-button').click(function(){
            $('.nav-tabs > .active').prev('li').find('a').trigger('click');
            //trigger the click on the tab same like we click on the tab
        })
    </script>
</body>
</html>
