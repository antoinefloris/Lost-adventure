<?php
session_start();
require_once 'include/db.php';
?>
  <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>

  </script>

<!DOCTYPE html> 
<html lang="fr"> 
<head>
	<title>Lost Adventure</title> 
	<meta name="author" content="Véronique Choquet" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/reset.css">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
	   $("#btninscription").click(function(e){
	   	e.preventDefault();
	      $('.co').addClass('hidden');
	      $('.inscription').removeClass('hidden');
	   });

	   $(".insc_btn").click(function(e){
	        $('.co').removeClass('hidden');
	        $('.inscription').addClass('hidden');
	   });
	});
	
    </script>
</head>
<body class="noscroll">
	<div id="body">
		<h1 id="logo_hidden"><a href="index.html"><img id="logo" src="images/logo.png"></a></h1>

		<div class="popups co">
			<div class="relative co">
				<img class="pannel" src="images/Illustrations/connexion_menu.png">
				<div class="absolute">
					<form action="login.php" method="post">
						<input type="text" class="btninsc" id="Pseudo"  type="text" name="username" value="" placeholder="Nom"></br>
						<input type="password" class="btninsc" id="MDP" type="text" name="password" value="" placeholder="Mot de passe"></br>
						<input class="co_bts co_bts_one" type="image" src="images/Illustrations/seconnecterbis.png" alt="Submit" />
						<a id="btninscription" href=""><img class="co_bts" src="images/Illustrations/sinscrirebis.png"></a>
						<a href=""><img class="co_fb" src="images/Illustrations/connexionfb.png"></a>
					</form>
				</div>
			</div>
		</div>

		<div class="popups inscription hidden">
			<div class="relative coinscription">
				<img class="pannel" src="images/Illustrations/inscription_menu.png">
				<div class="absolute">
					<form action="inscription.php" method="post">
						<input class="btninsc" type="text" id="Pseudo" name="username" value="" placeholder="Nom"></br>
						<input class="btninsc btninsctwo" type="email" id="mail"  name="email" value="" placeholder="Adresse mail"></br>
						<input class="btninsc btninsctwo" type="password" id="MDP"  name="password" value="" placeholder="Mot de passe"></br>
						<input class="btninsc btninsctwo" type="password" id="CMDP"  name="password_confirm" value="" placeholder="Confirmer le mot de passe"></br>
						<a href=""><img id="previousco" src="images/Illustrations/left.png"></a>
						<input class="insc_btn" id="Inscription" type="image" src="images/Illustrations/sinscrire.png" alt="Submit" />
					</form>
				</div>
			</div>
		</div>

	</div>

	
</body>
</html>
