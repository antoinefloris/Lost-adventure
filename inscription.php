<?php
session_start();
if(!empty($_POST)){

    $errors = array();
    require_once 'include/db.php';
    
    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username']) || strlen($_POST['username']) > 10 ){
        $errors['username'] = "Pseudo non valide";
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
        $req->execute([$_POST['username']]);
        $user = $req->fetch();
        if($user){
            $errors['username'] = "Ce pseudo est déjà pris";
        }
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email non valide";
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if($user){
            $errors['email'] = "Cette email est déjà utilisé";
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password'] = "Mot de passe non valide";
    }


    if(empty($errors)){
        $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $req->execute([$_POST['username'], $password, $_POST['email']]);

        $user_id = $pdo->lastInsertId();

        $_SESSION['S_username']= $_POST['username'];
        $_SESSION['S_password']= $_POST['password'];
        header('location:games.php');
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
<?php endif;
