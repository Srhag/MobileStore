<?php include './login.php'; ?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavbarLinks">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand active">Mobile Store</a>
            </div>
            <div class="collapse navbar-collapse" id="NavbarLinks">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($_SESSION['email']))
                        { ?>
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        <?php }
                        else
                        { ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                            <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                        <?php }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</nav>