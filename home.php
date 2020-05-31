<?php

    require("includes/header.php");

?>
        <title>Home</title>
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
    <div class="top_head">
        
    </div>
    <br>
    
<div class="layout">
    
    <div class="container content">
        <div class="row">
            <div class="col-sm-10">
                <div class="logo">
                    <h1>Store <span class="typed-words"></span>
      </h1>
                </div>
                <form>
                    <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="What are you looking for?">
            <button class="buttonS">Search</button>
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
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
                <script src="includes/js_home.js"></script>
    <style type="text/css" data-typed-js-css="true" href="css/style_home_2.css">
       .typed-cursor{
    opacity: 1;
}

.typed-cursor .typed-cursor--blink{
    animation: typedjsBlink 0.7s infinite;
    -webkit-animation: typedjsBlink 0.7s infinite;
    animation: typedjsBlink 0.7s infinite;
}

@keyframes typedjsBlink{
    50% { opacity:0.0; }
}

@-webkit-keyframes typedjsBlink{
     0% { opacity: 1; }
     50% { opacity:0.0; }
     100% { opacity: 1; }
}

    </style>
    </body>
</html>