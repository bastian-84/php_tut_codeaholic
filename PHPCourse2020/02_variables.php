<?php

// What is a variable

// Variable types

// Declare variables
$sName = 'Claire';
$iAge = 28;
$bIsMale = true;
$fHeight = 1.85;
$nSalary = null;

// Print the variables. Explain what is concatenation
/* echo $sName . '<br />';
echo $iAge . '<br />';
echo $bIsMale . '<br />';
echo $fHeight . '<br />';
echo $nSalary . '<br />'; */

// Print types of the variables
/* echo gettype($sName).'<br />';
echo gettype($iAge).'<br />';
echo gettype($bIsMale).'<br />';
echo gettype($fHeight).'<br />';
echo gettype($nSalary).'<br />'; */

// Print the whole variable
# var_dump($sName);

// Change the value of the variable

// Print type of the variable

// Variable checking functions
/* var_dump(is_string($sName));
echo '<br />';
var_dump(is_int($iAge));
echo '<br />';
var_dump(is_bool($bIsMale));
echo '<br />';
var_dump(is_double($fHeight));
echo '<br />';
var_dump(is_null($nSalary)); */

// Check if variable is defined
//var_dump(isset($varNOTset));


// Constants
/* define(
    'Pi',
    3.14
);
echo Pi;
echo '<br />';

var_dump( defined(Pi) ); */
// Using PHP built-in constants
echo PHP_INT_MAX;