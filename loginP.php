<div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">LOGIN</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="login_submit.php">
                <p>Don't have an account?<a href="signup.php"> Register</a></p>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}">
                    </div>
                    <?php
                        if(isset($_GET['error']))
                        { ?>
                            <div class="text-center"><?php echo "<p class=text-danger>" . $_GET['error'] . "</p>"; ?></div>
                        <?php }
                    ?>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="login" value="Login">
                    </div>
                    <div><a href="email.php">Forgot Password?</a></div>                          
                </form>
            </div>
        </div>
    </div>
</div>