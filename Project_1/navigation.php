<!DOCTYPE html>
<html>
<nav class='navbar navbar-inverse'>
    <div class='container-fluid'>
        <div class='navbar-header'>
            <a class='navbar-brand'' href='#'' style='color: #FCFFF5'>Project 1 Page</a>
        </div>
                    
        <ul class='nav navbar-nav'>
            <li class='active' id='home'><a href='./home.html'>Home</a></li>
        </ul>
        
        <span id='menuSpan' style='' onclick='openNav()'>&#9776; Menu</span>
    </div>
</nav>     
            
<div id='mySidenav'' class='sidenav'' >
<!-- <a href='javascript:void(0)'' class='closebtn'' onclick='closeNav()'>&times;</a>-->
    <a href='#'' class='closebtn'' onclick='closeNav()'>&times;</a>
                    
    <li class='dropdown'>
        <a class='dropdown-toggle'' data-toggle='dropdown'' href='#'>Ingrediants<span class='caret' id='caret'></span></a>   
        <ul class='dropdown-menu' id='dropdown-menu'>
            <li><a href='#'>Cayenne</a></li>
            <li><a href='#'>Saffron</a></li>
            <li><a href='#'>Spearmint</a></li>
        </ul>
    </li>
    
    <a href='./about/about.html'>About</a>
    <a href='#'>Login</a>
</div>

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

</html>
        
