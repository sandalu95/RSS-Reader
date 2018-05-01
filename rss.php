<!DOCTYPE html>
<html>
<head>
	<title>RSS Reader</title>
	<link rel="stylesheet" type="text/css" href="rss.css">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="rss.js"></script>
</head>
<body>
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <p style="color: white; padding-left: 15px; margin-top: 20px;">sandalukalpanee@gmail.com</p>
	  <hr style="background-color: white; color: white;">
	  <a href="#">Feeds</a>
	  <a href="#">Account Settings</a>
	  <hr style="background-color: white; color: white;">
	  <a href="#">Log Out</a>
	</div>
	<div id="main">
		<header style="background-color: black; color: white; height: 150px; padding-top: 6px;">
	  	<!-- Use any element to open the sidenav -->
	  	<span id="menu-icon"onclick="openNav()">
	  		<div class="menu-icon first-bar"></div>
			<div class="menu-icon"></div>
			<div class="menu-icon"></div>
	  	</span>
	  	<div id="page-logo">
	  		<p class="logo-element" id="logo-first">FEE</p>
	  		<p class="logo-element" id="logo-second">D</p>
	  		<p class="logo-element" id="logo-third">IGGER</p>
	  	</div>
	  </header>

		<form class="example" action="/action_page.php" style="margin:auto;max-width:600px; width: 600px; padding-top: 40px; padding-left: 40px;">
		  <input type="text" placeholder="Search.." name="search2" style="width:300px; margin-right: 10px;">
		  <button type="submit" style="margin-top: 8px;"><i class="fa fa-search"></i></button>
		</form>
	</div>
</body>
</html>