<?php

    session_start();

    function dd($var) {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        
        die();
    }

    function connect () {
        $link = new PDO(
            'mysql:dbname=Boutique;host=localhost:8889', 
            'root', 
            'root'
        );

        return $link;
    }

// Attention c'est pour MAc à changer pout WAMP