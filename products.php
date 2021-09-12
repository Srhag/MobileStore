<?php include 'Includes/common.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Products Page</title>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/style.css">
    </head>


    <body>
        <?php
        include 'Includes/header.php';
        include 'check_if_added.php';
        ?>

        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="text-center">Welcome to our Mobile Store!</h1>
                <p class="text-center">We have the premium smartphones for you. No need to hunt around, we have all premium brands in one place.</p>
            </div>

            <?php
                $items_query = "SELECT * FROM Items";
                $items_query_result = mysqli_query($con, $items_query);
                while ($row = mysqli_fetch_array($items_query_result))
                { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class ="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="text-center" id="item_name"><?php echo $row['Name']; ?></h4>
                        </div>
                        <div class="panel-body">
                            <div  class="thumbnail" id="thumbnail_remove_border">
                                <img src="Images/<?php echo $row['Name']; ?>.jpg" class="img-responsive" alt="<?php echo $row['Name']; ?>">
                            </div>
                            <div class="caption" id="item_caption">
                                <span><?php echo $row['Size']; ?> Screen Size,</span>
                                <span><?php echo $row['Internal_Storage']; ?> Internal Memory,</span>
                                <span><?php echo $row['RAM']; ?> RAM</span>
                                <p><strong>Processor:</strong> <?php echo $row['Processor']; ?></p><span></span>
                                <p><strong>Features:</strong> <?php echo $row['Features']; ?></p>
                            </div>
                            <p class="text-center"><strong>Price: &#8377;<?php echo $row['Price']; ?>.00</strong></p>

                            <?php
                            if (!(isset($_SESSION['email']))) {
                                ?>
                                <a role="button" class="btn btn-primary btn-block" href="#" data-toggle="modal" data-target="#loginModal">Order Now</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart($con, $row['Id'])) {
                                    ?>
                                    <a role="button" class="btn btn-primary btn-block" href="#" disabled>Added To Cart</a>
                                <?php
                                } else {
                                    ?>
                                    <a role="button" class="btn btn-primary btn-block" name="add" value="add" href="cart_add.php?id=<?php echo $row['Id']; ?>">Add To Cart</a>
                                <?php
                                }
                            }
                            ?>
                        </div> 
                    </div>
                </div>
            <?php }
            ?>

        </div>

        <?php include 'Includes/footer.php'; ?>
    </body>
</html>