<?php

function makestartPage($pageTitle,$stylesheet){
$StartContent= <<<PAGESTART
<!doctype html>
<html lang="en">
<head>
<meta data-react-helmet="true" name="viewport"
content="width=device-width, initial-scale=1.0, minimal-ui">
<meta charset="UTF-8">
<title>$pageTitle</title>
<link href ="$stylesheet" rel ="stylesheet" type ="text/css">
</head>
<body>
<section class = "grid-container">
<div id="grid-item1">
PAGESTART;
$StartContent .="\n";
return $StartContent;
}
function pageHeader($header){
$head = <<<HEADER
<header>
<h1><a class ="active" href="$header" accesskey="H">Discover Hostels</a></h1>
HEADER;
$head .="\n";
return $head;
}

function navMenu($where2Stay,$login,$register){
/*the $where2Stay and $account variables are for the links to the necessary webpages*/
$mainMenu= <<<MENU
<nav id ="menu">
<ul>
 <li class ="dropdown">
				    <a href="#" accesskey="A" class="dropdwn">My Account</a>
			        <div class ="drop-menu">
				                 <a href="$register">Register User</a>
				                 <a href ="$login">Log in</a>
				    </div>
			</li>
			<li><a  href="$where2Stay" accesskey="K">Where To Stay</a></li>
</ul>
</nav>
</header>
</div>
MENU;
$mainMenu .="\n";
return $mainMenu;
}

function restrictedMenu($where2Stay,$logout,$register,$reservationPage){
/*the $where2Stay and $account variables are for the links to the necessary webpages*/
$mainMenu= <<<MENU
<nav id="menu">
<ul>
 <li class ="dropdown">
				    <a href="#" accesskey="A" class="dropdwn">My Account</a>
			        <div class ="drop-menu">
				                 <a href="$register">Register User</a>
				                 <a href ="$logout">Log Out</a>
				    </div>
			</li>
			<li><a  href="$where2Stay" accesskey="K">Where To Stay</a></li>
            <li><a href="$reservationPage" accesskey="">Manage Reservations</a></li>
</ul>
</nav>
</header>
</div>
MENU;
$mainMenu .="\n";
return $mainMenu;
}


/*probably best to create lists for the account link that will allow users to drop down and choose between loging in and registering*/ 
function startMain(){
return " <div id='grid-item2'>\n<main>\n";
}  
/* Between these two functions, embed the necessaty html code*/

function endMain(){
return "</main></div>\n";
}

function pageFooter($footerLinks){
$footer = <<<FOOTER
<div id="grid-item3">
<footer>
<ul>
FOOTER;
foreach($footerLinks as $key => $value1){
$footer .= "<li><a href='$key' accesskey =''>$value1</a></li>";
}

$footer .="</ul>\n</footer>\n</div>\n";
return $footer;
}

function endPage(){
return "</section>\n</body>\n</html>";
}
// a function to call if there has been a successful user register to the DB
function newUserAdded()
{
    $newUser = <<<POPUPWINDOW
    <div class="window-popup">
        <div id ="popup">
            <h2>New user successfully registered</h2>
            <p>With your account, you can reserve bookings and see more property details</p>
        </div>
    </div>
POPUPWINDOW;
    return $newUser;
}
?>