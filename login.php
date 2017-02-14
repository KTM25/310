<!Doctype html>
<html>
<head>
    <meta name="Author" content="Kevin Mangus" name="Description" content="Kevin M. Login Form" name="keywords" content="HTML, CSS, XML">
    <title>Login Page</title>
    <link rel="stylesheet" href="./style.css" type="text/css" />
</head>

<body>

    <div class="wrapper">
        <div class="header"><h1>Login Form Page</h1> </div>


        <form id="login" action="login.php">
            
            <div class="container">
                
                <label><b>Username</b></label>

                <input type="text" placeholder="Enter Username" name="uname" required> <!--creates the username box end of required to make sure its inputed-->

                <label><b>Password</b></label>

                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="Submit" class="loginbtn">Login</button>

            </div><!-- end of class container -->

            <div class="container" style="background-color: #f1f1f1">
                <button type="cancel" class="cancelbtn" >Cancel</button>
            </div>

        </form>

        <div class="footer">
            &copy; Copyright 2017, <!-- &copy get the copyright symbol -->
            Kevin Mangus
        </div>
    
    </div> <!-- end of wrapper -->

</body>
</html>

