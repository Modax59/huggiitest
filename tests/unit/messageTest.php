<?php
use PHPUnit\Framework\TestCase;

class messageTest extends \PHPUnit\Framework\TestCase
{
    function bdd(){
        new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
    }

    function message(){
        $bdd = $this->bdd();
        $insertmessage = $bdd->prepare('INSERT INTO message (message,sujet,created_at) VALUES ( ?, ?, ?)');
        $insertmessage->execute(array("aze", 1,$datetime = date("Y-m-d H:i:s")));
    }

    public function testTrueAssertsToTrue(){
        $this->assertTrue($this->message());
    }
}



