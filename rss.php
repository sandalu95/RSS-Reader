<!DOCTYPE html>
<html>
<head>
	<title>RSS Reader</title>
	<link rel="stylesheet" type="text/css" href="rss.css">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script type="text/javascript" src="rss.js"></script>
</head>
<body>
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="#">About</a>
	  <a href="#">Services</a>
	  <a href="#">Clients</a>
	  <a href="#">Contact</a>
	</div>
	<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
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
	  <div class="container main-form">
		  <div class="jumbotron" id="main-form-jumbo">
		  	<div>
		  		<h3>Already a member?</h3>
		  		<button class="btn btn-success">Login Here</button>
		  	</div>
			<div style="margin-top: 50px;">
				<h3>A new member?</h3>
			  	<button class="btn btn-success">Sign Up Here</button>
			</div>
		  </div>
		  <div id="id01" class="modal">
			  <form class="modal-content animate" action="/action_page.php">
			    <div class="imgcontainer">
			      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			      <img src="img_avatar2.png" alt="Avatar" class="avatar">
			    </div>

			    <div class="container">
			      <label for="uname"><b>Username</b></label>
			      <input type="text" placeholder="Enter Username" name="uname" required>

			      <label for="psw"><b>Password</b></label>
			      <input type="password" placeholder="Enter Password" name="psw" required>
			        
			      <button type="submit">Login</button>
			      <label>
			        <input type="checkbox" checked="checked" name="remember"> Remember me
			      </label>
			    </div>

			    <div class="container" style="background-color:#f1f1f1">
			      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			      <span class="psw">Forgot <a href="#">password?</a></span>
			    </div>
			  </form>
			</div>

	  </div>
	</div>
</body>
</html>