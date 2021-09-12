<!Doctype html>
<html>
    <head>
        <title>Contact Us Page</title>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/style.css">
    </head>
    <body>
        <?php include 'Includes/header.php'; ?>
        <div class="container" id="content">
            <div class="row">
                <div class="col-xs-9">
                    <h3>LIVE SUPPORT</h3>
                    <p>24 Hours | 7 Days a week | 365 days a year Libe Technincal Support.</p>
                    <p class="text-justify">
                        We provide a live support to all our customers. we have expert technicians to handle any type query a customer can face.
                        we also give some extra insurance kits to our customers which queries can be handled through websites or our customers can contact any time they required.
                    </p>
                </div>
                <div class="col-xs-3">
                    <img src="Images/LiveSupport.png" alt="Live Support" id="livesupport"> 
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-9">
                    <h3>CONTACT US</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control form_row_style" name="name" pattern="[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="login" value="Login">
                        </div>
                    </form>
                </div>
                <div class="col-xs-3">
                    <br>
                    <h3>Company Information :</h3>
                    D-14, South Extension, Block D, South Extension II, <br>New Delhi - 110049
                    <br><strong>Phone: </strong>7207-666-000
                    <br><strong>Fax: </strong>7207-666-000
                    <br><strong>Email: </strong>info@mobilestore.com
                    <br>Follow on: Facebook, Twitter
                </div>
            </div>
        </div>
        <?php include 'Includes/footer.php'; ?>
    </body>
</html>