<?php
    include 'Includes/common.php';
    if(!(isset($_SESSION['email'])))
    {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings Page</title>
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
                    <h3>Change Password</h3>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" placeholder="Old Password" class="form-control form_row_style" name="old_password" pattern=".{6,}">
                            
                            <input type="password" placeholder="New Password" class="form-control form_row_style" name="new_password" pattern=".{6,}">
                            <input type="password" placeholder="Re-type New Password" class="form-control form_row_style" name="retype_new_password" pattern=".{6,}">
                            <?php
                                if(isset($_GET['error']))
                                { ?>
                                    <div class="text-center"><?php echo "<p class=text-danger>" . $_GET['error'] . "</p>"; ?></div>
                                <?php }
                            ?>
                            <input type="submit" value="Change" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <?php include 'Includes/footer.php' ?>
    </body>
</html>