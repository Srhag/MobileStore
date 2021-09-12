<?php include 'Includes/common.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart Page</title>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/style.css">
    </head>
    
    
    <body>
        <?php include 'Includes/header.php' ?>
        <div class="container" id="content">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="table">
                        <?php
                            $user_id = $_SESSION['user_id'];
                            $query="SELECT Items.Id,name,Price FROM Items INNER JOIN Users_Items ON Items.Id = Users_Items.Item_Id AND Status='Added to cart'";
                            $query_result = mysqli_query($con, $query);
                            $result = mysqli_num_rows($query_result);
                            if($result==0)
                            { ?>
                                <center>
                                    <br><br>
                                    <p id="greeting"><h2>Add items to the cart first!</h2></p>
                                    <hr>
                                    <p id="greeting"><a href="products.php">Click here to add items</a></p>
                                </center>
                            <?php }
                            else
                            { ?>
                                <table class="table table-hover text-center">
                                    <tbody>
                                        <tr></tr>
                                        <tr>
                                            <th class="text-center">Item Number</th>
                                            <th class="text-center">Item Name</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center"></th>
                                        </tr>
                                        <?php
                                        $sum = 0;
                                        while($row=  mysqli_fetch_array($query_result))
                                        { ?>
                                            <tr>
                                                <?php $sum = $sum + $row['price']; ?>
                                                <?php $id = $row['id']; ?>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['price']; ?></td>
                                                <td><a href="cart_remove.php?id=<?php echo $id; ?>" class="remove_item_link shadow"><span class="glyphicon glyphicon-remove"></span> Remove</a></td>
                                            </tr>
                                        <?php }
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td><b>Total</b></td>
                                            <td><?php echo "$sum" ?></td>
                                            <td><a class="btn btn-primary" href="success.php">Confirm Order</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'Includes/footer.php' ?>
    </body>
</html>
