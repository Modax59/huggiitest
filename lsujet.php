<?php
include ('navbar.php');
$bdd = new PDO('mysql:host=ot7g3.myd.infomaniak.com;dbname=ot7g3_huggii', 'ot7g3_modax', 'Petitpain59470');

$reqsujet = $bdd->prepare('SELECT * FROM sujet ');
$reqsujet->execute();
$test = $reqsujet->fetchAll();
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
    <h1 class="m-3 text-center">Liste des sujets</h1>
    <div class="text-right p-3">
        <a class="btn btn-primary" href="newSujet.php">
            Nouveau sujet
        </a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Sujet</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>


        <?php
        foreach ($test as $item) {
            ?>
            <tr>
                <td><?= $item['title'] ?> </td>
                <td><a  href="sujet.php?id=<?php echo $item['id']?>" class="btn btn-primary">Voir les messages</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

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
