
var globalscore;
var collectscore;
var scoretime;

function Getglobalscore(a){
alert(a);
 globalscore = a;
	
}
function Getcollectscore(b){
alert(b);
collectscore = b;
		
}

function GetendTime(c){
	 
alert(c);
 scoretime = c;
result(collectscore,globalscore,scoretime);
}
function result(collectscore,globalscore,scoretime) {
	  collectscore =parseInt(collectscore,10);
	  globalscore=parseInt(globalscore,10);
	  scoretime=parseInt(scoretime,10);
	  console.log(collectscore,globalscore,scoretime);
	  $(document).ready(function () {
  	  var a = document.createElement('a');
  	  $("a").html("Ajouter mon score");
	  $("a").attr("href", "save.php?collectscore=" + collectscore+"&timescore="+scoretime+"&globalscore="+globalscore);
	  $("a").appendTo('body');
  });	 
}