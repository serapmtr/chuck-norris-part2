<?php


function split(string $input): array
{
    $original = "";
    $splittedArray = [];
    $splitted = explode(" ", $input);

    foreach ($splitted as $key => $value) {
        if ($key % 2 == 0) {
            if ($splitted[$key] === "0") {
                $next = $splitted[$key + 1];
                $original .= "1";
                for ($i = 0; $i < strlen($next) - 1; $i++) {
                    $original .= "1";
                }
            } else {
                $next = $splitted[$key + 1];
                $original .= "0";
                for ($i = 0; $i < strlen($next) - 1; $i++) {
                    $original .= "0";
                }
            }
        }
    }


    $counter = strlen($original) % 6;


    for ($i = 0; $i < $counter; $i++) {

        $splittedArray[$i] = str_split($original, 7);
    }

    return $splittedArray;
}