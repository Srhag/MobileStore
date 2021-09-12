<?php
    include 'Includes/common.php';
    if(isset($_SESSION['email']))
    {
        header('location:products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Page</title>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/style.css">
    </head>
    <body>
        <?php include'Includes/header.php'; ?>
        
        <div class="container" id="content">
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="Images/SmartPhoneImages.png" alt="Smart Phones" width="100%">
                    <div class="caption text-center">All Premium Smartphones</div>
                </div>
                <div class="col-xs-4 col-xs-offset-1">
                    <h1>SIGN UP</h1>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control form_row_style" name="name" pattern="[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            <input type="email" placeholder="Email" class="form-control form_row_style" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <input type="password" placeholder="Password" class="form-control form_row_style" name="password" pattern=".{6,}">
                            <input type="text" placeholder="Contact" class="form-control form_row_style" name="contact" pattern="[0-9]{10}$">
                            <input type="text" placeholder="City" class="form-control form_row_style" name="city">
                            <input type="text" placeholder="Address" class="form-control form_row_style" name="address">
                            <?php
                                if(isset($_GET['error']))
                                { ?>
                                    <div class="text-center"><?php echo "<p class=text-danger>" . $_GET['error'] . "</p>"; ?></div>
                                <?php }
                            ?>
                            <input type="submit" class="btn btn-primary" name="signup" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    <?php include 'includes/footer.php'; ?>    
    </body>
    
</html>
