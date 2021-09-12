<?php
    include 'Includes/common.php';
    if(!(isset($SESSION['email'])))
    {
        header('location:index.php');
    }
    if(empty($_POST['email']))
    {
        header('location:email.php?error=Enter E-Mail');
        die();
    }
    
    $email  = $_POST['email'];
    
    $regex_email = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
    if(!(preg_match($regex_email,$email)))
    {
        header('location:signup.php?error=Enter Correct E-Mail Format');
    }
    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $query = "SELECT id FROM users WHERE email='$email'";
    $query_result = mysqli_query($con,$query);
    $result = mysqli_num_rows($query_result);
    if($result==0)
    {
        header('location:email.php?error=User does not exists!!');
    }
    else
    {
        $new_password = "Password@123";
        $encrypted_new_password = md5($new_password);
        $update_query = "UPDATE users SET password='$encrypted_new_password' WHERE email='$email'";
        $update_query_result = mysqli_query($con, $update_query);
        header('location:email.php?success=A default password is sent to your E-Mail');
    }
?>