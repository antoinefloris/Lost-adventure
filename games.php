<?php
session_start();
require_once 'include/db.php';

$req = $pdo->prepare('SELECT id, globalscore FROM users WHERE username = ?');
$req->execute([$_SESSION['S_username']]);
$user = $req->fetch();
if($user['globalscore'] == null){
	$user['globalscore'] = 0;
}
?>
  <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>

  </script>

<!DOCTYPE html> 
<html lang="fr"> 
<head>
	<title>Lost Adventure</title> 
	<meta name="author" content="Véronique Choquet" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta content="http://canonical-url-com-de-votre-article" property="og:url">
	<meta content="http://url-absolue-de-votre-image" property="og:image"> <!-- image en 200x200px -->
	<meta content="Titre de l'article" property="og:title">
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		<!--2
		body {
			font-family: Helvetica, Verdana, Arial, sans-serif;
			background-color: white;
			color: black;
			text-align: center;
		}
		a:link, a:visited {
			color: #000;
		}
		a:active, a:hover {
			color: #666;
		}
		p.header {
			font-size: small;
		}
		p.header span {
			font-weight: bold;
		}
		p.footer {
			font-size: x-small;
		}
		div.content {
			margin: auto;
			width: 1210px;
			padding-top: 65px;
		}
		div.broken,
		div.missing {
			margin: auto;
			position: relative;
			top: 50%;
			width: 193px;
		}
		div.broken a,
		div.missing a {
			height: 63px;
			position: relative;
			top: -31px;
		}
		div.broken img,
		div.missing img {
			border-width: 0px;
		}
		div.broken {
			display: none;
		}
		div#unityPlayer {
			cursor: default;
			height: 600px;
			width: 1210px;
		}
		-->
	</style>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<script type='text/javascript' src='https://ssl-webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/jquery.min.js'></script>
		<script type="text/javascript">
		<!--
		var unityObjectUrl = "http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject2.js";
		if (document.location.protocol == 'https:')
			unityObjectUrl = unityObjectUrl.replace("http://", "https://ssl-");
		document.write('<script type="text\/javascript" src="' + unityObjectUrl + '"><\/script>');
		-->
		</script>
		<script type="text/javascript">
		<!--
			var config = {
				width: 1210, 
				height: 600,
				params: { enableDebugging:"0" }
				
			};
			var u = new UnityObject2(config);

			jQuery(function() {

				var $missingScreen = jQuery("#unityPlayer").find(".missing");
				var $brokenScreen = jQuery("#unityPlayer").find(".broken");
				$missingScreen.hide();
				$brokenScreen.hide();
				
				u.observeProgress(function (progress) {
					switch(progress.pluginStatus) {
						case "broken":
							$brokenScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$brokenScreen.show();
						break;
						case "missing":
							$missingScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$missingScreen.show();
						break;
						case "installed":
							$missingScreen.remove();
						break;
						case "first":
						break;
					}
				});
				u.initPlugin(jQuery("#unityPlayer")[0], "Build.unity3d");
			});
			var globalscore;
			var collectscore;
			var scoretime;
			
		function Getglobalscore(a){
			 globalscore = a;
				
		}
		function Getcollectscore(b){
		 	collectscore = b;		
		}
		
		function GetendTime(c){
			scoretime = c;
			result(collectscore,globalscore,scoretime);
		}
		function result(collectscore,globalscore,scoretime) {
				  collectscore = parseInt(collectscore,10);
				  globalscore = parseInt(globalscore,10);
				  scoretime = parseInt(scoretime,10);
			      $('.popups').addClass('hidden');

			      $('.content').addClass('hidden');
			      $('.alerte').removeClass('hidden');
			      $('.level-score .values.diamonds').text(collectscore);
			      $('.level-score .values.time').text(scoretime + 's');
			      $('.level-score .values.score').text(globalscore);

			      

				  /*$(document).ready(function () {
			  	  var a = document.createElement('a');
			  	  $("a").html("Ajouter mon score");
				  $("a").attr("href", "save.php?collectscore=" + collectscore+"&timescore="+scoretime+"&globalscore="+globalscore);
				  $("a").appendTo('body');
			  });*/	 
		}

	$(document).ready(function(){
	   $('body').on('click', '.btns-score-nav .nav-next', function(e){
	   		e.preventDefault();
	   		console.log('click to next monde, save score');

				  console.log(collectscore,globalscore,scoretime);
	   		$.ajax({
		        url: "save.php",
		        type: 'GET',
		        data: {'collectscore': parseInt(collectscore,10), 'timescore': parseInt(scoretime,10), 'globalscore': parseInt(globalscore,10)},
			  }).done(function(data) {
			    console.log(data);
			    $('.levelsnav').removeClass('hidden');          
			    $('.alerte').addClass('hidden');          
			  }).error(function(data){
			  	console.log(data);
			  	$('.levelsnav').removeClass('hidden');         
			    $('.alerte').addClass('hidden');     
			  });
	   });
	});
		</script>
    <script type="text/javascript" language="JavaScript">

    $(document).ready(function(){
    	$('.content').addClass('hidden');
	   $("#classementbtn").click(function(e){
	   	e.preventDefault();
	      $('.levelsnav').addClass('hidden');
	      $('.classements').toggleClass('hidden');
	      $('#logo_hidden').addClass('hidden');
	      $('.trophees').addClass('hidden');
	      $('.skins').addClass('hidden');
	   });

	   $("#tropheebtn").click(function(e){
	   	e.preventDefault();
	      $('.levelsnav').addClass('hidden');
	      $('.trophees').toggleClass('hidden');
	      $('#logo_hidden').addClass('hidden');
	      $('.classements').addClass('hidden');
	      $('.skins').addClass('hidden');
	   });

	   $(".closewindow").click(function(e){
	   	e.preventDefault();
	      $('.popups').addClass('hidden');
	      $('.levelsnav').removeClass('hidden');
	   });

	   $("#basket").click(function(e){
	   	e.preventDefault();
	      $('.levelsnav').addClass('hidden');
	      $('.skins').toggleClass('hidden');
	      $('.classements').addClass('hidden');
	      $('.trophees').addClass('hidden');
	      $('.booster').addClass('hidden');
	   });


	   $(".boostbtn").click(function(e){
	   	e.preventDefault();
	      $('.booster').removeClass('hidden');
	   	  $('.skins').addClass('hidden');
	   });

	   $(".basketbtn").click(function(e){
	   	e.preventDefault();
	      $('.booster').addClass('hidden');
	   	  $('.skins').removeClass('hidden');
	   });

	   $(".level1,.level2,.level3").click(function(e){
	   		e.preventDefault();
	      $('.content').removeClass('hidden');
	   	  $('.levelsnav').addClass('hidden');
	   });

	});
	
    </script>
