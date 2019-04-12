<?php

class Server {
    private $name;
    
            function _server() {
        
    }

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function receive($client) {
        $file = fopen($client . ".txt", "r");
        $content = fgets($file, 4096);
        
        if ($content == "Hello world") {
            echo "Success le ficher de log contient Hello world";
        } else {
            echo "NOT FOUND";
        }
        fclose($file);
    }

}

class client {
    function _client($nom) {
        $name = $nom;
    }

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function send($client,$message) {
        $file = fopen($client.'.txt', 'w');
        fwrite($file, $message);
        fclose($file);
    }

}

$server = new server;
$client = new client;
$name = "log";
$client->send($name,'Hello world');

echo date('h:i:s') . "\n";
echo "Client >> Hello world";
echo '<br><br>';


echo 'Envoi du message.....';
echo '<br><br>';

sleep(5);

echo date('h:i:s') . ": serveur >>  ";
$server->receive($name);

