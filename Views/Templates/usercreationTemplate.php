<!doctype html>
<html>

	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Create an Account</title>
        <?php 
            print "<style>";
            include __DIR__ . "/../Styles/navigationStyles.css";
            include __DIR__ . "/../Styles/loginStyles.css";
            print "</style>";
		?>
	</head>
	
	<body>
	<div class="topBar">
		<div class="title"><b>Pokedex</b></div>
			<ul class="nav">
				<li class="navItem"><a href="showPokemonSearch.php">Home</a></li>
			</ul>
		</div>
	</div>
		<h1>Create an Account</h1>
		<div class="wrapper">
			<div class="inner">
				<form method="post" action="addUser.php">
					
					<div class="item">Username:<input name="user" size="15" type="text" ><br></div>
					<div class="item">Password:<input name="pass" size="15" type="password" ><br></div>
					
					<input class="item" TYPE="submit" NAME="btnRegister" VALUE="Register">
				
				</form>
			</div>
		</div>
	</body>

</html>