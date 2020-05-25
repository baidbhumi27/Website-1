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
    
    .layout{
    border: 2px solid black;
         text-align: center;
    height: 800px;
}
.content{
/*    border: 2px solid black;*/
    display: inline-block;
    margin-top: 300px;
}
.col-sm-3{
    text-align: center;
    border: 2px solid pink;
    height: 200px;
    margin: 0 auto;
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

	.button2{
		justify-content: space-between;
		box-sizing: border-box;
		/*border: 1px solid black;*/
		padding-left: 1rem;
		padding-right: 1rem;
		background-color: #f0f0f0;
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

<!--        -->
        <div class="layout">
<div class="container content">
  <div class="row">

<div class="col-sm-3">
    <div class="logo">
       <h1><a href="home.php">Logo</a></h1> 
    </div>
    <form>
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search...">
            <span class="input-group-text"><i class='fas fa-search'></i></span>
        </div>
    </form>

    </div>
</div>
        </div>
        </div>
<!---->
 
                <script src="app.js"></script>
    </body>
</html>