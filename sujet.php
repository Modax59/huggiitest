<?php
include ('navbar.php');
$bdd = new PDO('mysql:host=ot7g3.myd.infomaniak.com;dbname=ot7g3_huggii', 'ot7g3_modax', 'Petitpain59470');


$id = $_GET['id'];


$reqmessage = $bdd->prepare('SELECT * FROM message where sujet = ?');
$reqmessage->execute(array($id));
$message = $reqmessage->fetchAll();

$reqsujet = $bdd->prepare('SELECT * FROM sujet where id = ?');
$reqsujet->execute(array($id));
$sujet = $reqsujet->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?= $sujet['title'] ?></title>
</head>
<body>
<div class="container">
    <div class="card text-center m-3 border border-light">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <h3>Sujet : <?= $sujet['title'] ?></h3>
            </blockquote>
        </div>
    </div>
    <?php foreach ($message as $item) {
        ?>
        <div class="card m-3">
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <?= $item['message'] ?>
                    <footer class="blockquote-footer text-right"><cite title="Source Title"><?= $item['created_at'] ?></cite>
                    </footer>
                </blockquote>
            </div>
        </div>

        <?php
    }
    ?>
    <div class="text-right p-3">
        <a href="newMessage.php?id=<?=$id?>" class="btn btn-primary">
            Nouveau message
        </a>
    </div>
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
</html>

