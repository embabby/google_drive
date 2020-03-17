<?php 


function anagramOrNot($wordOne, $wordTwo) {

        if (strlen($wordOne) != strlen($wordTwo)) {
            // if not same size then they definitely aren't
            return false;
        }
        $wordOne_chars = str_split($wordOne);
        $wordTwo_chars = str_split($wordTwo);
        sort($wordOne_chars);
        sort($wordTwo_chars);
        
        return $wordOne_chars === $wordTwo_chars;

        //also there are a function called count_chars ( string $string [, int $mode = 0 ] ) — Return information about characters used in a string
        // Counts the number of occurrences of every byte-value (0..255) in string and returns it in various ways.



}