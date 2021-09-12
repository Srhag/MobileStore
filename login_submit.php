<?php
    include 'Includes/common.php';
    if(empty($_POST['email']) || empty($_POST['password']))
    {
        echo 'Enter Complete Details';
    }
    else
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $regex_email = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
        if(!(preg_match($regex_email,$email)))
        {
            die("Enter Correct E-Mail Format");
        }

        if(strlen($password)<6)
        {
            die("Enter Correct Password Format");
        }

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $encrypted_password = md5($password);

        $query = "SELECT id,email FROM users WHERE email='$email' AND password='$encrypted_password'";
        $query_result = mysqli_query($con, $query);
        $result = mysqli_num_rows($query_result);
        if($result == 0)
        {
            die("No user with this information");
        }
        else
        {
            $row = mysqli_fetch_array($query_result);
            $_SESSION['email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            die("Login Successfully");
        }
    }
?>