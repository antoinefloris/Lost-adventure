<?php
session_start();
require_once 'include/db.php';
?>
  <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
  <link href="./bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
  <script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="bootstrap-3.3.6-dist/js/main.js">

  </script>


<!DOCTYPE html> 
<html lang="fr"> 
<head>
	<title>Lost Adventure</title> 
	<meta name="author" content="" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<link rel="stylesheet" href="css/stylebis.css">
	<link rel="stylesheet" href="css/reset.css">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" language="JavaScript">
    </script>
</head>
<body>
	<section id="home">
	    <h1><img id="logo" src="image/logo.png" alt="logo"></h1>
	    <ul>
	        <li><a href="https://www.facebook.com/LostAdventureJeu/?fref=ts"><img class="reseaux" src="image/fb.png" alt="facebook"></a></li>
	        <li><a href="https://twitter.com/LAdeventure"><img class="reseaux" src="image/twitter.png" alt="twitter"></a></li>
	    </ul>
	    <div id="play"><a href="game.php"><img src="image/jouer.png" alt="jouer"></a></div>
	</section>

	<section id ="reglement">
	    <div id="center">
	        <div class="regles">
	         <ul>
	            <li><img src="image/special.png" alt="" width="150px" height="150px"></li>
	             <li><p>Diriger ta boule vers le point final. Ta mission sera de récuperer le plus de diamants en un temps record.</p></li>
	         </ul>
            <ul>
                <li><img src="image/special3.png" alt="" width="150px" height="150px"></li>
                <li><p>A toi de trouver la bonne orientation du plateau pour diriger ta boule et battre le record détenu.</p></li>
            </ul>
            <ul>
                <li><img src="image/special2.png" alt="" width="150px" height="150px"></li>
                <li><p>Des nombreux trophées t'attendent, donne le meilleur de toi même pour les collectionner.</p></li>
            </ul>
	        </div>
	    </div>

	</section>
	<section id="images">
	        <img class="imgwidth" src="images/fond2.jpg" alt=""></li>
			<img class="imgwidth" src="images/fond.jpg" alt=""></li>
	</section>

	<section id="nouveaute">
	    <div id="contenunew">
	    <div id ="textenew">
	        <h2>NOUVEAUTÉS</h2>
	        <p>Découvrez toutes les nouveautés de Lost Adventure, des skins, des badges, des boosters, des jeux concours. Chaque semaine une surprise vous attend.</p>
	    </div>
	        <div id="imagenew">
	         <ul>
	            <li><img src="image/special.png" alt="" width="150px" height="150px"></li>
	            <li><p>Nouveau badge spécial, arriverz-vous à l'obtenir ? Venez vite essayer</p></li>
	         </ul>
	                <ul>
	                    <li><img src="image/special2.png" alt="" width="150px" height="150px"></li>
	                    <li><p>Nouveau badge spécial, arriverz-vous à l'obtenir ? Venez vite essayer</p></li>
	                </ul>
	        </div>
	    </div>
	</section>

	<section id="recommandation">

	        <div class="com1"><img src="image/commentaire1.png" alt="" width="750px" height="270px"></div>
	        <div class="com2"><img src="image/commentaire2.png" alt="" width="750px" height="270px"></div>
	        <div class="com3"><img src="image/commentaire3.png" alt="" width="750px" height="270px"></div>

	</section>


	<section id="partenaire">

	    <ul>
	        <li><img src="image/twitch.png" alt="" width="100px" height="30px"></li>
	        <li><img src="image/jeux.png" alt="" width="100px" height="30px"></li>
	        <li><img src="image/nolife.png" alt="" width="100px" height="30px"></li>
	    </ul>

	</section>
	
</body>
</html>


