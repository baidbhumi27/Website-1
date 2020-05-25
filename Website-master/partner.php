<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
<script src="https://code.jquery.com/jquery-2.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        

        <link type="text/css" rel="stylesheet" href="css/style.css">
        <title>Website</title>
<style type="text/css">
    .submit{
        background-color: #fdd54f;
        
    }
    .form-control{
            border: none;
    border-bottom: 2px solid black;
    border-radius: unset;
    }
    .row div p{
    background-color: white;
    height: 200px;
    }
    #form{
         background-color: white;
        height: 416px;
        padding: 35px;
    }
    .background_gradient{
        background-image: linear-gradient(to right, #fdd54f, #f8049c);
        height: 1500px;
        padding-top:40px; 
    }
    .subheader{
        margin: 0 auto; 
        border: 1px solid white;
        background-color: white;
        height: 400px;
        width: 82%;
    }
        .input-group-prepend span{
        border-radius: 10px;
    border-top-right-radius: initial;
    border-bottom-right-radius: initial;
    }
    .input-group input{
            border-radius: 10px;
    border-top-left-radius: initial;
    border-bottom-left-radius: initial;
    }
    
    .modal-content{
        border-radius: 10px;
    }
    
    .modal-header{
        background-image: linear-gradient(to right, #fdd54f, #f8049c);
            border-radius: 10px;
    border-bottom-left-radius: initial;
    border-bottom-right-radius: initial;
    }
    
    #submit{
        background-color: #fdd54f;
        border-radius: 10px;
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
    .nav-link:hover{
        background-color: #fdd54f;
        border-radius: 10px;
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
		background-image: linear-gradient(to right, #fdd54f, #f8049c);
		border-radius: 1rem;
		font-weight: bold;
	}
    </style>
    </head>
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
			<a  type="button" data-toggle="modal" data-target="#myModal" class="nav-link sign-in">Sign In/Up</a>
		</li>	
		</ul>
		</div>
		</div>
	</navbar>
   <div class="container">

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class='fas fa-user'></i></span>
    </div>
    <input type="text" class="form-control" placeholder="Your Email">
  </div>

  <div class="input-group mb-3">
   <div class="input-group-prepend">
       <span class="input-group-text"><i class='fas fa-lock'></i></span>
    </div> <input type="password" class="form-control" placeholder="Password">
    
  </div>
              <a class="float-right" href="home.php">Forgot Password?</a>
         <br><br>
    <div class="input-group mb-3">
   <div class="input-group-append">
     
        </div> <button type="submit" class="form-control submit" id="submit">Login</button>
    
  </div>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <p>New to *CompanyName*?<a type="button" href="home.php" class="btn btn-default" href="home.php"><span class="input-group-text"><i class='fas fa-user-plus'></i>&nbsp;Create Account</span></a></p>
        </div>
        
      </div>
    </div>
  </div>
  
</div>     
        
        
<div class="background_gradient">
   <div class="subheader">
  <div class="container text-center">
    <h1>Add a Subheading</h1>      

  </div>
</div>
  <div class="container text-center">    
  
  <br>
  <div class="row">
    <div class="col-sm-4">
      
      <div class="well">
      <div><p>Submit your details to join us in the initiative. We will get back to you within 24 hours.</p></div> 
      </div>
      <div class="well">
       <div> <p>Some text..</p></div> 
      </div>    
    </div>
    
    <div class="col-sm-8">
      
      <div id="form">
          <form class="form" action="/action_page.php">
  <div class="form-group col-sm-6 float-left">
    <label class="float-left" for="name">Name:</label>
    <input type="name" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group col-sm-6 float-right">
    <label class="float-left" for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
   <div class="form-group col-sm-6 float-left">
    <label class="float-left" for="phone">Phone Number:</label>
    <input type="number" class="form-control" id="phone" name="phone" required>
  </div>
  <div class="form-group col-sm-6 float-right">
    <label class="float-left" for="org">Organisation:</label>
    <input type="text" class="form-control" id="org" name="org" required>
  </div>           
  <div class="form-group col-sm-12 float-left">
      <label class="float-left" for="msg">Message</label>
      <textarea type="msg" class="form-control" id="msg" name="msg"></textarea>
  </div><br>
              <br>
  <button type="submit" class="btn btn-default submit">Submit</button>
</form>
        
        
        </div>
    </div>  
  </div>
  <hr>
</div>
           
</div>

        
         
        <script src="app.js"></script>
    </body>
</html>