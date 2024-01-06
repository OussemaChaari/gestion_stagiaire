<?php
require_once('connexiondb.php');

require_once('../les_fonctions/fonctions.php');

if (isset($_POST['email']))
    $email = $_POST['email'];
else
    $email = "";

$user = rechercher_user_par_email($email);

if ($user != null) {
    $id = $user['iduser'];
    $email = $_POST['email'];
    $id_encoded = urlencode($id);
$email_encoded = urlencode($email);
header("Location: passwordNew.php?id={$id_encoded}&email={$email_encoded}");

    

}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Initiliser votre mot de passe</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container col-md-6 col-md-offset-3">
    <br>
    <div class="panel panel-primary ">
        <div class="panel-heading">Initiliser votre mot de passe</div>
        <div class="panel-body">
            <form method="post" class="form">

                <div class="form-group">
                    <label class="control-label">
                        Veuillez saisir votre email de récuperation
                    </label>

                    <input type="email" name="email" class="form-control"/>
                </div>

                <button type="submit" class="btn btn-success">Initialiser le mot de passe</button>

            </form>
        </div>
    </div>


    <div class="text-center">


    </div>


</div>
</body>
</html>



