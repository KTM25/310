<!Doctype HTML>
<html>
    
<head>
   
    <title>Homepage</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./style.css">

</head>
<body>

    <?php include 'header.php' ?>


        <div id="wrapper">

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color: #FCFFF5">Project 1 Page</a> 
                    <a class="navbar-brand" href="#" ><span class="glyphicon glyphicon-log-in"></span> Login</a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#global-navbar">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>      
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse in" id="global-navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="./home.html">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingrediants<span class="caret"></span></a>   
                            <ul class="dropdown-menu" id="dropdown-menu">
                                <li><a href="#">Cayenne</a></li>
                                <li><a href="#">Saffron</a></li>
                                <li><a href="#">Spearmint</a></li>
                            </ul>
                        </li>
                        <li><a href="./about/about.html">About</a></li>
                        <li> </li>
                    </ul>
                </div>
                    <div id="mySidenav" class="sidenav" >
                        <div class="navbar-collapse collapse in" id="global-navbar">
                            <ul class="nav navbar-nav">
                                


                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            </ul>

                        </div>
                        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
                     </div>

            </nav>     
            
            
                <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
                    



           

    <!-- create three coulumn with lg and md size-->

            <div class="container-fluid">
                <div class="row visible-on">
                    
                    <div id="sidebar" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <ul class="list-group">
                          <li class="list-group-item"><a href="https://www.cs.colostate.edu/~ct310/yr2017sp/">CT310 Home</a></li>
                          <li class="list-group-item"><a href="https://www.cs.colostate.edu/~ct310/yr2017sp/home_assignments.php">Assignments</a></li>
                          <li class="list-group-item"><a href="https://www.cs.colostate.edu/~ct310/yr2017sp/home_progress.php">Progress</a></li>
                        </ul>
                    </div>

                <!-- Add Main Content here -->

                    <div id="middle" class="col-md-6 col-lg-6">
                            <p> 
                            Main Content
                            </p>
                            
                            <p>
                            There is unrest in the Galactic Senate. Several thousand solar systems have declared their intentions to leave the Republic. This separatist movement, under the leadership of the mysterious Count Dooku, has made it difficult for the limited number of Jedi Knights to maintain peace and order in the galaxy. Senator Amidala, the former Queen of Naboo, is returning to the Galactic Senate to vote on the critical issue of creating an ARMY OF THE REPUBLIC to assist the overwhelmed Jedi....
                            </p>
                            

                    </div>

                    <?php include 'footer.php' ?>

                </div>
            </div>
            
        </div><!-- End of wrapper -->

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "#EFECCA";
}

</script>
     
</body>

</html>