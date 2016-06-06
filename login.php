<?php
session_start();
if(!empty($_POST)){

    $errors = array();
    require 'include/db.php';
    if(empty($_POST['username'])){
        $errors['username'] = "Vous avez oublié votre Pseudo";
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
        $req->execute([$_POST['username']]);
    }

    if(empty($_POST['password'])){
        $errors['password'] = "Vous avez oublié votre mot de passe";
    } else {
        $req = $pdo->prepare('SELECT password FROM users WHERE username = ?');
        $req->execute([$_POST['username']]);
        $password_hash = $req->fetch(PDO::FETCH_ASSOC)['password'];
        if (password_verify($_POST['password'], $password_hash)) {
            $_SESSION['S_username'] = $_POST['username'];
            header('location:games.php');
        } else {
            $errors['password'] = "Vous vous etez trompé dans votre mot de passe";
        }
    }
}

?>
<?php if(!empty($errors)): ?>
<div>
    <p>Erreur(s) dans le formulaire</p>
    <ul>
        <?php foreach($errors as $error){ ?>
        <li><?= $error; ?></li>
        <?php } ?>
    </ul>
</div>
<?php endif; ?>
