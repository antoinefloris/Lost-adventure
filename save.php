<?php
session_start();
require_once 'include/db.php';


$sql="SELECT globalscore FROM users WHERE username = '".$_SESSION['S_username']."'";
$response = array('state' => null);
$stmt = $pdo->query($sql);

while($row=$stmt->fetch()){
	if($_GET['globalscore']>$row[0]){
		$sql="UPDATE users SET `starsscore`=:starsscore, `globalscore`=:globalscore, `timescore`=:timescore WHERE username='".$_SESSION["S_username"]."'";
		$stmt=$pdo->prepare($sql);
		$stmt->bindValue(':starsscore', $_GET["collectscore"]);
		$stmt->bindValue(':globalscore', $_GET["globalscore"]);
		$stmt->bindValue(':timescore', $_GET["timescore"]);
		$stmt->execute();
		// echo "fini <br>";
		// echo $_GET["collectscore"]."<br>";
		// echo $_GET["globalscore"]."<br>";
		// echo $_GET["timescore"]."<br>";
		$response = array('state' => 'success', 'message' => 'score enregistré');
	}else{
		// echo "rien a faire";
		$response = array('state' => 'success', 'message' => 'score mauvais');
	}
}


header('Content-Type: application/json');
echo json_encode($response);