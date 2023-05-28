<?php

// session_start();
// function dd($var)
// {
//     echo "<pre>";
//     var_dump($var);
//     echo "</pre>";

//     die();
// }
// function connect()
// {
//     $link = new PDO(
//         'mysql:dbname=boutique;host=localhost:8889',
//         'root',
//         'root'
//     );
//     return $link;
// }


// //Version pour PC

session_start();

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    die();
}

function connect()
{
    $link = new PDO(
        'mysql:dbname=Boutique;host=localhost',
        //vérifier que la BDD est la bonne et le host également
        'root',
        ''
    );

    return $link;
}

//Attention c'est pour MAc à changer pout WAMP
