<?php

class Server {
    private $name;
    
            function _server() {
        
    }

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function receive($client) {
        $file = fopen($client . ".txt", "r");
        $content = fgets($file, 4096);
        
        var_dump($content);
        if ($content == "Hello world") {
            echo "Success";
        } else {
            echo "Echec";
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
$server->receive($name);

