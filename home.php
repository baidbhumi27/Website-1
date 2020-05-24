<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <title>Website</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a class="active list" href="home.php">Home</a></li>
        <li><a class="list" href="home.php">Categories</a></li>
        <li><a class="list" href="home.php">Partner</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a type="button" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> SignUp/Login </a></li>
      </ul>
    </div>
  </div>
</nav>
        <div class="layout">
<div class="container">
  <div class="row">

<div class="col-sm-3">
    <div class="logo">
       <h1><a href="home.php">Logo</a></h1> 
    </div>
    <form>
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search...">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
        </div>
    </form>

    </div>
</div>
        </div>
        </div>
        <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>

    <a id="forgot" href="home.php">Forgot Password?</a>
              <br>
  <div class="input-group">
      <button id="submit" type="submit" class="form-control btn btn-warning" name="submit">Login</button>
  </div>
</form>
        </div>
        <div class="modal-footer">
            <p>New to CompanyName? <a href="home.php"> Register</a> </p>
        </div>
      </div>
            </div>
        </div>
        
          
                <script src="app.js"></script>
    </body>
</html>