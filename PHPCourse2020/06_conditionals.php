<?php

$age = 28;
$salary = 300000;

// if condition

// if condition - else

// if condition1 AND condition2

// if condition1 OR condition2

// if condition1 - elseif condition2 - else

// if condition1 and condition2 - elseif condition1 and condition2 - else

// Ternary if
//echo ($age < 22) ? 'Young' : 'Not young';
// echo ($age < 22) ? 'Young' : ($age < 30 ? 'Not young' : 'old');
// Null coalescing operator

// 7.1
// exists?
/* if($age == true){
    echo var_dump($age) . ' ($age) exits ';
} */
/* $myAge = 0;
if($myAge == true){
    $myAge = 8;
}else{
    $myAge = 18;
} */
#$myAge = $age ? : 18;
# if ($age == true){ $myAge = $age}

/* $myAddress = isset($address) ? $address : 'Current location';
$myAddress = $address ?? 'Current location';
# if($address isset){ $address = $address}else{ echo ' Current location'}
echo $myAddress; */


// Null coalescing assignment operator. Since PHP 7.4
/* $person = array(
    'name' => 'John'
); */
/* if ( !isset($person['name'])){
    $person['name'] = 'Anonymous';
} */

/* $person['name'] ??= 'Anonymous';

echo $person['name'] . '<br />'; */
// switch
// vanilla php
$userRole = 'admin';

switch ($userRole){
    case 'admin':
        echo 'Your role is admin';
        break;
    case 'editor':
        echo 'Your role is editor';
        break;
    default:
        echo 'You are not assigened to a role.';
        break;
}
// new syntax

/* echo $myAge; */