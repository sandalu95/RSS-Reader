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
	<div id="main">
		<header style="background-color: black; color: white; height: 150px; padding-top: 6px;">
	  	<div id="page-logo">
	  		<p class="logo-element" id="logo-first" style="padding-left: 640px;">FEE</p>
	  		<p class="logo-element" id="logo-second" style="display: inline-block;">D</p>
	  		<p class="logo-element" id="logo-third" style="display: inline-block;">IGGER</p>
	  	</div>
	  </header>
	  	  <div class="container main-form">
		  <div class="jumbotron" id="main-form-jumbo">
		  	<div>
		  		<h3>Already a member?</h3>
		  		<button class="btn btn-success" onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color: black; border: none;">Login Here</button>
		  	</div>
			<div style="margin-top: 50px;">
				<h3>A new member?</h3>
			  	<button class="btn btn-success" style="background-color: black; border: none;">Sign Up Here</button>
			</div>
		  </div>
		  <div id="id01" class="modal">
			  <form class="modal-content modal-sm animate" action="rss.php" method="POST">
			    <div class="imgcontainer">
			      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			      <img src="img_avatar2.png" alt="Avatar" class="avatar">
			    </div>

			    <div class="container login-form">
			      <label for="uname"><b>Username</b></label>
			      <input type="text" placeholder="Enter Username" name="uname" required>

			      <label for="psw"><b>Password</b></label>
			      <input type="password" placeholder="Enter Password" name="psw" required>
			        
			      <button type="submit" class="login-form-button" style="background-color: black;">Login</button>
			      <label>
			        <input type="checkbox" checked="checked" name="remember"> Remember me
			      </label>
			    </div>

			    <div class="container login-form" style="background-color:#f1f1f1">
			      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn login-form-button">Cancel</button>
			      <span class="psw">Forgot <a href="#">password?</a></span>
			    </div>
			  </form>
			</div>

	  </div>
	</div>
</body>
</html>