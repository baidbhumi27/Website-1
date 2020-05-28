<?php

    require("includes/header.php");

?>
        
<link type="text/css" rel="stylesheet" href="css/style_navbar.css">
<link type="text/css" rel="stylesheet" href="css/style_modal.css">
<link type="text/css" rel="stylesheet" href="css/style_home.css">
<link type="text/css" rel="stylesheet" href="css/style_footer.css">
<title>WebsiteName</title>
    </head>
<body>
        
<?php
        require("includes/navbar.php");
        require("includes/modal.php");
?>
        
<!--Home page content: LOGO and Search bar-->
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
    <?php
    require("includes/footer.php");
    ?>
<!---->
                <script src="app.js"></script>
    </body>
</html>