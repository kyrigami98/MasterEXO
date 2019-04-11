<?php

class Server {

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function receive($client) {
        $file = fopen($client . "txt", "r");
        $content = fgets($file, 4096);
        fclose($file);

        if ($content == "Hello World") {
            echo "Success";
        } else {
            echo "Echec";
        }
    }

}

class client {

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function send($client,$message) {
        $file = fopen($client.'txt', 'w');
        fwrite($file, $message);
        fclose($file);
    }

}

$server = new server;
$client = new client;
$server->receive($client->send(boss,'Hello world'));

