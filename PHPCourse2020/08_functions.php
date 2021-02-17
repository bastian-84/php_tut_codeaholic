<?php

// Function which prints "Hello I am TheCodeholic"

// Create sum of two functions

// Create function to sum all numbers using ...$nums
/* $sum = function(...$numbers){
    echo '<pre>';
    var_dump($numbers);
    echo '</pre>';
}; */
/* function sum(...$newArr){
    echo '<pre>';
    var_dump($newArr);
    echo '</pre>';
};
sum(
    'new',
    'indexes',
    'of',
    'new array'
); */

function sum(...$newArr){
    $sum = 0;
    foreach($newArr as $num) $sum += $num; {
        return $sum;
    }
};
$sum = sum(
    1, 2, 3, 4, 5
);
echo $sum . '<br />';
// Arrow functions


