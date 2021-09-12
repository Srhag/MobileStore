<?php include 'Includes/common.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password Page</title>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/style.css">
    </head>
    <body>
        <?php include 'Includes/header.php' ?>
        
        <div class="container" id="content">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">                   
                    <?php
                        if(isset($_GET['success']))
                        { ?>
                            <br><br>
                            <div class="text-center">
                                <?php echo "<p class=text-success>" . $_GET['success'] . "</p>"; ?>
                                <a href="#" data-toggle="modal" data-target="#loginModal">Click Here To Login</a>
                            </div>
                        <?php }
                        else
                        { ?>
                            <h3>Enter Your E-Mail</h3>
                            <form method="POST" action="email_script.php">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control form_row_style" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    <?php
                                        if(isset($_GET['error']))
                                        { ?>
                                            <div class="text-center"><?php echo "<p class=text-danger>" . $_GET['error'] . "</p>"; ?></div>
                                        <?php }
                                    ?>
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </form>
                        <?php }
                    ?>
                </div>
            </div>
        </div>
        
        <?php include 'Includes/footer.php' ?>
    </body>
</html>