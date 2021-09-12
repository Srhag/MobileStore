<?php
    include 'Includes/common.php';
    if(!(isset($_SESSION['email'])))
    {
        header('lcoation:index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Success Page</title>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/style.css">
    </head>
    <body>
        <?php
            $user_id = $_SESSION['user_id'];
            $query="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'" or die(mysqli_error($con));
            $query_result = mysqli_query($con, $query);
        ?>
        <?php include 'Includes/header.php' ?>
        <div class="container" id="content">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <center>
                        <br><br>
                        <p id="greeting">Thank you for ordering form MobileStore. The order shall be delivered to you shortly.</p>
                        <hr>
                        <p id="greeting">Order some more premium smartphones <a href="products.php">here</a></p>
                    </center>
                </div>
            </div>
        </div>
        <?php include 'Includes/footer.php' ?>
    </body>
</html>