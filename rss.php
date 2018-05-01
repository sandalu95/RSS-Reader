<!DOCTYPE html>
<html>
<head>
	<title>RSS Reader</title>
	<link rel="stylesheet" type="text/css" href="rss.css">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="rss.js"></script>
	<script type="text/javascript" src="showRSS.js"></script>
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

		<div class="container" style="margin-top: 60px;">
		<form>
		      <label for="sel1">Select the site:</label>
		      <select class="form-control" id="sel1" onchange="showRSS(this.value)">
		      	<option value="">Select an RSS-feed:</option>
		        <option value="Google">Google News</option>
		        <option value="NBC">NBC News</option>
		        <option value="NTD">NTD News</option>
		        <option value="BBC">BBC News</option>
		        <option value="POPSCI">Popular Science</option>
		        <option value="DIGINS">Digital Inspiration</option>
		        <option value="GOOEARTH">Google Earth</option>
		        <option value="SEAENG">Search Engine</option>
		      </select> 
		</form>
		<br>
		<div id="rssOutput" style="background-color: #F1F1F2; text-align: center;">RSS-feed will be listed here...</div>
		</div>
</body>
</html>