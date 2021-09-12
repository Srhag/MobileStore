<?php
    require 'Includes/common.php';
    if(isset($_SESSION['email']))
    {
        header('location:products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Index Page</title>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/style.css">
    </head>
    <body>
        <?php include 'Includes/header.php'; ?>
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <h1>We sell Smartphones.</h1>
                    <p>Get Extra Benefits on premium Phones </p>
                    <br/>
                    <a href="products.php"><button class="btn btn-danger btn-lg active">Shop Now</button></a>                
                </div>
                </center>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-3">
                    <a href="products.php" class="remove_item_link shadow">
                        <div class="thumbnail">
                            <img src="Images/Apple iPhone 11 Pro Max.jpg" class="img-responsive" alt="Apple iPhone">
                            <div class="caption">
                                <h2>Apple iPhone</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="products.php" class="remove_item_link shadow">
                        <div class="thumbnail">
                            <img src="Images/Samsung Galaxy S20 Ultra.jpg" class="img-responsive" alt="Samsung Galaxy">
                            <div class="caption">
                                <h2>Samsung Galaxy</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="products.php" class="remove_item_link shadow">
                        <div class="thumbnail">
                            <img src="Images/OnePlus 8 Pro.jpg" class="img-responsive" alt="OnePlus">
                            <div class="caption">
                                <h2>OnePlus</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="products.php" class="remove_item_link shadow">
                        <div class="thumbnail">
                            <img src="Images/Google Pixel 4 XL.jpg" class="img-responsive" alt="Google Pixel">
                            <div class="caption">
                                <h2>Google Pixel</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>  
        <?php include 'Includes/footer.php'; ?>
    </body>
    
</html>
