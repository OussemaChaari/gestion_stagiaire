<?php
require_once('connexiondb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$id=isset($_GET['id'])?$_GET['id']:0;
$email=isset($_GET['email'])?$_GET['email']:"";
$pw=isset($_POST['newpwd'])?md5($_POST['newpwd']):"";

$requete="update utilisateur set pwd=? where iduser=? and email=?";
$params=array($pw,$id,$email);
$resultat=$pdo->prepare($requete);
$resultat->execute($params);
header('location:login.php');
}
?>
<! DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf-8">
    <title>New Password</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>
<div class="container">
<div class="input-container" style="margin-top:20px;">
    <form method="post">
            <input minlength=4
                    class="form-control newpwd"
                    type="password"
                    name="newpwd"
                    autocomplete="new-password"
                    placeholder="Taper votre Nouveau Mot de passe"
                    required>

        </div>
        <input
                type="submit"
                value="Enregistrer"
                class="btn btn-primary btn-block"/>
    </form>
</div>
</body>
</HTML>