</head>
<body class="noscroll">
<!-- 	<div id="loader_title">
		<h1><img id="loader" src="images/logo.png"></h1>
	</div> -->
	<div id="body">
		<div id="nav">
			<ul>
				<li><a id="classementbtn" href=""><img src="images/Illustrations/classement.png"></a></li>
				<li><a id="tropheebtn" href=""><img src="images/Illustrations/trophee.png"></a></li>
				<li><a href=""><img src="images/Illustrations/gameplay.png"></a></li>
				<li><a id="basket" href=""><img src="images/Illustrations/basket.png"></a></li>
				<li><a href=""><img src="images/Illustrations/settings.png"></a></li>
			</ul>
		</div>
		<div id="credits">
			<ul>
				<li><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/LostAdventureJeu/?fref=ts" target="_blank"><img id="fb" src="images/fb.png"></a></a></li>

				<li><a href="http://twitter.com/share" class="twitter-share-button">Tweet</a></li>
			</ul>
		</div>
		<div id="joueurdiv">
			<img class="panelavatar" src="images/Illustrations/panelavatar.png">
			<p id="joueur"><?=$_SESSION['S_username'];?></p>
			<p><span id="scorejoueur"><?=$user['globalscore'];?></span></p>
			<a href="unset.php"><img id="cross" src="images/Illustrations/cross.png"></a>
		</div>

		<div class="content">
			<div id="unityPlayer">
				<div class="missing">
					<a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
						<img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
					</a>
				</div>
				<div class="broken">
					<a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now! Restart your browser after install.">
						<img alt="Unity Web Player. Install now! Restart your browser after install." src="http://webplayer.unity3d.com/installation/getunityrestart.png" width="193" height="63" />
					</a>
				</div>
			</div>
		</div>

		<div class="popups alerte hidden">
			<div class="relative class_relative relative_trophee">
				<div class="content-popup">
					<div class="stars stars1"></div>
					<div class="clear"></div>
					<div class="level-score">
						<div><span class="title title-time">Temps: </span><span class="values time">1m22</span></div>
						<div><span class="title title-diamonds">Diamants: </span><span class="values diamonds">24</span></div>
						<div><span class="title title-score">Score: </span><span class="values score">2400</span></div>
					</div>
					<img class="sharefb" src="images/Illustrations/sharefb.png" alt="partage fb">
					<div class="btns-score-nav">
						<a class="nav-menu"href="#"><img src="images/Illustrations/menu.png" alt="partage fb"></a>
						<a class="nav-reload" href="#"><img src="images/Illustrations/reload.png" alt="partage fb"></a>
						<a class="nav-next" href="#"><img src="images/Illustrations/right.png" alt="partage fb"></a>
					</div>
				</div>
			</div>
		</div>


		<div class="levelsnav">
			<ul id="levelsnav">
				<li><a href="" class="level1"><img src="images/Illustrations/mondehome.png"></a></li>
				<li><a href="" class="level2"><img src="images/Illustrations/mondehome2.png"></a></li>
				<li><a href="" class="level3"><img src="images/Illustrations/mondehome3.png"></a></li>
			</ul>
		</div>

		<div class="popups classements hidden">
			<div class="relative class_relative">
				<img class="pannel" src="images/Illustrations/classement_menu.png">
					<a class="closewindow" href=""><img id="closeone" src="images/Illustrations/cancel.png"></a>
				<div class="absolute abslistetwo">
					<a href=""><img class="menu_classement" src="images/Illustrations/globalbtn.png"></a>
					<a href=""><img class="menu_classement hidden" src="images/Illustrations/mondesbtn.png"></a>
					<div class="scrollclass">
						<div class="scrollclassliste">
							<?php
								$i=0;
								$sql='SELECT username, starsscore FROM users ORDER BY starsscore DESC';
								$results = $pdo->query( $sql );
								while($row = $results->fetchObject()){
									$i++;
							?>
							
							<div>
								<img class="namepanel" src="images/Illustrations/classname.png">
								<img class="numbers" src="images/Illustrations/classnumber.png">
								<span class="numbers_class"><?php echo $i ?></span>
								<p class="scorename"><?php echo $row->username ?></p>
								<p class="scorepts"><?php echo $row->starsscore ?></p>
							</div>

							<?php
								};
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="popups trophees hidden">
			<div class="relative class_relative relative_trophee">
				<img class="pannel panel_trophee" src="images/Illustrations/recompenses_menu.png">
					<a class="closewindow" href=""><img id="closetwo" src="images/Illustrations/cancel.png"></a>
				<div class="absolute absliste">
					<div class="badgesliste">
						<img src="images/Trophees/trophee01bis.png">
						<img src="images/Trophees/trophee02bis.png">
						<img src="images/Trophees/trophee03.png">
						<img src="images/Trophees/trophee04bis.png">
						<img src="images/Trophees/trophee05bis.png">
						<img src="images/Trophees/trophee06.png">
						<img src="images/Trophees/trophee07bis.png">
						<img src="images/Trophees/trophee08.png">
						<img src="images/Trophees/trophee09.png">
						<img src="images/Trophees/trophee10.png">
					</div>

				</div>
			</div>
		</div>

		<div class="popups skins hidden">
			<div class="relative class_relative relative_trophee">
				<img class="pannel panel_trophee" src="images/Illustrations/skins.png">
				<a class="closewindow" href=""><img id="closetwo" src="images/Illustrations/cancel.png"></a>
				<a class="boostbtn" href=""><img id="boostbtn" src="images/Illustrations/boostbtn.png"></a>
				</div>
			</div>
		</div>

		<div class="popups booster hidden">
			<div class="relative class_relative relative_trophee">
				<img class="pannel panel_trophee" src="images/Illustrations/boosters.png">
				<a class="closewindow" href=""><img id="closetwo" src="images/Illustrations/cancel.png"></a>
				<a class="basketbtn" href=""><img id="boostbtn" src="images/Illustrations/basket.png"></a>
				</div>
			</div>
		</div>

		

	</div>

	
</body>
</html>
