<?php
    include 'Includes/common.php';
    if(!(isset($SESSION['email'])))
    {
        header('location:index.php');
    }
    
    if(empty($_POST['old_password']) || empty($_POST['new_password']) || empty($_POST['retype_new_password']))
    {
        header('location:settings.php?error=Enter Complete Details');
        die();
    }
    
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $retype_new_password = $_POST['retype_new_password'];
    
    if(strlen($old_password)<6 || strlen($new_password)<6 || strlen($retype_new_password)<6)
    {
        header('location:settings.php?error=Enter Correct Password Format');
        die();
    }
    
    $old_password = mysqli_real_escape_string($con, $_POST['old_password']);
    $encrypted_old_password = md5($old_password);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    $encrypted_new_password = md5($new_password);
    $retype_new_password = mysqli_real_escape_string($con, $_POST['retype_new_password']);
    $email = $_SESSION['email'];
    
    if($new_password!=$retype_new_password)
    {
        header('location:settings.php?error=Passwords do no match');
    }
    else
    {
        $check_query = "SELECT * FROM users WHERE email='$email' AND password='$encrypted_old_password'";
        $check_query_result = mysqli_query($con, $check_query);
        $result = mysqli_num_rows($check_query_result);
        if($result==0)
        {
            header('location:settings.php?error=Old Password does not matches');
        }
        else
        {
            $update_query = "UPDATE users SET password='$encrypted_new_password' WHERE email='$email'";
            $update_query_result = mysqli_query($con, $update_query);
            header('location:products.php');
        }
    }
?>