<?php

// Create array
/* $arrFruits = [
    'Banana',
    'Apple',
    'Orange'
];
$arrFruits2 = array(
    'Birne',
    'Cherry',
    'Limette'
); */
// Print the whole array
/* echo '<pre>';
var_dump($arrFruits);
echo '</pre>'; */
/* echo '<pre>';
var_dump($arrFruits2);
echo '</pre>';  */



// Get element by index
//echo $arrFruits[0].'<br />';

// Set element by index


// Check if array has element at index 2


// Append element
/* $arrFruits[] = 'Peach';

echo '<pre>';
var_dump($arrFruits);
echo '</pre>'; */

// Print the length of the array

// Add element at the end of the array
/* array_push($arrFruits, 'Nektarine');
 */
/* echo '<pre>';
var_dump($arrFruits);
echo '</pre>'; */

// Remove element from the end of the array
/* array_pop($arrFruits);
echo '<pre>';
var_dump($arrFruits);
echo '</pre>'; */
// Add element at the beginning of the array
/* array_unshift($arrFruits, 'Nektarine');

echo '<pre>';
var_dump($arrFruits);
echo '</pre>'; */
// Remove element from the beginning of the array
/* array_shift($arrFruits);
echo '<pre>';
var_dump($arrFruits);
echo '</pre>'; */
// Split the string into an array

// Combine array elements into string

// Check if element exist in the array
/* $ausgabe1 = in_array('Banana', $arrFruits);

echo '<pre>';
var_dump($ausgabe1);
echo '</pre>'; */

// Search element index in the array
/* var_dump(array_search('Banana', $arrFruits)); */
// Merge two arrays
/* echo '<pre>';
//var_dump(array_merge($arrFruits, $arrFruits2));
var_dump( [ ...$arrFruits, ...$arrFruits2 ] );
echo '</pre>'; */
// Sorting of array (Reverse order also)

// Filter, map, reduce of array


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$arrPerson = array (
    'name' => 'Claire',
    'surname' => 'Redfield',
    'age' => '29',
    'hobbies' => [
        'Gun range',
        'driving motorcycle'
    ]
);
/* 
echo $arrPerson['name'] . '<br />'; */

// Get element by key
/* $arrPerson['new key'] = 'new value';

var_dump($arrPerson); */

// Set element by key

// Check if array has specific key

// Print the keys of the array
/* echo '<pre>';
var_dump(array_keys($arrPerson));
echo '</pre>';  */

// Print the values of the array
/* echo '<pre>';
var_dump(array_values($arrPerson));
echo '</pre>'; */
// Sorting associative arrays by values, by keys


// Two dimensional arrays
$arrToDoItems = [
    [
        'title' => 'item 1',
        'completed' => 'true'
    ],
    [
        'title' => 'item 2',
        'completed' => 'false'
    ]
];
$arrToDoItems2 = array(
    array(
        'title' => 'item 3',
        'completed' => 'false'
    ),
    array (
        'title' => 'item 4',
        'completed' => 'false'
    )
);

echo '<pre>';
var_dump($arrToDoItems);
var_dump($arrToDoItems2);
echo '</pre>';

