<?php
//ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7); //7 day cookie life time. Seconds * Minutes * Hours * Day 
    session_start();

$username = $password = $userError = $passError = $date = $successLogin = $logout = '';

// if(isset($_SESSIONLogoutON['use']))   // Checking whether the session is already there or not if 
//                               // true then header redirect it to the home page directly 
//  {
//     header("Location:login.php"); 
//  }

if(isset($_POST['sub'])){
  $username = $_POST['username']; 
  $password = $_POST['password'];
  $date =  date('m/d/Y h:i');
 
 //hash for user is subaru
  
  if(($username == 'ct310' && $password == (md5($password) == '3aaec86181ee6974b99d893b4c1eb5b5'))  || ($username == 'ktmangus' && $password == (md5($password) == '0b9c5120ea86155f02d81e6f2f90c900')) || 
    ($username == 'Newell' && $password == (md5($password) == 'b17d786a74bba26294479f94ca4dfd43'))){

    $_SESSION['username'] = $username; 
    //  echo '<script type="text/javascript"> window.open("protected.php","_self");</script>';
    $successLogin = 'Successful Login on ';
  }

  else{
    $passError = 'Invalid Username or Password on ';
  }

  if(isset($_SESSION['username'])){ //checks that it is the same user
    echo "You logged in as ", $_SESSION['username'];
    $logout = "<a href='./logout.php'>Logout</a>";
  }
  
}
?>

<!Doctype HTML>
<html>  
<head>
   
    <title>Login</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    
    <?php include('../header.php'); ?>

        <div id="wrapper">

            <?php include('../navigation.php'); ?>
            
            <div class="formwrap">
            <form name='input' action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'> 

                <label for='username'></label>
                <input type='text' value='<?php echo $username; ?>' id='username' name='username' placeholder='Enter Username'/>

                <label for='password'></label>
                <input type='password' value='<?php echo $password; ?>' id='password' name='password' placeholder='Enter Password' />

                <div class='login'>
                    <?php echo $passError; echo $successLogin; echo $date; ?>
                </div>

                <input type='submit' value='Login' name='sub' class="loginbtn" />
            </form>
            </div>

            <?php include('../footer.php') ?>
            
        </div><!-- End of wrapper -->
  
</body>

</html>
