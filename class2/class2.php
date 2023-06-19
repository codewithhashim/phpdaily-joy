<?php

declare(strict_types=1);

$arr = [45, "tyyy", true];
// $arr = array()



array_push($arr, "PHP", 45, "C++");

// echo "<pre>";

// print_r($arr);

// echo "</pre>";


$arr2 = [
    "name" => "Dwayne J",
    "movies" => [1, 2, 3, 4, 5],
    "characters" => [
        "movie1" => "stars",
        "movie2" => "stars unseen",
        "movie3" => [
           [],
           [ "name"=> "hola",
           "releaseDate" => 12/3/34]
        ]
    ]
    ];


array_pop($arr2['characters']['movie3'][1]["name"]);

print_r($arr2['characters']['movie3'][1]["name"]);