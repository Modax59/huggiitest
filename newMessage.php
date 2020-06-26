<?php
include ('navbar.php');
$bdd = new PDO('mysql:host=ot7g3.myd.infomaniak.com;dbname=ot7g3_huggii', 'ot7g3_modax', 'Petitpain59470');

$id = $_GET['id'];
$datetime = date("Y/m/d:H:i:s");
if(isset($_POST['message']) AND !empty($_POST['message']))
{
    $insertmessage = $bdd->prepare('INSERT INTO message (message, sujet,created_at) VALUES ( ?, ?, ?)');
    $insertmessage->execute(array($_POST['message'], $id,$datetime));
    header('Location: sujet.php?id='.$id);
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center py-3">Nouveau Message</h1>
    <form action="" method="post">
        <textarea class="form-control form-control-lg"  name="message" placeholder="Votre message"></textarea>
        <button name="formmessage"  type="submit" class="btn btn-primary mt-3">Valider</button>
    </form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
