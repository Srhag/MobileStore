<?php 
    function check_if_added_to_cart($con,$item_id)
    {
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
        $query_result = mysqli_query($con, $query);
        $result = mysqli_num_rows($query_result);
        if($result>=1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
?>