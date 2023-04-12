<?php

function binaryToString(array $splittedArray): string
{

    $string = null;

    for ($i = 0; $i < count($splittedArray);) {
        foreach ($splittedArray[$i] as $binary) {
            $string .= pack("H*", dechex(bindec($binary)));
        }

        return $string;
    }
    return "";
}