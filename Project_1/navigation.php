<?php 

if(session_id() == '') {
    session_start();
}
//session_start(); //check if its the same session
$logout = $logged_in = $login = $question = '';
if(isset($_SESSION['username'])){ //checks that it is the same user
    $logout = "<a href='../login/logout.php'>Logout</a>";
    $logged_in = "<a href='#' style='float: right; margin-top: -50px; width:100%; text-align:center; pointer-events: none;'>" . $_SESSION['username'] . "</a>";
    $question = "<a class='hidden-sm hidden-md hidden-lg' href='../login/logout.php' pointer-events: none;>". "Currently in as " . $_SESSION['username'] . ". Logout?" . "</a>";
}   

?>


<!DOCTYPE html>
<html lang="en">
	<head>

        		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Author" content="Kevin Mangus and Jake Newell" name="Description" content="Ingredients project" name="keywords" content="HTML, CSS, XML">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        
	</head>


	<body>
		<div id="wrapper">

			<nav class="navbar navbar-inverse">

				<div class="container-fluid">

					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

							<span class="icon-bar"></span>       
							<span class="icon-bar"></span>      
							<span class="icon-bar"></span>  

						</button>

						<a class='navbar-brand'' href='#'' style='color: #FCFFF5'>Ingredient Website</a>

					</div> <!-- end of navbar-header-->

				<div class="collapse navbar-collapse" id="myNavbar"> <!-- this is what creates the hamburger menu when collapsed to a smaller page -->
					<ul class="nav navbar-nav">

						<li class='active' id='home'><a href='../home/home.php'>Home</a></li> <!-- Sets home to be depressed or active. In this menu it adds it to the nav and to the hamburger menu -->

						<li class="dropdown hidden-md hidden-lg">
							<a class='dropdown-toggle hidden-sm hidden-md hidden-lg' data-toggle='dropdown' href='#'>Ingrediants<span class='caret'></span></a>   
							<!-- data-toggle enables the dropdown and needs to be named dropdown and span w/ class will create the symbol -->
							<ul class="dropdown-menu"> <!-- dropdown-menu puts the assignments under the assignment dropdown -->
								<li><a href='#'>Cayenne</a></li>
                                <li><a href='#'>Saffron</a></li>
                                <li><a href='#'>Spearmint</a></li>
							</ul>   
						</li><!--end of class dropdown-->
                        <li><a class="hidden-sm hidden-md hidden-lg" href='../about/about.php'>About</a></li>
                        <li><a class="hidden-sm hidden-md hidden-lg" href='../login/login.php'>Login </a></li>
                        <li><?php echo $question ?></li>
                        
					</ul>
						<span id='menuSpan' style='' class='hidden-xs' onclick='openNav()'>&#9776; Menu</span>	
				</div><!-- end of collapse navbar-collapse -->
                
				</div><!-- end of container-fluid-->
			</nav>

<div id='mySidenav'' class='sidenav'' >
    <a href='#'' class='closebtn'' onclick='closeNav()'>&times;</a>

    <?php echo $logged_in ?>
    <li><a href='../home/home.php'>Home</a></li>
    <li class='dropdown' style="height: auto; margin-top: -20px; ">
        <a class='dropdown-toggle'' data-toggle='dropdown'' href='#'>Ingrediants<span class='caret' id='caret'></span></a>   
        <ul class='dropdown-menu' id='dropdown-menu'>
            <li><a href='#'>Cayenne</a></li>
            <li><a href='#'>Saffron</a></li>
            <li><a href='#'>Spearmint</a></li>
        </ul>
    </li>
    
    <a href='../about/about.php'>About</a>
    <a href='../login/login.php'>Login</a>
    <?php echo $logout;  ?> 
</div>
		
		</div><!--end of wrapper-->

        <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    // document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    // document.body.style.backgroundColor = "#EFECCA";
}
</script>
	</body>
</html>