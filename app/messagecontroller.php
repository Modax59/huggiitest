<?php


function message(){
    $bdd = new PDO('mysql:host=$;dbname=test', 'root', 'root');
    $insertmessage = $bdd->prepare('INSERT INTO message (message,sujet,created_at) VALUES ( ?, ?, ?)');
    $insertmessage->execute(array("aze", 1,$datetime = date("Y-m-d H:i:s")));
}
