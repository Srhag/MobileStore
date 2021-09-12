<?php
    include 'Includes/common.php';
    if(isset($_POST['signup']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['contact']) || empty($_POST['city']) || empty($_POST['address']))
        {
            header('location:signup.php?error=Enter Complete Details');
            die();
        }
    }
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    
    $regex_name = "/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/";
    if(!(preg_match($regex_name, $name)))
    {
        header('location:signup.php?error=Enter Correct Name');
    }
    $regex_email = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
    if(!(preg_match($regex_email,$email)))
    {
        header('location:signup.php?error=Enter Correct E-Mail Format');
    }
    if(strlen($password)<6)
    {
        header('location:signup.php?error=Enter Correct Password Format');
    }
    $regex_contact = "/^[0-9]{10}$/";
    if(!(preg_match($regex_contact,$contact)))
    {
        header('location:signup.php?error=Enter Correct Phone Number');
    }
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con ,$_POST['password']);
    $encrypted_password = md5($password);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    
    $query = "SELECT id FROM users WHERE email='$email'";
    $query_result = mysqli_query($con,$query);
    $result = mysqli_num_rows($query_result);
    if($result>0)
    {
        header('location:signup.php?error=Email-ID already exists!!');
    }
    else
    {
        $insert_query = "INSERT INTO users(name,email,password,contact,city,address) VALUES('$name','$email','$encrypted_password','$contact','$city','$address')";
        $insert_query_result = mysqli_query($con,$insert_query);
        $id = mysqli_insert_id($con);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $id;
        header('location:products.php');
    }
?>