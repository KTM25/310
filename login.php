<?php
session_start(); $username = $password = $userError = $passError = $date = '';
if(isset($_POST['sub'])){
  $username = $_POST['username']; 
  $password = $_POST['password'];
  $date =  date('h:i m/d/Y');
  
  if(($username === 'admin' && $password === 'password') || ($username === 'ktmangus' && $password === 'ktmangus25')){
    $_SESSION['login'] = true; 
    header('LOCATION:login.php'); 
    die();
  }
  // if($username !== 'admin' | $username !== 'ktmangus' ){
  //   $userError = 'Invalid Username on ';
  // }

  // if($password !== 'password' | $password !== 'ktmangus25'){
  //   $passError = 'Invalid Password on ';
  // }
  if(($username !== 'admin' && $password !== 'password') | ($username !== 'ktmangus' && $password !== 'ktmangus25') ){
    $passError = 'Invalid Username or Password on ';
  }
}
?>


<!Doctype html>
<html>
<head>
    <meta name='Author' content='Kevin Mangus' name='Description' content='Kevin M. Login Form' name='keywords' content='HTML, CSS, XML'>
    <title>Login Page</title>
    <link rel='stylesheet' href='./style.css' type='text/css' />
</head>

<body>
  <div class='header'><h1>Login Form Page</h1> </div>
    <div class='wrapper'>
        

        <nav class="navigation">
            <ul>
               <li><a class="active" href="../index.html">Home</a></li>
            </ul>
        </nav>
        
        <form name='input' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>

        <label for='username'></label>
        <input type='text' value='<?php echo $username; ?>' id='username' name='username' placeholder='Enter Password' />

        <!--<div class='error'>
           <?php echo $userError; echo $date; ?>
        </div>-->

        <label for='password'></label>
        <input type='password' value='<?php echo $password; ?>' id='password' name='password' placeholder='Enter Password' />

        <div class='error'>
          <?php echo $passError; echo $date; ?>
        </div>
        <input type='submit' value='loginbtn' name='sub' />
  </form>
        <!--<form name='input' class="form"  action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
          <div class="container" >

            <br/>
            <label for='username'></label>
            
            <input type='text' value='<?php echo $username; ?>' placeholder='Enter Username' id=username name='username' required>

            <div class='error'>
              <?php echo $userError; ?>
            </div>

            <label for='password'></label>
            <input type='password' value='<?php echo $password; ?>' placeholder="Enter Password" id='password' name='password' required/>

            <button type='Submit' class='loginbtn'>Login</button>

            <div class='error'>
              <?php echo  $passError; ?> 
            </div>
            <br/>

            <div class='container' style='background-color: #f1f1f1'>
                <button type='cancel' class='cancelbtn' >Cancel</button>
            </div>
          </div>
        </form>-->

        <div class='footer'>
            &copy; Copyright 2017, <!-- &copy get the copyright symbol -->
            Kevin Mangus
        </div>
    
    </div> <!-- end of wrapper -->

</body>
</html>
