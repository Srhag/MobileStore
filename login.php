<script>
$('#login_button').click(function()
{
     var email = $('#email').val();
     var password = $('#password').val();
     $.ajax(
     {
       url:"login_submit.php",
       type:"POST",
       async: false,
       data: {email:email, password:password},
       success:function(data)
       {
            if(data==="Login Successfully")
            {
                window.location = 'products.php';
            }
            $('#msg').text(data);
       }
    });
}); 
$('#loginModal').submit(function( event )
{
  event.preventDefault();
});
</script>

<div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">LOGIN</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" name="LoginForm">
                <p>Don't have an account?<a href="signup.php"> Register</a></p>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" pattern=".{6,}">
                    </div>
                    <div class="text-center text-danger" id="msg"></div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="login" id="login_button" value="Login">
                    </div>
                    <div><a href="email.php">Forgot Password?</a></div>                          
                </form>
            </div>
        </div>
    </div>
</div>