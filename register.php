<?php
    require("includes/header.php");
?>
    <title>Bootstrap Tab - with Previous & Next button</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="css/style_navbar.css">
<link rel="stylesheet" type="text/css" href="css/style_register.css">
<link rel="stylesheet" type="text/css" href="css/style_footer.css">
</head>

<body>
<?php
    require("includes/navbar.php");
    ?>
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
<?php
    require("includes/footer.php");
    ?>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="includes/js_register.js"></script>
        
</body>
</html>
